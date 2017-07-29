<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.modeladmin');

class Railway2ModelDirection extends JModelAdmin {
    public function getTable($name = 'Rw2_directions', $prefix = 'Table', $options = array())
    {
        return JTable::getInstance($name, $prefix, $options);
    }

    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm(
            $this->option.'.direction', 'direction', array('control' => 'jform', 'load_data' => $loadData)
        );
        if (empty($form))
        {
            return false;
        }

        return $form;
    }

    protected function loadFormData()
    {
        $data = JFactory::getApplication()->getUserState($this->option.'.edit.direction.data', array());
        if (empty($data))
        {
            $data = $this->getItem();
        }

        return $data;
    }

    protected function prepareTable($table)
    {
        if (!strlen($table->zoneID)) $table->zoneID = NULL;
        parent::prepareTable($table);
    }

    public function getScript()
    {
        return 'administrator/components/' . $this->option . '/models/forms/direction.js';
    }
}