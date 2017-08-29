<?php
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('groupedlist');

class JFormFieldMetro extends JFormFieldGroupedList  {
    protected  $type = 'Metro';

    protected function getGroups()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`s`.`id`, `s`.`title_ru` as `station`, `l`.`title_ru` as `line`, `l`.`color`')
            ->from('#__rw2_metro_stations as `s`')
            ->leftJoin('#__rw2_metro_lines as `l` ON `s`.`line` = `l`.`id`')
            ->where('`l`.`active` = 1 AND `s`.`active` = 1')
            ->order('`l`.`id`');
        $db->setQuery($query);
        $stations = $db->loadObjectList();

        $options = array();

        if ($stations) {
            foreach ($stations as $station) {
                $l = $station->line.' '.mb_strtolower(JText::_('COM_RAILWAY2_METRO_LINE'));
                if (!isset($options[$l])) {
                    $options[$l] = array();
                }
                $options[$l][] = JHtml::_('select.option', $station->id, $station->station);
            }
        }

        $options = array_merge(parent::getGroups(), $options);

        return $options;
    }
}