<?php
defined('_JEXEC') or die;
use Joomla\CMS\MVC\Model\BaseDatabaseModel;

class Railway2ModelStation extends BaseDatabaseModel
{
	public $stationID, $directionID, $directionName, $dat;

	public function __construct(array $config = array())
	{
		$this->stationID = (int) JFactory::getApplication()->input->get('id', 0);
		$this->directionName = JFactory::getApplication()->input->getString('direction', false);
		$this->dat = JFactory::getApplication()->input->getString('date', false);
		$this->directionID = $this->getDir();
		parent::__construct($config);
	}

	/* Расписание по станции */
	public function getRasp()
	{
		$result = array();
		if ($this->stationID == 0)
		{
			return false;
		}
		$modelRasp = JModelLegacy::getInstance('Yandexrasp', 'Railway2Model');
        $modelRasp->setYandex(Railway2HelperCodes::getYandexById($this->stationID));
		$dir = Railway2HelperCodes::getDefaultDir($this->stationID);
		$modelRasp->setDirection($dir);
		$modelRasp->page      = 1;
		$tmp                  = $modelRasp->query();
		if (empty($tmp))
		{
            $modelRasp->setESR(Railway2HelperCodes::getEsrById($this->stationID));
			$tmp                  = $modelRasp->query();
		}
		$directions = array();
		foreach ($tmp->directions as $direction)
		{
			$link = JRoute::_('index.php?option=com_railway2&view=station&id='.$this->stationID.'&Itemid=236&direction='.urlencode($direction->code).'&date='.urlencode(Railway2HelperCodes::getDateFromUrl()));
			$directions[] = (urldecode($direction->code) != $dir) ? JHtml::link($link, ucfirst($direction->title)) : ucfirst($direction->title);
		}
		asort($result['directions']);
		$result['directions'] = implode(' / ', $directions);
		$r = $this->generateRasp($tmp->schedule);
		$result['schedule'] = $r;
		while (!empty($tmp->schedule))
		{
			$modelRasp->offset += 100;
			$tmp               = $modelRasp->query();
			$r = $this->generateRasp($tmp->schedule);
			$result['schedule'] = array_merge($result['schedule'], $r);
		}
		return $result;
	}

	/* Основная информация */
	public function getItems()
	{
		if ($this->stationID == 0)
		{
			return false;
		}
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query
			->select('`s`.`name`,`n`.`popularName`, `n`.`displayBothNames`, `type`.`title` AS `tip`, `dir`.`color`, `dir`.`font`, `code`.`esr`, `code`.`express`')
			->from('#__rw2_stations AS `s`')
			->leftJoin('#__rw2_station_types as `type` ON `type`.`id` = `s`.`type`')
			->leftJoin('#__rw2_directions as `d` ON `d`.`stationID` = `s`.`id`')
			->leftJoin('#__rw2_directions_list as `dir` ON `dir`.`id` = `d`.`directionID`')
			->leftJoin('#__rw2_station_codes as `code` on `code`.`stationID` = `s`.`id`')
			->leftJoin('#__rw2_station_names as `n` ON `n`.`stationID` = `s`.`id`')
			->where('`s`.`id` = ' . $this->stationID);
		$db->setQuery($query, 0, 1);
		$result = $db->loadObject();
		if (!isset($result->esr)) return false;
		$detour = $this->getDetour();
		$food = $this->getFood();

		$res             = array();
		$res['id']       = $this->stationID;
		$res['name']     = Railway2HelperCodes::getStationName($result->name, $result->popularName, $result->displayBothNames);
		$res['type']     = $result->tip;
		$res['fullName'] = $res['type'] . ' ' . $res['name'];
		$res['style']    = "background-color: {$result->color}; color: {$result->font};";

		if ($detour !== false)
		{
			$res['detour']  = $detour['wayout'];
			$res['updated'] = $detour['updated'];
		}
		$res['food'] = $food;

		return $res;
	}

