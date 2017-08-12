<?php
defined('_JEXEC') or die;
class Railway2HelperCodes {
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