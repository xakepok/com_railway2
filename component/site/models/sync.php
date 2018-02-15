<?php defined('_JEXEC') or die;
require_once JPATH_BASE.'/components/com_railway2/helpers/online.php';

class Railway2ModelSync extends JModelLegacy {
	public $archive;

	public static function getInstance($type, $prefix = '', $config = array())
	{
		return parent::getInstance($type, $prefix, $config); // TODO: Change the autogenerated stub
	}


	public function sync()
	{
		$this->archive = JFactory::getApplication()->input->getBool('archive', false);

		$result = $this->syncRailway();

		return $result;
	}

	/* Синхронизация железки */
	private function syncRailway()
	{
		jimport('phpQuery-onefile');

		$dir = Railway2HelperOnline::getDirection();
		$controlPoint = Railway2HelperOnline::getControlPoint($dir);
		$url = Railway2HelperOnline::getURL($controlPoint->express);

		$result['dir'] = $dir;
		$result['date'] = Railway2HelperCodes::getCurrentDate('Y-m-d');
		$result['controlID'] = $controlPoint->stationID;
		$result['URL'] = $url;

		$d = phpQuery::newDocumentHtml(file_get_contents($url));

		$tmp = new phpQueryObject($d->find('div.trlist__cell-pointdata__tr-num'));
		$time_type = 1; //1 - Время прибытия, 2 - время отправления
		$res = array();
		foreach ($d->find("tr[id^='tr'] > td") as $fnd) {
			$tmp = trim(pq($fnd)->text());
			if (preg_match('/\d{4}$/', $tmp) == 1) {
				$res[$tmp] = array();
				$num = $tmp;
				$res[$num]['express'] = $controlPoint->express; //Экспресс-3 код станции
			}
			if (preg_match('/\d{2}:\d{2}$/', $tmp) == 1 && $time_type == 1) {
				if (empty($res[$num]['arr'])) $res[$num]['arr'] = $tmp; //Время прибытия
				$time_type = 2;
			}
			if (preg_match('/\d{2}:\d{2}$/', $tmp) == 1 && $time_type == 2) {
				$res[$num]['dep'] = $tmp; //Время отправления
				$time_type = 1;
			}
			if (preg_match('/ - /', $tmp) == 1) {
				$res[$num]['route'] = $tmp; //Маршрут собаки
			}
			if (preg_match('/Поезд/', $tmp) == 1) {
				$status = str_ireplace(array('по графику', 'с опозданием'), array(' по графику', ' с опозданием'), $tmp);
				if (preg_match_all('/Поезд отправился со ст. ([\W\w]{2,}) с опозданием на (\d+)([\W\w]{2,})/', $status, $f, PREG_PATTERN_ORDER) == 1 || preg_match_all('/Поезд прибыл на ст. ([\W\w]{2,}) с опозданием на (\d+)([\W\w]{2,})/', $status, $f, PREG_PATTERN_ORDER) == 1) {
					$res[$num]['status'] = $f[2][0]; //Задержка
					$res[$num]['station'] = Railway2HelperOnline::validStationName($f[1][0]); //Название станции, которую проследовал или на которую прибыл поезд
				}
				if (preg_match_all('/Поезд отправился со ст. ([\W\w]{2,}) по графику/', $status, $f, PREG_PATTERN_ORDER) == 1 || preg_match_all('/Поезд прибыл на ст. ([\W\w]{2,}) по графику/', $status, $f, PREG_PATTERN_ORDER) == 1) {
					$res[$num]['status'] = 0;
					$res[$num]['station'] = Railway2HelperOnline::validStationName($f[1][0]); //Название станции, которую проследовал или на которую прибыл поезд
				}
				$num = '';
			}
			if (preg_match('/нет/', $tmp) == 1) {
				unset($res[$num]);
				$num = '';
			}
		}

		$result['res'] = $res;
		if (!empty($res))
		{
			$this->exportToBaseRW($dir, $res);
			$result['status'] = true;
			$result['message'] = JText::_('COM_RAILWAY2_SYNC_OK');
		}
		else
		{
			$result['status'] = false;
			$result['message'] = JText::_('COM_RAILWAY2_MGT_STAT_ERROR_EMPTY');
		}

		return json_encode($result);
	}

	private function exportToBaseRW($dir, $data)
	{
		$db = $this->getDbo();
		$info = $this->getDirectionInfo($dir);

		$table = $db->quoteName("#__rw2_online");
		$query = "INSERT INTO {$table} (`dat`, `directionID`, `num`, `fromID`, `toID`, `arr`, `parity`, `station`, `latence`) VALUES ";
		$values = array();
		$stationIDs = $this->getStationIdByRzdName($data);

		foreach ($data as $num => $item) {
			$latence = $item['status'];
			$st = explode(' - ', $item['route']);
			$from = Railway2HelperOnline::validStationName($st[0]);
			$to = Railway2HelperOnline::validStationName($st[1]);
			$station = Railway2HelperOnline::validStationName($item['station']);
			$fromID = $stationIDs[$from]['id'];
			$arr = $item['arr'].":00";
			$toID = $stationIDs[$to]['id'];
			$station = $stationIDs[$station]['id'];
			$parity = Railway2HelperCodes::getParity($num, $info->parity, $dir);
			$values[] = "(CURRENT_DATE(), '{$dir}', '{$num}', '{$fromID}', '{$toID}', '{$arr}', '{$parity}', '{$station}', '{$latence}')";
		}
		$query .= implode(',', $values);
		$query .= " ON DUPLICATE KEY UPDATE `station`=VALUES(`station`), `arr`=VALUES(`arr`), `parity`=VALUES(`parity`), `latence`=VALUES(`latence`)";

		$db->setQuery($query)->execute();
		return true;
	}

	private function getDirectionInfo($id)
	{
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$id = $db->quote($id);
		$query
			->select("*")
			->from($db->quoteName("#__rw2_directions_list"))
			->where("`id` = {$id}");
		return $db->setQuery($query, 0, 1)->loadObject();
	}

	private function getStationIdByRzdName($data)
	{
		$db = $this->getDbo();
		$stations = array();
		$st_list = array();
		foreach ($data as $num => $item) {
			$station = $db->quote(Railway2HelperOnline::validStationName($item['station']));
			$st = explode(' - ', $item['route']);
			$from = $db->quote(Railway2HelperOnline::validStationName($st[0]));
			$to = $db->quote(Railway2HelperOnline::validStationName($st[1]));
			$st_list[] = $station;
			$st_list[] = $from;
			$st_list[] = $to;
		}
		$st_list = array_unique($st_list);
		foreach ($st_list as $item)
		{
			$stations[] = "`n`.`rzdName` LIKE {$item} OR `s`.`name` LIKE {$item}";
		}
		$where = "((".implode( ' OR ', $stations).")";
		$where .= " AND (`s`.`region` IN (173, 208, 150, 200, 210, 161, 205)))";
		$query = $db->getQuery(true);
		$query
			->select("DISTINCT `s`.`id` as `id`, IF(`n`.`rzdName`='',`s`.`name`,`n`.`rzdName`) as `name`")
			->from("#__rw2_stations as `s`")
			->leftJoin("#__rw2_station_names as `n` ON `n`.`stationID` = `s`.`id`")
			->where($where);
		$res = $db->setQuery($query)->loadAssocList('name');
		$result = array();
		foreach ($res as $name => $item)
		{
			$name = Railway2HelperOnline::validStationName($name);
			$result[$name] = array("id" => $item['id'], "name" => $name);
		}

		return $result;
	}
}