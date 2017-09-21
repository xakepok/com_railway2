<?php
defined('_JEXEC') or die;
class Railway2HelperCodes {

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

    /* Получение ИД станции по ЕСР */
    static function getIdByEsr($ids)
    {
    	$res = '';
	    $db =& JFactory::getDbo();
	    $query = $db->getQuery(true);
	    $query
		    ->select('`id`, `esr`')
		    ->from('#__rw2_station_codes');
	    if (is_array($ids))
	    {
	    	$ids = implode(', ', $ids);
	    	$query->where("`esr` IN ({$ids})");
	    	$db->setQuery($query);
	    	$res = $db->loadAssocList('esr');
	    }
	    if (is_numeric($ids))
	    {
	    	$query->where("`id` = {$ids}");
		    $db->setQuery($query, 0, 1);
		    $res = $db->loadResult();
	    }
	    return $res;
    }
}