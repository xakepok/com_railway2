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
        $param =  ($view == 'direction' || $view == 'ticket') ? 'stationID' : 'id';
        $stationID = JFactory::getApplication()->input->getInt($param, 0);

        $query = $db->getQuery(true);
        $query
            ->select('`s`.`id`, `s`.`name`, `rw`.`road`, `c`.`express`')
            ->from('#__rw2_stations as `s`')
            ->leftJoin('#__rw2_railways AS `rw` ON `rw`.`id` = `s`.`railway`')
            ->leftJoin('#__rw2_station_codes AS `c` ON `c`.`id` = `s`.`id`')
            ->where('`c`.`express` != 0 AND `s`.`railway` != 0')
            ->order('`s`.`name`');
        if ($stationID != 0) $query->where('`s`.`id` = '.$stationID);
        if ($view == 'ticket') {
            $query
                ->rightJoin('#__rw2_directions as `d` ON `d`.`stationID` = `s`.`id`');
        }
        $db->setQuery($query);
        $names = $db->loadObjectList();

        $options = array();

        if ($names) {
            foreach ($names as $name) {
                $options[] = JHtml::_('select.option', $name->id, $name->name.' ('.$name->road.' '.JText::_('COM_RAILWAY2_ZD').') '.$name->express);
            }
        }

        $options = array_merge(parent::getOptions(), $options);

        return $options;
    }
}