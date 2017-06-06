<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.modeladmin');

class Railway2ModelSynonym extends JModelAdmin {
    public function getTable($name = 'Rw2_station_names', $prefix = 'Table', $options = array())
    {
        return JTable::getInstance($name, $prefix, $options);
    }

    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm(
            $this->option.'.synonym', 'synonym', array('control' => 'jform', 'load_data' => $loadData)
        );
        if (empty($form))
        {
            return false;
        }

        return $form;
    }

    protected function loadFormData()
    {
        $data = JFactory::getApplication()->getUserState($this->option.'.edit.synonym.data', array());
        if (empty($data))
        {
            $data = $this->getItem();
        }

        return $data;
    }

    public function getScript()
    {
        return 'administrator/components/' . $this->option . '/models/forms/synonym.js';
    }
}