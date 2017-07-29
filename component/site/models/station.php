<?php
defined('_JEXEC') or die;

class Railway2ModelStation extends JModelList {
    public $stationID;
    public function __construct(array $config = array())
    {
        $this->stationID = (int) JFactory::getApplication()->input->get('id', 0);
        parent::__construct($config);
    }

    /* Ближайшая станция без касс */
    public function getNearSafe() {
        $result = array();
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`directionID`, `indexID`')
            ->from('#__rw2_directions')
            ->where("`stationID` = {$this->stationID}");
        $db->setQuery($query, 0, 1);
        $station = $db->loadObject();
        $query = $db->getQuery(true);
        $query
            ->select('`dir`.`stationID`, `st`.`name`')
            ->from('#__rw2_station_tickets as `t`')
            ->leftJoin('#__rw2_directions as `dir` ON `dir`.`stationID` = `t`.`stationID`')
            ->leftJoin('#__rw2_stations as `st` ON `st`.`id` = `dir`.`stationID`')
            ->where("`dir`.`indexID` > {$station->indexID}")
            ->where("`dir`.`directionID` = {$station->directionID}")
            ->where('`t`.`time_1` IS NULL')
            ->where('`t`.`turnstiles` IS NULL');
        $db->setQuery($query, 0, 1);
        $tmp = $db->loadObjectList();
        if (!empty($tmp[0])) array_push($result, $tmp[0]);
        $query = $db->getQuery(true);
        $query
            ->select('`dir`.`stationID`, `st`.`name`')
            ->from('#__rw2_station_tickets as `t`')
            ->leftJoin('#__rw2_directions as `dir` ON `dir`.`stationID` = `t`.`stationID`')
            ->leftJoin('#__rw2_stations as `st` ON `st`.`id` = `dir`.`stationID`')
            ->where("`dir`.`indexID` < {$station->indexID}")
            ->where("`dir`.`directionID` = {$station->directionID}")
            ->where('`t`.`time_1` IS NULL')
            ->where('`t`.`turnstiles` IS NULL');
        $db->setQuery($query, 0, 1);
        $tmp = $db->loadObjectList();
        if (!empty($tmp[0])) array_push($result, $tmp[0]);
        return $result;
    }

    /* Кассы */
    public function getDesc() {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('*')
            ->from('#__rw2_station_tickets as `t`')
            ->where('stationID = '.$this->stationID)
            ->leftJoin('#__rw2_turnstile_variants as `v` ON `v`.`id` = `t`.`turnstiles`');
        $db->setQuery($query);
        $result = $db->loadObjectList();
        if (count($result) < 1) return false;
        return $result;
    }

    /* Основная информация */
    public function getItems()
    {
        if ($this->stationID == 0) {
            return false;
        }
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`s`.`name`, `type`.`title` as `tip`, `reg`.`region`, `rail`.`road`, `rail`.`division`, `dir`.`title` as `direction`, `dir`.`color`, `d`.`zoneID`, `d`.`indexID`, `code`.`esr`, `code`.`express`')
            ->from('#__rw2_stations as `s`')
            ->leftJoin('#__rw2_station_types as `type` ON `type`.`id` = `s`.`type`')
            ->leftJoin('#__rw2_regions as `reg` ON `reg`.`id` = `s`.`region`')
            ->leftJoin('#__rw2_railways as `rail` ON `rail`.`id` = `s`.`railway`')
            ->leftJoin('#__rw2_directions as `d` ON `d`.`stationID` = `s`.`id`')
            ->leftJoin('#__rw2_directions_list as `dir` ON `dir`.`id` = `d`.`directionID`')
            ->leftJoin('#__rw2_station_codes as `code` on `code`.`id` = `s`.`id`')
            ->where('`s`.`id` = '.$this->stationID);
        $db->setQuery($query, 0, 1);
        $result = $db->loadObjectList();
        if (count($result) < 1) return false;
        return $result[0];
    }
}