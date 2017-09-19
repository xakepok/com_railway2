<?php
defined('_JEXEC') or die;
class Railway2HelperCodes {
    /* Рисуем схему */
    static function printScheme($item, $crosses)
    {
        $result = "";
        $icon['turnstiles'] = '/media/com_railway2/images/turnstiles_18.png';
        $icon['desc'] = '/media/com_railway2/images/desc_18.png';
        $icon['metro'] = '/media/com_railway2/images/Subway_18px.png';
        $linkOptions = array('target' => '_blank');
        $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
        $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
        $result = JHtml::link($stationLink, $stationName, $linkOptions).' ';
        if ($item->desc != NULL && $item->turnstiles == NULL) $result .= "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
        if ($item->turnstiles != NULL) $result .= "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
        if (!empty($crosses[$item->stationID])) {
            $result .= "<a class='jutooltip' title='".$crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
        }
        return $result;
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
            ->where('`id` = '.$id);
        $db->setQuery($query, 0, 1);
        $result = $db->loadResult();
        return self::getValidEsr($result);
    }
}