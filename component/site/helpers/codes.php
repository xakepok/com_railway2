<?php
defined('_JEXEC') or die;
class Railway2HelperCodes {

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