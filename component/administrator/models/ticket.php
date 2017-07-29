<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.modeladmin');

class Railway2ModelTicket extends JModelAdmin {
    public function getTable($name = 'Rw2_station_tickets', $prefix = 'Table', $options = array())
    {
        return JTable::getInstance($name, $prefix, $options);
    }

    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm(
            $this->option.'.ticket', 'ticket', array('control' => 'jform', 'load_data' => $loadData)
        );
        if (empty($form))
        {
            return false;
        }

        return $form;
    }

    protected function loadFormData()
    {
        $data = JFactory::getApplication()->getUserState($this->option.'.edit.ticket.data', array());
        if (empty($data))
        {
            $data = $this->getItem();
        }

        return $data;
    }

    protected function prepareTable($table)
    {
        if (!strlen($table->time_1)) $table->time_1 = NULL;
        if (!strlen($table->time_2)) $table->time_2 = NULL;
        if (!strlen($table->turnstiles)) $table->turnstiles = NULL;
        if (!strlen($table->detour)) $table->detour = NULL;
        parent::prepareTable($table);
    }

    public function getScript()
    {
        return 'administrator/components/' . $this->option . '/models/forms/ticket.js';
    }
}