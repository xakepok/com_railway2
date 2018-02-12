<?php
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('groupedlist');

class JFormFieldRegion extends JFormFieldGroupedList  {
    protected  $type = 'Region';

    protected function getGroups()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('id, country, region')
            ->from('#__rw2_regions')
            ->order('id');
        $db->setQuery($query);
        $regions = $db->loadObjectList('region');

        $options = array();

        if ($regions) {
            foreach ($regions as $region => $p) {
                if (!isset($options[$p->country])) {
                    $options[$p->country] = array();
                }
                $options[$p->country][] = JHtml::_('select.option', $p->id, $region);
            }
        }

        $options = array_merge(parent::getGroups(), $options);

        return $options;
    }
}