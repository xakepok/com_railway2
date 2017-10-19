<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class Railway2ControllerCodes extends JControllerAdmin {
    public function getModel($name = 'Codes', $prefix = 'Railway2Model')
    {
        return parent::getModel($name, $prefix, array('ignore_request' => true));
    }
}