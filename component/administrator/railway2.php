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

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_railway2'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Require the helper
require_once JPATH_COMPONENT_ADMINISTRATOR . '/helpers/railway2.php';

// Execute the task
$controller = JControllerLegacy::getInstance('railway2');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
