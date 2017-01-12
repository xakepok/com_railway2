<?php
/**
 * @package    railway2
 *
 * @author     Admin <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

/**
 * Railway2 helper.
 *
 * @package     A package name
 * @since       1.0
 */
class Railway2Helper
{
	/**
	 * Render submenu.
	 *
	 * @param   string  $vName  The name of the current view.
	 *
	 * @return  void.
	 *
	 * @since   1.0
	 */
	public function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(JText::_('COM_RAILWAY2'), 'index.php?option=com_railway2&view=railway2', $vName == 'railway2');
        JHtmlSidebar::addEntry(JText::_('COM_RAILWAY2_DIRECTIONS'), 'index.php?option=com_railway2&view=directions', $vName == 'directions');
        JHtmlSidebar::addEntry(JText::_('COM_RAILWAY2_STATIONS'), 'index.php?option=com_railway2&view=stations', $vName == 'stations');
	}
}
