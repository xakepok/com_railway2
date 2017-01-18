<?php
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldStationType extends JFormFieldList {
    protected  $type = 'StationType';

    protected function getOptions()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('id, type')
            ->from('#__station_types')
            ->order('id');
        $db->setQuery($query);
        $types = $db->loadObjectList();

        $options = array();

        if ($types) {
            foreach ($types as $t) {
                $options[] = JHtml::_('select.option', $t->id, $t->type);
            }
        }

        $options = array_merge(parent::getOptions(), $options);

        return $options;
    }
}