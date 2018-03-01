<?php
defined('_JEXEC') or die;
use Joomla\CMS\MVC\Model\ListModel;

class Railway2ControllerRailway2 extends JControllerLegacy
{
    public function stations()
    {
        $model = ListModel::getInstance('Search', 'Railway2Model', array());
        $stations = $model::getStations();
        $stations = json_encode($stations);
        jexit($stations);
    }
}
