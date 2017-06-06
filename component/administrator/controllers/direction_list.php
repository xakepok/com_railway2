<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class Railway2ControllerDirection_list extends JControllerAdmin {
    public function getModel($name = 'Direction_item', $prefix = 'Railway2Model')
    {
        return parent::getModel($name, $prefix, array('ignore_request' => true));
    }
}