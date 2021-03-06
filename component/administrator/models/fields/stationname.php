<?php
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldStationName extends JFormFieldList  {
    protected  $type = 'StationName';

    protected function getOptions()
    {
        $db = JFactory::getDbo();
        $view = JFactory::getApplication()->input->getString('view');
        $param =  ($view == 'direction' || $view == 'ticket' || $view == 'synonym' || $view == 'cross' || $view == 'code') ? 'stationID' : 'id';
        $stationID = JFactory::getApplication()->input->getInt($param, 0);

        $query = $db->getQuery(true);
        $query
            ->select('`s`.`id`, `rw`.`road`, `c`.`express`, `r`.`region`')
	        ->select(Railway2Helper::getStationNameQuery())
            ->from('#__rw2_stations as `s`')
            ->leftJoin('#__rw2_railways AS `rw` ON `rw`.`id` = `s`.`railway`')
            ->leftJoin('#__rw2_station_codes AS `c` ON `c`.`stationID` = `s`.`id`')
            ->leftJoin('#__rw2_regions AS `r` ON `r`.`id`=`s`.`region`')
	        ->leftJoin('#__rw2_station_names as `n` ON `n`.`stationID` = `s`.`id`')
            ->order('`stationName`');
        if ($view != 'code') $query->where('`s`.`railway` != 0');
        if ($view != 'direction' && $view != 'code') $query->select('`l`.`title` as `direction`');
        if ($view == 'direction' && $stationID == 0) $query->where('`r`.`id` IN (173, 208, 150, 200, 210, 161, 205)');
        if ($stationID != 0) $query->where('`s`.`id` = '.$stationID);
        if ($view == 'ticket' || $view == 'cross' || $view == 'synonym') {
            $query
                ->rightJoin('#__rw2_directions as `d` ON `d`.`stationID` = `s`.`id`')
                ->leftJoin('#__rw2_directions_list as `l` ON `l`.`id` = `d`.`directionID`');
        }
        $db->setQuery($query);
        $names = $db->loadObjectList();

        $options = array();

        if ($names) {
            foreach ($names as $name) {
            	$n = $name->stationName;
            	$n .= ' ('.$name->region.') ';
            	if ($view == 'ticket' || $view == 'cross') $n .= ', '.$name->direction.' '.mb_strtolower(JText::_('COM_RAILWAY2_DIRECTION'));
            	if ($view != 'code') $n .= ' '.$name->express;
                $options[] = JHtml::_('select.option', $name->id, $n);
            }
        }

        $options = array_merge(parent::getOptions(), $options);

        return $options;
    }
}