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
    static function getValidEsr($esr)
    {
        return (strlen($esr) == 5) ? '0'.$esr : $esr;
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
	        ->where("`id` = {$id}");
	    $db->setQuery($query, 0, 1);
	    $result = $db->loadResult();
	    return self::getValidEsr($result);
    }

    /* Получение ИД станции по ЕСР или яндексу */
    static function getIdByEsr($ids, $yandex = '')
    {
    	$res = '';
	    $db =& JFactory::getDbo();
	    $query = $db->getQuery(true);
	    $query
		    ->select('`id`, `esr`, `yandex`')
		    ->from('#__rw2_station_codes');
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
	    	$query->where("`id` = {$ids} OR `yandex` = ".substr($yandex, 1));
		    $db->setQuery($query, 0, 1);
		    $res = $db->loadResult();
	    }
	    return $res;
    }
}