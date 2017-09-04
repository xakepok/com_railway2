<?php
defined('_JEXEC') or die;
class Railway2Helper
{
	public function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(JText::_('COM_RAILWAY2'), 'index.php?option=com_railway2&view=railway2', $vName == 'railway2');
        JHtmlSidebar::addEntry(JText::_('COM_RAILWAY2_STATIONS'), 'index.php?option=com_railway2&view=stations', $vName == 'stations');
        JHtmlSidebar::addEntry(JText::_('COM_RAILWAY2_DIRECTIONS_CONNECTIONS'), 'index.php?option=com_railway2&view=directions', $vName == 'directions');
        JHtmlSidebar::addEntry(JText::_('COM_RAILWAY2_SYNONYMS'), 'index.php?option=com_railway2&view=synonyms', $vName == 'synonyms');
        JHtmlSidebar::addEntry(JText::_('COM_RAILWAY2_DIRECTION_LIST'), 'index.php?option=com_railway2&view=direction_list', $vName == 'direction_list');
        JHtmlSidebar::addEntry(JText::_('COM_RAILWAY2_STATION_DESC_TIME'), 'index.php?option=com_railway2&view=tickets', $vName == 'tickets');
        JHtmlSidebar::addEntry(JText::_('COM_RAILWAY2_INSPECTIONS'), 'index.php?option=com_railway2&view=inspections', $vName == 'inspections');
        JHtmlSidebar::addEntry(JText::_('COM_RAILWAY2_METRO_CROSSES'), 'index.php?option=com_railway2&view=crosses', $vName == 'crosses');
        //JHtmlSidebar::addEntry(JText::_('COM_RAILWAY2_CATEGORIES'), 'index.php?option=com_categories&view=categories&extension=com_railway2', $vName == 'categories');
	}

	/* Название станции по ИД */
	static function getStationName($id)
    {
        $id = (int) $id;
        if ($id == 0) return false;
        $db =& JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`s`.`name`, `n`.`popularName`')
            ->from('#__rw2_stations as `s`')
            ->leftJoin('#__rw2_station_names as `n` ON `n`.`stationID` = `s`.`id`')
            ->where("`s`.`id` = {$id}");
        $db->setQuery($query, 0, 1);
        $result = $db->loadObject();
        if (empty($result)) return false;
        return (!empty($result->popularName)) ? $result->popularName : $result->name;
    }

	/* Получаем директории */
	static function getDirections() {
	    $db =& JFactory::getDbo();
	    $query = $db->getQuery(true);
	    $query
            ->select('id, title')
            ->from('#__rw2_directions_list')
            ->order('title');
	    $db->setQuery($query);
	    return $db->loadObjectList();
    }

	/* Запрос прав */
	static function canDo($p) {
		return JFactory::getUser()->authorise($p, 'com_railway2');
	}

	/* Рузультат времени работы касс на направлении приводим в читабельный вид */
	static function parseCashDesc($result) {
        $stations = array();
        $str = "";
        foreach ($result as $res) {
            if (!isset($stations[$res['name']])) $stations[$res['name']] = array();
            if ($res['time_1'] == null && $res['time_2'] == null) {
                $stations[$res['name']][] = JText::_('COM_RAILWAY2_STATION_DESC_NO');
            } else {
                $start = explode(':', $res['time_1']);
                $end = explode(':', $res['time_2']);
                $stations[$res['name']][] = $start[0].'.'.$start[1].' - '.$end[0].'.'.$end[1];
            }
        }
        foreach ($stations as $st => $desc) {
            $str .= "<b>".$st."</b>: ".implode(', ', $desc)."\n";
        }
        return $str;
    }
}
