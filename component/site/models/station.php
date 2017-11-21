<?php
defined('_JEXEC') or die;

class Railway2ModelStation extends JModelList
{
	public $stationID, $directionID;

	public function __construct(array $config = array())
	{
		$this->stationID = (int) JFactory::getApplication()->input->get('id', 0);
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
		$modelRasp->setESR(Railway2HelperCodes::getEsrById($this->stationID));
		$dir = Railway2HelperCodes::getDefaultDir($this->stationID);
		$modelRasp->setDirection($dir);
		$modelRasp->page      = 1;
		$tmp                  = $modelRasp->query();
		if (empty($tmp))
		{
			$modelRasp->setYandex(Railway2HelperCodes::getYandexById($this->stationID));
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

		return $res;
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
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);

		$query
			->select('*')
			->from('#__rw2_online')
			->where("`num` IN ({$num}) AND `directionID` = {$this->directionID} AND `dat` = CURRENT_DATE()");
		$db->setQuery($query);
		//Railway2HelperCodes::dump($this->directionID);
		$online = $db->loadAssocListList('num');

		foreach ($schedule as $item)
		{
            $color = ($item->thread->transport_subtype->code != 'suburban') ? $item->thread->transport_subtype->color : '#276E41';
            $linkOption = array('target' => '_blank', 'class' => 'thread-link');
            $o = JText::_('COM_RAILWAY2_SYNC_NO_DATA');
            if (isset($online[$item->thread->number]))
            {
	            if ((int) $online[substr($item->thread->number, 0, 4)]['latence'] == 0) $o = JText::_('COM_RAILWAY2_SYNC_BY_GRAPHIC');
	            if ((int) $online[substr($item->thread->number, 0, 4)]['latence'] > 0) $o = '+'.$online[$item->thread->number]['latence'].JText::_('COM_RAILWAY2_SYNC_BY_MIN');
            }

			$query           = array(
				'option' => 'com_railway2',
				'view'   => 'thread',
				'id'     => $item->thread->uid,
				'Itemid' => 246
			);
			$arr             = array(
				'number' => $item->thread->number,
				'color' => $color,
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