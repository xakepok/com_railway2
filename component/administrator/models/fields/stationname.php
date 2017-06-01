<?php
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldStationName extends JFormFieldList  {
    protected  $type = 'StationName';

    protected function getOptions()
    {
        $db = JFactory::getDbo();
        $stationID = JFactory::getApplication()->input->getInt('stationID', 0);
        $query = $db->getQuery(true);
        $query
            ->select('id, name')
            ->from('#__rw2_station_names')
            ->order('name');
        if ($stationID != 0) $query->where('id = '.$stationID);
        $db->setQuery($query);
        $names = $db->loadObjectList();

        $options = array();

        if ($names) {
            foreach ($names as $name) {
                $options[] = JHtml::_('select.option', $name->id, $name->name);
            }
        }

        $options = array_merge(parent::getOptions(), $options);

        return $options;
    }
}