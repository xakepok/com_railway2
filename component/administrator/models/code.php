<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.modeladmin');

class Railway2ModelCode extends JModelAdmin {
    public function getTable($name = 'Rw2_station_codes', $prefix = 'Table', $options = array())
    {
        return JTable::getInstance($name, $prefix, $options);
    }

    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm(
            $this->option.'.code', 'code', array('control' => 'jform', 'load_data' => $loadData)
        );
        if (empty($form))
        {
            return false;
        }

        return $form;
    }

    protected function loadFormData()
    {
        $data = JFactory::getApplication()->getUserState($this->option.'.edit.code.data', array());
        if (empty($data))
        {
            $data = $this->getItem();
        }

        return $data;
    }

	protected function prepareTable($table)
	{
		$nulls = array('lg', 'lt'); //Поля, которые NULL
		foreach ($nulls as $field)
		{
			if (!strlen($table->$field)) $table->$field = NULL;
		}
		parent::prepareTable($table);
	}

    public function getScript()
    {
        return 'administrator/components/' . $this->option . '/models/forms/code.js';
    }
}