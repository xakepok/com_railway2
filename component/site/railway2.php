<?php
defined('_JEXEC') or die;

require_once (JPATH_BASE.'/components/com_railway2/helpers/codes.php');

$controller = JControllerLegacy::getInstance('railway2');
$controller->execute(JFactory::getApplication()->input->get('task'));

$controller->redirect();
