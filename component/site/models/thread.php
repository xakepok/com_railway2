<?php
defined('_JEXEC') or die;

class Railway2ModelThread extends JModelList
{
	public function __construct(array $config = array())
	{
		$input = JFactory::getApplication()->input;
		$this->date = (!Railway2HelperCodes::isDate($input->getString('date'))) ? Railway2HelperCodes::getCurrentDate('Y-m-d') : $input->getString('date');
		$this->uid = $input->getString('id', false);
		parent::__construct($config);
	}

	public function getItems() {
		$model = JModelLegacy::getInstance('Yandexrasp', 'Railway2Model');
		$model->setUID($this->uid);
		$tmp = $model->query();
		$esr = array();
		$res = array();
		if (empty($tmp)) return false;
		$res['except_days'] = $tmp->except_days;
		$res['uid'] = $tmp->uid;
		$res['title'] = $tmp->title;
		$res['number'] = $tmp->number;
		$res['days'] = $tmp->days;
		$res['carrier'] = $tmp->carrier->title;
		$res['transport_type'] = $tmp->transport_type;
		$res['stops'] = array();
		foreach ($tmp->stops as $item)
		{
			$esr[] = Railway2HelperCodes::getValidEsr($item->station->codes->esr);
		}
		$codes = Railway2HelperCodes::getIdByEsr($esr);
		$desc = $this->getDescByRoute($codes);
		foreach ($tmp->stops as $item)
		{
			$arr = (!empty($item->arrival)) ? date("H.i", strtotime($item->arrival)) : '';
			$dep = (!empty($item->departure)) ? date("H.i", strtotime($item->departure)) : '';
			$platform = $item->platform;
			$stationID = $codes[$item->station->codes->esr]['id'];
			$link = JRoute::_("index.php?option=com_railway2&view=station&id={$stationID}&Itemid=236");
			$stationLink = JHtml::link($link, $item->station->title);
			$kassa = $this->checkDesc($desc[$stationID], $item->departure);
			$k = ($kassa === false) ? "<span class='desc-not-work'>".JText::_('COM_RAILWAY2_DESC_NO_WORK')."</span>" : '';
			if (empty($desc[$stationID])) $k = JText::_('COM_RAILWAY2_NOINFO');
			if ($arr == $dep)
			{
				$arr = '-';
				$dep = '-';
			}
			if ($arr == '-' && $dep == '-') $k = '';
			$res['stops'][] = array(
				'arr' => $arr,
				'dep' => $dep,
				'platform' => $platform,
				'station' => $stationLink,
				'desc' => $k
			);
		}
		return $res;
	}

	private function checkDesc($desc, $dat)
	{
		if ($dat == '') return '';
		$dayOfWeek = date("w", strtotime($dat));
		$work = false;
		foreach ($desc as $item)
		{
			if ($item->turnstiles != null)
			{
				$work = true;
				break;
			}
			$d = substr($item->timemask, $dayOfWeek, 1);
			if ($d == 1) {
				if ($item->turnstiles == null && $item->time_1 == null && $item->time_2 == null)
				{
					$work = false;
					break;
				}
				if ($item->turnstiles == null && $item->time_1 != null && $item->time_2 != null)
				{
					if ($item->time_1 == '00:00:00' && $item->time_2 == '23:59:59')
					{
						$work = true;
						break;
					}
					$t = strtotime($dat);
					$t1 = strtotime(date("Y-m-d", strtotime($dat)).' '.$item->time_1);
					$t2 = strtotime(date("Y-m-d", strtotime($dat)).' '.$item->time_2);
					if ($t1 < $t && $t2 > $t)
					{
						$work = true;
						break;
					}
				}
			}
		}
		return $work;
	}

	/* Время работы касс на маршруте */
	private function getDescByRoute($codes)
	{
		if (empty($codes)) return false;
		$ids = array();
		foreach ($codes as $esr => $item)
		{
			$ids[] = $item['id'];
		}
		$ids = implode(', ', $ids);
		if (empty($ids)) return false;
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query
			->select('*')
			->from('#__rw2_station_tickets')
			->where("`stationID` IN ({$ids})");
		$db->setQuery($query);
		$result = $db->loadObjectList();
		if (empty($result)) return false;
		$desc = array();
		foreach ($result as $item)
		{
			if (!isset($desc[$item->stationID])) $desc[$item->stationID] = array();
			$desc[$item->stationID][] = $item;
		}
		return $desc;
	}

	/* Возвращаем дату запроса */
	public function getDate()
	{
		return $this->date;
	}

	/* Возвращаем UID нитки */
	public function getUID()
	{
		return $this->uid;
	}

	private $uid, $date;
}