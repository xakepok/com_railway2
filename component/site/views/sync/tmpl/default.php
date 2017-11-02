<?php defined('_JEXEC') or die;
echo JText::_('COM_RAILWAY2_SYNC_OK');
if (JFactory::getUser()->authorise('core.manage', 'com_railway2'))
Railway2HelperCodes::dump($this->items);