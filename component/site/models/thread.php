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
		$yandex = array();
		$res = array();
		if (empty($tmp)) return false;
		$res['except_days'] = $tmp->except_days;
		$res['uid'] = $tmp->uid;
		$res['title'] = (!empty($tmp->short_title)) ? $tmp->short_title : $tmp->title;
		$res['number'] = $tmp->number;
		$res['days'] = ucfirst($tmp->days);
		$res['carrier'] = $tmp->carrier->title;
		$res['transport_type'] = $tmp->transport_type;
		$res['stops'] = array();
		foreach ($tmp->stops as $item)
		{
			$yandex[] = $item->station->codes->yandex;
			$esr[] = Railway2HelperCodes::getValidEsr($item->station->codes->esr);
		}
		$codes = Railway2HelperCodes::getStationByEsr($esr, $yandex);
		$desc = $this->getDescByRoute($codes);
		foreach ($tmp->stops as $item)
		{
			$arr = (!empty($item->arrival)) ? date("H.i", strtotime($item->arrival)) : '';
			$dep = (!empty($item->departure)) ? date("H.i", strtotime($item->departure)) : '';
			$platform = $item->platform;
			$stationID = $zone = 0;
			$distance = 0;
			if (strlen($item->station->codes->esr) > 4)
			{
				$stationID = $codes[$item->station->codes->esr]['id'];
				$zone = $codes[$item->station->codes->esr]['zoneID'];
				$distance = $codes[$item->station->codes->esr]['distance'];
			} else{
				foreach ($codes as $esr => $c)
				{
					if ('s'.$c['yandex'] == $item->station->codes->yandex)
					{
						$stationID = $c['id'];
						$zone = $c['zoneID'];
						$distance = $c['distance'];
						break;
					}
				}
			}
			$link = JRoute::_("index.php?option=com_railway2&view=station&id={$stationID}&Itemid=236");
			$stationLink = (!empty($stationID)) ? JHtml::link($link, $item->station->title) : $item->station->title;
			$kassa = $this->checkDesc($desc[$stationID], $item->departure);
			$class = (Railway2HelperCodes::isOdd($zone)) ? 'zone-1' : 'zone-2';
			if (empty($desc[$stationID])) $kassa = JText::_('COM_RAILWAY2_NOINFO');
			if ($arr == $dep)
			{
				$arr = '-';
				$dep = '-';
			}
			if ($arr == '-' && $dep == '-') $kassa = '';
			$res['stops'][] = array(
				'arr' => $arr,
				'dep' => $dep,
				'platform' => $platform,
				'station' => $stationLink,
				'desc' => $kassa,
				'zone' => $zone,
				'class' => $class,
				'distance' => $distance
			);
		}
		return $res;
	}

	private function checkDesc($desc, $dat)
	{
		if ($dat == '') return '';
		$dayOfWeek = date("w", strtotime($dat));
		$work = $work = "<span class='desc-not-work'>".JText::_('COM_RAILWAY2_DESC_NO_WORK')."</span>";
		foreach ($desc as $item)
		{
			if ($item->tpd != '0')
			{
				$work = "<span class='desc-work'>".JText::_('COM_RAILWAY2_SCHEME_DESC_TPD')."</span>";
				break;
			}
			if ($item->turnstiles != null)
			{
				$work = "<span class='desc-work'>".JText::_('COM_RAILWAY2_DESC_WORK')."</span>";
				break;
			}
			$d = substr($item->timemask, $dayOfWeek, 1);
			if ($d == 1) {
				if ($item->turnstiles == null && $item->time_1 == null && $item->time_2 == null && $item->tpd == '0')
				{
					$work = "<span class='desc-not-work'>".JText::_('COM_RAILWAY2_DESC_NO_WORK')."</span>";
					break;
				}
				if ($item->turnstiles == null && $item->time_1 != null && $item->time_2 != null)
				{
					if ($item->time_1 == '00:00:00' && $item->time_2 == '23:59:59')
					{
						$work = "<span class='desc-work'>".JText::_('COM_RAILWAY2_DESC_WORK')."</span>";
						break;
					}
					$t = strtotime($dat);
					$t1 = strtotime(date("Y-m-d", strtotime($dat)).' '.$item->time_1);
					$t2 = strtotime(date("Y-m-d", strtotime($dat)).' '.$item->time_2);
					if ($t1 < $t && $t2 > $t)
					{
						$work = "<span class='desc-work'>".JText::_('COM_RAILWAY2_DESC_WORK')."</span>";
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