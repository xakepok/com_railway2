<?php
defined('_JEXEC') or die;

if (!JFactory::getUser()->authorise('core.manage', 'com_railway2'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Require the helper
require_once JPATH_COMPONENT_ADMINISTRATOR . '/helpers/railway2.php';

jimport('joomla.application.component.controller');

// Execute the task
$controller = JControllerLegacy::getInstance('Railway2');
$controller->execute(JFactory::getApplication()->input->getCmd('task','display'));
$controller->redirect();