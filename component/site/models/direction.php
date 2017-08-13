<?php
defined('_JEXEC') or die;

class Railway2ModelDirection extends JModelList {
    public $dir;

    public function __construct(array $config = array())
    {
        parent::__construct($config);
        $this->dir = JFactory::getApplication()->input->getInt('id', 0);
    }

    /* Информация о направлении */
    public function getInfo() {
        if ($this->dir == 0) return false;
        $db =& JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('*')
            ->from('#__rw2_directions_list')
            ->where("`id` = {$this->dir}");
        $db->setQuery($query, 0, 1);
        return $db->loadObject();
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
            ->select('`dir`.`stationID`, `dir`.`indexID`, `dir`.`zoneID`, `dir`.`level`, `s`.`name`, `n`.`popularName`, `t`.`turnstiles`, `t`.`time_1` as `desc`')
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