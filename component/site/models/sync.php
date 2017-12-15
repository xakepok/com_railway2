<?php defined('_JEXEC') or die;
require_once JPATH_BASE.'/components/com_railway2/helpers/online.php';

class Railway2ModelSync extends JModelLegacy {
	public $mgt, $archive;

	public static function getInstance($type, $prefix = '', $config = array())
	{
		return parent::getInstance($type, $prefix, $config); // TODO: Change the autogenerated stub
	}


	public function sync()
	{
		$this->mgt = JFactory::getApplication()->input->getBool('mgt', false);
		$this->archive = JFactory::getApplication()->input->getBool('archive', false);

		if (!$this->mgt)
		{
			$result = $this->syncRailway();
		}
		else {
			if (!$this->archive) {
				$result = $this->syncMGT();
			}
			else
			{
				$result = $this->archiveMGT();
			}
		}
		return $result;
	}

	/*  Определение старта МГТ */
	private function getStartId()
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query
			->select('`lastPark`, `lastID`')
			->from('#__mgt_last_sync');
		$db->setQuery($query, 0, 1);
		$id = $db->loadAssoc();
		if ($id['lastPark'] == '1' && $id['lastID'] > 1001750) return array('lastPark' => '3', 'lastID' => '1003000');
		if ($id['lastPark'] == '3' && $id['lastID'] > 1003998) return array('lastPark' => '4', 'lastID' => '1004000');
		if ($id['lastPark'] == '4' && $id['lastID'] > 1004998) return array('lastPark' => '8', 'lastID' => '1008000');
		if ($id['lastPark'] == '8' && $id['lastID'] > 1008550) return array('lastPark' => '9', 'lastID' => '1016000');
		if ($id['lastPark'] == '9' && $id['lastID'] > 1017750) return array('lastPark' => '11', 'lastID' => '1011000');
		if ($id['lastPark'] == '11' && $id['lastID'] > 1011998) return array('lastPark' => '14', 'lastID' => '1014000');
		if ($id['lastPark'] == '14' && $id['lastID'] > 1014600) return array('lastPark' => '15', 'lastID' => '1015000');
		if ($id['lastPark'] == '15' && $id['lastID'] > 1015998) return array('lastPark' => '19', 'lastID' => '1019000');
		if ($id['lastPark'] == '19' && $id['lastID'] > 1019600) return array('lastPark' => '1', 'lastID' => '1001000');
		return $id;
	}

	/* Синхронизация МГТ */
	private function syncMGT()
	{
		if (!$this->checkTime()) return JText::_('COM_RAILWAY2_MGT_STAT_ERROR_OFF');
		jimport('phpQuery-onefile');
		$res = array();
		$start = $this->getStartId();

		for ($i = $start['lastID']; $i < $start['lastID']+50; $i++)
		{
			$params = array(
				'srv_id' => $start['lastPark'],
				'uniqueid' => $i
			);
			$url = 'http://guest:guest@moscow.map.office.transnavi.ru/wap/online/?'.http_build_query($params);

			$d = phpQuery::newDocumentHtml(file_get_contents($url));

			$tmp = new phpQueryObject($d->find('head'));
			foreach ($d->find("h1") as $fnd) {
				$tmp = trim(pq($fnd)->text());
				$num = mb_stripos($tmp, ' / ');
				if ($num !== false)
				{
					$vehicle = (int) trim(mb_substr($tmp, $num+3, NULL, 'UTF-8'));
					if ($vehicle != 0) $res[$params['uniqueid']]['vehicle'] = $vehicle;
					break;
				}
			}
			if (isset($res[$params['uniqueid']]['vehicle']))
			{
				$tmp = new phpQueryObject($d->find('tbody'));
				$res[$params['uniqueid']]['route'] = false;
				foreach ($d->find("a[href^='?mr_id']") as $fnd)
				{
					$tmp = trim(pq($fnd)->text());
					$res[$params['uniqueid']]['route'] = $tmp;
				}
			}
		}

		if (!empty($res)) {
			$this->exportToBaseMGT($res);
		}
		$last = $start['lastID'] + 50;
		$park = $start['lastPark'];

		$query = "UPDATE `#__mgt_last_sync` SET `lastID` = {$last}, `lastPark` = {$park}";
		$db = JFactory::getDbo();
		$db->setQuery($query);
		$db->query();

		return $res;
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
		$result['controlExpress'] = $controlPoint->express;
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
		if (!empty($res)) $this->exportToBaseRW($dir, $res);

		return (!empty($res)) ? $result : JText::_('COM_RAILWAY2_MGT_STAT_ERROR_EMPTY');
	}

	/* Экспортируем записи онлайна МГТ в базу */
	private function exportToBaseMGT($data)
	{
		$db = JFactory::getDbo();
		$query = 'INSERT INTO `#__mgt_online` (`vehicle`, `route`, `uniqueid`) VALUES ';
		$values = array();
		foreach ($data as $item => $value) {
			$route = $value['route'];
			$vehicle = $value['vehicle'];
			if ($vehicle != 0) $values[] = "('{$vehicle}', '{$route}', '{$item}')";
		}
		$query .= implode(',', $values);
		//$query .= " ON DUPLICATE KEY UPDATE `station`=VALUES(`station`), `latence`=VALUES(`latence`), `stamp` = CURRENT_TIMESTAMP()";

		$db->setQuery($query);
		$db->query();

		return true;
	}

	/* Архивирование таблицы МГТ за сутки */
	private function archiveMGT()
	{
		$db = JFactory::getDbo();
		$query = "call archive_mgt_online()";
		$db->setQuery($query);
		$db->query();
		$query = 'call clear_mgt_online()';
		$db->setQuery($query);
		$db->query();
		return true;
	}

	private function exportToBaseRW($dir, $data)
	{
		$db = JFactory::getDbo();
		$query = 'INSERT INTO `#__rw2_online` (`dat`, `directionID`, `num`, `station`, `latence`) VALUES ';
		$values = array();
		foreach ($data as $num => $item) {
			$station = $item['station'];
			$latence = $item['status'];
			$values[] = "(CURRENT_DATE(), '{$dir}', '{$num}', '{$station}', '{$latence}')";
		}
		$query .= implode(',', $values);
		$query .= " ON DUPLICATE KEY UPDATE `station`=VALUES(`station`), `latence`=VALUES(`latence`), `stamp` = CURRENT_TIMESTAMP()";

		$db->setQuery($query);
		$db->query();
		return true;
	}

	/* Проверка времени синхронизации */
	private function checkTime()
	{
		$hour = (int) Railway2HelperCodes::getCurrentDate("G");
		return ($hour == '0' || $hour == '1' || $hour == '2' || $hour == '7' || $hour == '8' || $hour == '9' || $hour == '14' || $hour == '15' || $hour == '16' || $hour == '19' || $hour == '20' || $hour == '21') ? true : false;
	}
}