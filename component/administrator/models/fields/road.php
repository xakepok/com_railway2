<?php
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('groupedlist');

class JFormFieldRoad extends JFormFieldGroupedList  {
    protected  $type = 'Road';

    protected function getGroups()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('*')
            ->from('#__rw2_railways')
            ->order('id');
        $db->setQuery($query);
        $roads = $db->loadObjectList('division');

        $options = array();

        if ($roads) {
            foreach ($roads as $road => $p) {
                if (!isset($options[$p->road.' '.JText::_('COM_RAILWAY2_RAILROAD')])) {
                    $options[$p->road.' '.JText::_('COM_RAILWAY2_RAILROAD')] = array();
                }
                $options[$p->road.' '.JText::_('COM_RAILWAY2_RAILROAD')][] = JHtml::_('select.option', $p->id, $p->division);
            }
        }

        $options = array_merge(parent::getGroups(), $options);

        return $options;
    }
}