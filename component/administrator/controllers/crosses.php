<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class Railway2ControllerCrosses extends JControllerAdmin {
    public function getModel($name = 'Cross', $prefix = 'Railway2Model')
    {
        return parent::getModel($name, $prefix, array('ignore_request' => true));
    }
}