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
        //JHtmlSidebar::addEntry(JText::_('COM_RAILWAY2_CATEGORIES'), 'index.php?option=com_categories&view=categories&extension=com_railway2', $vName == 'categories');
	}
}
