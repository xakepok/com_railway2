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
