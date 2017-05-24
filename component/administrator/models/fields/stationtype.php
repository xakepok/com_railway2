<?php
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldStationType extends JFormFieldList  {
    protected  $type = 'StationType';

    protected function getOptions()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('id, title')
            ->from('#__rw2_station_types')
            ->order('id');
        $db->setQuery($query);
        $regions = $db->loadObjectList();

        $options = array();

        if ($regions) {
            foreach ($regions as $region) {
                $options[] = JHtml::_('select.option', $region->id, $region->title);
            }
        }

        $options = array_merge(parent::getOptions(), $options);

        return $options;
    }
}