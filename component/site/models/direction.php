<?php
defined('_JEXEC') or die;

class Railway2ModelDirection extends JModelList {
    public $dir;

    public function __construct(array $config = array())
    {
        parent::__construct($config);
        $this->dir = JFactory::getApplication()->input->getInt('id', 0);
    }

    /* Информация из вики */
    public function getWiki() {
        if ($this->dir == 0) return false;
        $db =& JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('*')
            ->from('#__rw2_direction_info')
            ->where("`directionID` = {$this->dir} AND `inspection` IS NOT NULL");
        $db->setQuery($query);
        $result = $db->loadObject();
        return (!$result) ? false : $result;
    }

    /* Время работы касс на направлении */
    public function getDescTime() {
        if ($this->dir == 0) return false;
        $db =& JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`s`.`id` as `stationID`, `s`.`name` as `name`, `n`.`popularName` as `popularName`, `t`.`time_1`, `t`.`time_2`, `t`.`turnstiles`')
            ->from('#__rw2_station_tickets as `t`')
            ->leftJoin('#__rw2_directions as `d` ON `d`.`stationID` = `t`.`stationID`')
            ->leftJoin('#__rw2_station_names as `n` ON `n`.`stationID` = `t`.`stationID`')
            ->leftJoin('#__rw2_stations as `s` ON `s`.`id` = `t`.`stationID`')
            ->where("`d`.`directionID` = {$this->dir} AND `t`.`time_1` IS NOT NULL AND `t`.`time_2` IS NOT NULL")
            ->order('`d`.`indexID`')
        ;
        $db->setQuery($query);
        $result = $db->loadObjectList();
        $stations = array(); //Результирующий массив
        foreach ($result as $item) {
            $sname = (!empty($item->popularName)) ? $item->popularName : $item->name;
            $stations[$sname][] = ($item->time_1 == '00:00:00' && $item->time_2 == '23:59:59') ? JText::_('COM_RAILWAY2_EVERYTIME') : date("H.i", strtotime(date("Y-m-d ").$item->time_1)).'-'.date("H.i", strtotime(date("Y-m-d ").$item->time_2));
        }
        $result = array();
        foreach ($stations as $name => $value) {
            $result[$name] = implode(', ', $value);
        }
        return $result;
    }

    /* Информация о направлении */
    public function getInfo() {
        if ($this->dir == 0) return false;
        $db =& JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('*')
            ->from('#__rw2_directions_list')
            ->where("`id` = {$this->dir} AND `active` = 1");
        $db->setQuery($query, 0, 1);
        $result = $db->loadObject();
        return (!empty($result->id)) ? $db->loadObject() : false;
    }

    /* Получаем максимальное количество станций */
    public function getStationsCount() {
        if ($this->dir == 0) return false;
        $db =& JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('MAX(`indexID`)')
            ->from('#__rw2_directions')
            ->where("`directionID` = {$this->dir}");
        $db->setQuery($query);
        return $db->loadResult();
    }

    /* Получаем кол-во уровней на направлении */
    public function getLevels() {
        if ($this->dir == 0) return false;
        $db =& JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('COUNT(DISTINCT `level`)')
            ->from('#__rw2_directions')
            ->where("`directionID` = {$this->dir}");
        $db->setQuery($query);
        return $db->loadResult();
    }

    public function getItems()
    {
        if ($this->dir == 0) return false;
        $db =& JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`dir`.`stationID`, `dir`.`indexID`, `dir`.`zoneID`, `dir`.`level`, `s`.`name`, `n`.`popularName`, `t`.`turnstiles`, `t`.`time_1` as `desc`, `dir`.`startLevel`')
            ->from('#__rw2_directions as `dir`')
            ->leftJoin("#__rw2_stations as `s` ON `s`.`id` = `dir`.`stationID`")
            ->leftJoin('#__rw2_station_names as `n` ON `n`.`stationID` = `dir`.`stationID`')
            ->leftJoin('#__rw2_station_tickets as `t` ON `t`.`stationID` = `s`.`id`')
            ->where("`dir`.`directionID` = {$this->dir}")
            ->order('`dir`.`indexID`, `dir`.`level`, `dir`.`zoneID`')
            ->group('`dir`.`stationID`');
        $db->setQuery($query);
        $result = $db->loadObjectList();
        if (empty($result)) return false;
        return $result;
    }
}