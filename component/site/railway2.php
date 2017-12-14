<?php
defined('_JEXEC') or die;
jimport('joomla.error.log');

JError::$legacy = false;
require_once (JPATH_BASE.'/components/com_railway2/helpers/codes.php');
try
{
	$controller = JControllerLegacy::getInstance('railway2');
}
catch (Exception $e)
{
	JFactory::getApplication()->enqueueMessage(JText::_('COM_RAILWAY2_ERROR'), 'error');
	JLog::add($e->getMessage(), JLog::ERROR, 'com_railway2');
}

$controller->execute(JFactory::getApplication()->input->get('task'));

$controller->redirect();
