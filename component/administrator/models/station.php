<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.modeladmin');

class Railway2ModelStation extends JModelAdmin {
    public function getTable($name = 'Rw2_stations', $prefix = 'Table', $options = array())
    {
        return JTable::getInstance($name, $prefix, $options);
    }

    /* Получаем название станции */
    public function getStationName() {
        $dbo = $this->getDbo();
        $id = JFactory::getApplication()->input->getInt('id');
        $query = $dbo->getQuery(true);
        $query
            ->select('name')
            ->from('#__rw2_station_names')
            ->where('id = '.$id);
        $dbo->setQuery($query);
        $res = $dbo->loadObject();
        return $res->name;
    }

    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm(
            $this->option.'.station', 'station', array('control' => 'jform', 'load_data' => $loadData)
        );
        if (empty($form))
        {
            return false;
        }

        return $form;
    }

    protected function loadFormData()
    {
        $data = JFactory::getApplication()->getUserState($this->option.'.edit.station.data', array());
        if (empty($data))
        {
            $data = $this->getItem();
        }

        return $data;
    }

    public function getScript()
    {
        return 'administrator/components/' . $this->option . '/models/forms/station.js';
    }
}