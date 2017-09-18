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
    	$nulls = array('time_1', 'time_2', 'turnstiles', 'detour', 'thanks', 'time_check'); //Поля, которые NULL
	    foreach ($nulls as $field)
	    {
		    if (!strlen($table->$field)) $table->$field = NULL;
    	}
    	$table->mod_date = date("Y-m-d H:i:s");
        parent::prepareTable($table);
    }

    /* Делаем обход проверенным */
    public function setChecked() {
    	$ids = JFactory::getApplication()->input->get('cid');
	    $db =& JFactory::getDbo();
	    foreach ($ids as $id)
	    {
		    $query = $db->getQuery(true);
		    $query
			    ->update('#__rw2_station_tickets')
			    ->set('`time_check` = NULL ')
			    ->where("`id` = {$id}");
		    $db->setQuery($query);
		    $db->query();
    	}
    	return true;
    }

    public function getScript()
    {
        return 'administrator/components/' . $this->option . '/models/forms/ticket.js';
    }
}