	private function getFood()
    {
        JLoader::register('FieldsHelper', JPATH_ADMINISTRATOR . '/components/com_fields/helpers/fields.php');
        $jcFields = FieldsHelper::getFields('com_railway2.direction', $this->stationID, true);
        //Railway2HelperCodes::dump($jcFields);
        $customFieldIds = array_map(create_function('$o', 'return $o->id;'), $jcFields); //get custom field Ids by custom field names
        $model = JModelLegacy::getInstance('Field', 'FieldsModel', array('ignore_request' => true)); //load fields model
        $customFieldTitles = array_map(create_function('$o', 'return $o->name;'), $jcFields); //Fetch names for custom fields
        $customFieldValues = $model->getFieldValues($customFieldIds, $this->getSvyazId()); //Fetch values for custom field Ids
        $reviews = array();
        $logos = array();
        foreach ($customFieldValues as $id => $value)
        {
            if (!empty($value))
            {
                if (gettype($value) != 'array')
                {
                    if (stripos($value, 'http') === false)
                    {
                        $logos[] = JHtml::image("media/com_railway2/images/logos/{$value}.png", $value);
                    }
                    else
                    {
                        $reviews[] = JHtml::link($value, JText::_('COM_RAILWAY2_REVIEW_DONER'), array('target' => '_blank'));
                    }
                }
                else
                {
                    foreach ($value as $item)
                    {
                        $logos[] = JHtml::image("media/com_railway2/images/logos/{$item}.png", $item);
                    }
                }
            }
        }
        $sum = count($logos) + count($reviews);
        $result['logos'] = implode(' ', $logos);
        $result['reviews'] = implode(', ', $reviews);
        return ($sum > 0) ? $result : false;
    }

    private function getSvyazId()
    {
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query
            ->select($db->quoteName('id'))
            ->from($db->quoteName('#__rw2_directions'))
            ->where($db->quoteName('stationID')." = ".$db->quote($this->stationID));
        return $db->setQuery($query, 0, 1)->loadResult();
    }

	/* Генерация массива для распейсания по станции */
	private function generateRasp($schedule)
	{
		$result = array();
		$num = array();
		foreach ($schedule as $item)
		{
			$num[] = substr($item->thread->number, 0, 4);
		}
		$num = implode(', ', $num);
		if (!empty($num))
        {
            $db = JFactory::getDbo();
            $query = $db->getQuery(true);

            $query
                ->select('`o`.`num` as `num`, `o`.`latence`, `o`.`station`, `n`.`popularName` as `station`')
                ->from('#__rw2_online as `o`')
                ->leftJoin('#__rw2_station_names as `n` ON `n`.`stationID` = `o`.`station`')
                ->where("`o`.`num` IN ({$num}) AND `o`.`directionID` = {$this->directionID} AND `o`.`dat` = CURRENT_DATE()");
            $online = $db->setQuery($query)->loadAssocList('num');
        }
        else
        {
            $online = false;
        }
        $modelCocons = JModelLegacy::getInstance('Cocons', 'Railway2Model');
        $cocons = $modelCocons->getCocons();

        foreach ($schedule as $item)
		{
            $color = ($item->thread->transport_subtype->code != 'suburban') ? $item->thread->transport_subtype->color : '#276E41';
            $linkOption = array('target' => '_blank', 'class' => 'thread-link');
            $num = explode("/", $item->thread->number);
            $num = $num[0];

			$query           = array(
				'option' => 'com_railway2',
				'view'   => 'thread',
				'id'     => $item->thread->uid,
				'Itemid' => 246
			);
            $o = JText::_('COM_RAILWAY2_SYNC_NO_DATA');
            if (isset($online[$num]))
            {
                $o = JText::_('COM_RAILWAY2_SYNC_BY_GRAPHIC');
                if ((int) $online[$num]['latence'] > 0)
                {
                    $o = "+".$online[$num]['latence']." ".JText::_('COM_RAILWAY2_SYNC_BY_MIN')." ".JText::_('COM_RAILWAY2_ONLINE_BY_STATION')." ";
                    $o .= $online[$num]['station'];
                }
            }
            $isCocon = '';
            foreach ($cocons as $cocon)
            {
                if ($modelCocons->checkCocon($cocon->thread, $item->thread->uid))
                {
                    $isCocon = JText::_('COM_RAILWAY2_COCONS_MAYBE');
                    if (JFactory::getUser()->authorise('core.add', 'com_railway2'))
                    {
                        $isCocon .="&nbsp;".$this->createCoconDelLink($item->thread->uid);
                    }
                    break;
                }
                else
                {
                    if (JFactory::getUser()->authorise('core.add', 'com_railway2'))
                    {
                        $isCocon = $this->createCoconLink($item->thread->uid);
                    }
                }
            }
            if (empty($isCocon) && JFactory::getUser()->authorise('core.add', 'com_railway2')) $isCocon = $this->createCoconLink($item->thread->uid);
			$arr             = array(
				'number' => $item->thread->number,
				'color' => $color,
				'cocon' => $isCocon,
				'time' => Railway2HelperCodes::timeRasp(($item->departure !== null) ? $item->departure : $item->arrival),
				'link' => JHtml::link(JRoute::_('index.php?' . http_build_query($query)), $item->thread->title, $linkOption),
				'stops' => $item->stops,
				'platform' => $item->platform,
                'type' => ($item->thread->transport_subtype->code != 'suburban') ? $item->thread->transport_subtype->title : '',
				'online' => $o
			);
			array_push($result, $arr);
		}
		return $result;
	}

