<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class Railway2ControllerStations extends JControllerAdmin {
    public function getModel($name = 'Station', $prefix = 'RailwayModel')
    {
        return parent::getModel($name, $prefix, array('ignore_request' => true));
    }
}