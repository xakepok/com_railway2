<?php
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldTurnstile extends JFormFieldList  {
    protected  $type = 'Turnstile';

    protected function getOptions()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('*')
            ->from('#__rw2_station_types')
            ->order('id');
        $db->setQuery($query);
        $regions = $db->loadObjectList();

        $options = array();
        $options[] = JHtml::_('select.option', '', JText::_('COM_RAILWAY2_NO'));

        if ($regions) {
            foreach ($regions as $region) {
                $options[] = JHtml::_('select.option', $region->id, $region->variant);
            }
        }

        $options = array_merge(parent::getOptions(), $options);

        return $options;
    }
}