	/* Ближайшая станция без касс */
	public function getNearSafe()
	{
		if ($this->stationID == 0)
		{
			return false;
		}
		$result = array();
		$db     = JFactory::getDbo();
		$query  = $db->getQuery(true);
		$query
			->select('`directionID`, `indexID`')
			->from('#__rw2_directions')
			->where("`stationID` = {$this->stationID}");
		$db->setQuery($query, 0, 1);
		$station = $db->loadObject();
		if (empty($station)) return false;
		$query = $db->getQuery(true);
		$query
			->select('`dir`.`stationID`, `st`.`name`')
			->from('#__rw2_station_tickets AS `t`')
			->leftJoin('#__rw2_directions as `dir` ON `dir`.`stationID` = `t`.`stationID`')
			->leftJoin('#__rw2_stations as `st` ON `st`.`id` = `dir`.`stationID`')
			->where("`dir`.`indexID` > {$station->indexID}")
			->where("`dir`.`directionID` = {$station->directionID}")
			->where('`t`.`time_1` IS NULL')
			->where('`t`.`turnstiles` IS NULL')
			->order('`dir`.`indexID` ASC');
		$db->setQuery($query, 0, 1);
		$tmp = $db->loadObject();
		if (!empty($tmp)) array_push($result, $tmp);
		$query = $db->getQuery(true);
		$query
			->select('`dir`.`stationID`, `st`.`name`')
			->from('#__rw2_station_tickets AS `t`')
			->leftJoin('#__rw2_directions as `dir` ON `dir`.`stationID` = `t`.`stationID`')
			->leftJoin('#__rw2_stations as `st` ON `st`.`id` = `dir`.`stationID`')
			->where("`dir`.`indexID` < {$station->indexID}")
			->where("`dir`.`directionID` = {$station->directionID}")
			->where('`t`.`time_1` IS NULL')
			->where('`t`.`turnstiles` IS NULL')
			->order('`dir`.`indexID` DESC');
		$db->setQuery($query, 0, 1);
		$tmp = $db->loadObject();
		if (!empty($tmp)) array_push($result, $tmp);

		return $result;
	}

    /* Ссылка на добавление коконов */
    private function createCoconLink($thread)
    {
        $params = array();
        $params['option'] = 'com_railway2';
        $params['view'] = 'station';
        $params['id'] = $this->stationID;
        $params['dir'] = $this->directionID;
        $params['Itemid'] = 236;
        if ($this->directionName !== false)
        {
            $params['direction'] = $this->directionName;
        }
        if ($this->dat !== false)
        {
            $params['dat'] = $this->dat;
        }
        $back = base64_encode(JRoute::_("index.php?".http_build_query($params)));
        $url = "/index.php?option=com_railway2&task=railway2.cocon&thread={$thread}&back={$back}";
        return JHtml::link($url, JText::_('COM_RAILWAY2_COCONS'));
    }

    /* Ссылка на удаление коконов */
    private function createCoconDelLink($thread)
    {
        $params = array();
        $params['option'] = 'com_railway2';
        $params['view'] = 'station';
        $params['id'] = $this->stationID;
        $params['dir'] = $this->directionID;
        $params['Itemid'] = 236;
        if ($this->directionName !== false)
        {
            $params['direction'] = $this->directionName;
        }
        if ($this->dat !== false)
        {
            $params['dat'] = $this->dat;
        }
        $back = base64_encode(JRoute::_("index.php?".http_build_query($params)));
        $url = "/index.php?option=com_railway2&task=railway2.cocon&thread={$thread}&del=1&back={$back}";
        return JHtml::link($url, "[X]", array('style'=>'color:red;'));
    }

    /* Направление станции */
	private function getDir() {
		$dir = JFactory::getApplication()->input->getInt('d', 0);
		if ($dir == 0)
		{
			$db    = JFactory::getDbo();
			$query = $db->getQuery(true);
			$query
				->select('`directionID`')
				->from('#__rw2_directions')
				->where("`stationID` = {$this->stationID}");
			$db->setQuery($query, 0, 1);
			$dir = $db->loadResult();
		}

		return $dir;
	}

	/* Обходинг */
	private function getDetour()
	{
		if ($this->stationID == 0)
		{
			return false;
		}
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query
			->select('`turnstiles`, `detour`, `mod_date`')
			->from('#__rw2_station_tickets')
			->where("stationID = {$this->stationID}");
		$db->setQuery($query, 0, 1);
		$result = $db->loadObject();
		if (count($result) < 1 || $result->turnstiles == null) return false;
		$res = array(
			'wayout'  => $result->detour,
			'updated' => JText::_('COM_RAILWAY2_UPDATED') . ' ' . date("d.m.Y", strtotime($result->mod_date))
		);

		return $res;
	}
}