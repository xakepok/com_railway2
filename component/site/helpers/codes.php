<?php
defined('_JEXEC') or die;
class Railway2HelperCodes {
	/* Запрос прав */
	static function canDo($p) {
		return JFactory::getUser()->authorise($p, 'com_railway2');
	}

    /* Получение даты из УРЛ */
    static function getDateFromUrl() {
        $dat = JFactory::getApplication()->input->getString('date', false);
        return (!$dat || !self::isDate($dat)) ? self::getCurrentDate("Y-m-d") : $dat;
    }

    /* Время электричек в читабельном виде */
    static function timeRasp($time) {
        return (!empty($time)) ? date("H.i", strtotime($time)) : '';
    }

    /* Валидность даты */
    static function isDate($dat) {
        return preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$dat);
    }

    /* Получаем текущую дату */
    static function getCurrentDate($format) {
        return date($format);
    }

    /* Получаем валидный код ЕСР */
    static function getValidEsr($esr) {
        return (strlen($esr) == 5) ? '0'.$esr : $esr;
    }

    /* Получение ЕСР кода станции по её ИД */
    static function getEsrById($id) {
        $db =& JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`esr`')
            ->from('#__rw2_station_codes')
            ->where('`id` = '.$id);
        $db->setQuery($query, 0, 1);
        $result = $db->loadResult();
        return self::getValidEsr($result);
    }
}