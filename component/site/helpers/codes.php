<?php
defined('_JEXEC') or die;
class Railway2HelperCodes {
    /* Отображаем имя станции */
    static function getStationName($name, $popularName = '', $displayBothNames = '0')
    {
        $stationName = $name;
        if (!empty($popularName)) {
            $stationName = $popularName;
            if ($displayBothNames != '0') $stationName .= " ({$name})";
        }
        return $stationName;
    }

    /* Отладка */
    static function dump($obj)
    {
        if (JFactory::getUser()->authorise('core.manage', 'com_railway2'))
        {
            echo "<pre>";
            var_dump($obj);
            echo "</pre>";
        }
    }

	/* Запрос прав */
	static function canDo($p)
    {
		return JFactory::getUser()->authorise($p, 'com_railway2');
	}

    /* Получение даты из УРЛ */
    static function getDateFromUrl()
    {
        $dat = JFactory::getApplication()->input->getString('date', false);
        return (!$dat || !self::isDate($dat)) ? self::getCurrentDate("Y-m-d") : $dat;
    }

    /* Время электричек в читабельном виде */
    static function timeRasp($time)
    {
        return (!empty($time)) ? date("H.i", strtotime($time)) : '';
    }

    /* Валидность даты */
    static function isDate($dat)
    {
        return preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$dat);
    }

    /* Получаем текущую дату */
    static function getCurrentDate($format)
    {
        return date($format);
    }

    static function iso8601ToDate($date)
    {
	    return date('Y-m-d', strtotime($date));
    }

    /* Получаем валидный код ЕСР */
    static function getValidEsr($esr, $digit = 6)
    {
    	if ($digit == 6) return (strlen($esr) == 5) ? '0'.$esr : $esr;
    	if ($digit == 5) return (strlen($esr) == 6 && substr($esr, 0, 1) == '0') ? substr($esr, 1) : $esr;
    }

    /* Получение направления по умолчанию для расписания по станции */
    static function getDefaultDir($id)
    {
    	$input = JFactory::getApplication()->input;
	    $db =& JFactory::getDbo();
	    $query = $db->getQuery(true);
	    $query
		    ->select('`schedule`')
		    ->from('#__rw2_directions')
		    ->where("`stationID` = {$id}");
	    $db->setQuery($query, 0, 1);

	    return $input->getString('direction', $db->loadResult());
    }

    /* Получение ЕСР кода станции по её ИД */
    static function getEsrById($id)
    {
        $db =& JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`esr`')
            ->from('#__rw2_station_codes')
	        ->where("`stationID` = {$id}");
	    $db->setQuery($query, 0, 1);
	    $result = $db->loadResult();
	    return self::getValidEsr($result);
    }

    /* Получение Яндекс кода станции по её ИД */
    static function getYandexById($id)
    {
        $db =& JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`yandex`')
            ->from('#__rw2_station_codes')
	        ->where("`stationID` = {$id}");
	    $db->setQuery($query, 0, 1);
	    $result = $db->loadResult();
	    return 's'.$result;
    }

    /* Получение ИД станции, километража и зоны  по ЕСР или яндексу */
    static function getStationByEsr($ids, $yandex = '')
    {
    	$res = '';
	    $db =& JFactory::getDbo();
	    $query = $db->getQuery(true);
	    $query
		    ->select('`c`.`stationID` as `id`, `c`.`esr`, `c`.`yandex`, `dir`.`zoneID`, `dir`.`distance`')
		    ->from('#__rw2_station_codes as `c`')
		    ->leftJoin("#__rw2_directions as `dir` ON `dir`.`stationID` = `c`.`stationID`");
	    if (is_array($ids) || is_array($yandex))
	    {
	    	$yandexNew = array();
	    	foreach ($yandex as $code)
		    {
		    	$yandexNew[] = substr($code, 1);
		    }
	    	$ids = implode(', ', $ids);
	    	$yandex = implode(', ', $yandexNew);
	    	$query->where("`esr` IN ({$ids}) OR `yandex` IN ({$yandex})");
	    	$db->setQuery($query);
	    	$res = $db->loadAssocList('esr');
	    }
	    if (is_numeric($ids) || is_numeric($yandex))
	    {
	    	$query->where("`esr` = {$ids} OR `yandex` = ".substr($yandex, 1));
		    $db->setQuery($query, 0, 1);
		    $res = $db->loadResult();
	    }
	    return $res;
    }

    /* Чётность числа */
    static function isOdd($digit)
    {
	    return (($digit % 2) == 1) ? true : false;
    }
}