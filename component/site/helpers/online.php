<?php
defined('_JEXEC') or die;

class Railway2HelperOnline {
	/* Приводим имя станции в правильный вид */
	static function validStationName($name)
	{
		$name = mb_strtolower($name);
		return self::mb_ucfirst($name);
	}

	/* Получаем URL */
	static function getURL($express)
	{
		$query = array(
			'STRUCTURE_ID' => '704',
			'layer_id' => '5367',
			'refererLayerId' => '5364',
			'id' => $express,
			'StationName' => 'ZHOPA',
			'date' => Railway2HelperCodes::getCurrentDate('d.m.Y')
		);

		return 'http://pass.rzd.ru/tablo/public/ru?'.http_build_query($query);
	}

	/* Получаем контрольную точку */
	static function getControlPoint($dir)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query
			->select('`c`.`stationID`, `c`.`express`')
			->from('#__rw2_directions as `d`')
			->leftJoin('#__rw2_station_codes as `c` ON `c`.`stationID` = `d`.`stationID`')
			->where("`isControlPoint` = 1 AND `directionID` = {$dir}");
		$db->setQuery($query, 0,1);
		$result = $db->loadObject();
		return $result;
	}

	/* Получаем направление для онлайна */
	static function getDirection()
	{
		$dir = 0;
		$directions = self::getAllDirections();
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query
			->select("`id`")
			->from("#__rw2_directions_list")
			->where("`sync` = 1 AND `state` > 0 AND `id` NOT IN (SELECT DISTINCT `directionID` FROM `#__rw2_online` WHERE `dat` = CURRENT_DATE())")
			->order('`id`');
		$dir = $db->setQuery($query, 0, 1)->loadResult();
		if ($dir == '0' || empty($dir) || $dir == null)
		{
			$query = $db->getQuery(true);
			$query
				->select('`o`.`directionID`')
				->from("#__rw2_online as `o`")
				->leftJoin("#__rw2_directions_list as `d` ON `d`.`id` = `o`.`directionID`")
				->where("`d`.`sync` = 1 AND `o`.`dat` = CURRENT_DATE() AND `d`.`state` > 0 AND `o`.`stamp` = (SELECT MIN(`stamp`) FROM `#__rw2_online`)")
			;
            $dir = $db->setQuery($query, 0, 1)->loadResult();
		}

		return $dir;
	}

	/* Получаем количество активных направлений */
	function getAllDirections()
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query
			->select('id')
			->from('#__rw2_directions_list')
			->where('`sync` = 1 AND `state` > 0')
			->order('id');
		$db->setQuery($query);
		return $db->loadObjectList();
	}

	static function mb_ucfirst($string, $enc = 'UTF-8')
	{
		return mb_strtoupper(mb_substr($string, 0, 1, $enc), $enc) .
			mb_substr($string, 1, mb_strlen($string, $enc), $enc);
	}
}