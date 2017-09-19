<?php
defined('_JEXEC') or die;

class Railway2ModelStation extends JModelList {
    public $stationID;
    public function __construct(array $config = array())
    {
        $this->stationID = (int) JFactory::getApplication()->input->get('id', 0);
        parent::__construct($config);
    }

    /* Расписание по станции */
    public function getRasp() {
        if ($this->stationID == 0) {
            return false;
        }
        $modelRasp = JModelLegacy::getInstance('Yandexrasp', 'Railway2Model');
        $modelRasp->setESR(Railway2HelperCodes::getEsrById($this->stationID));
        $modelRasp->page = 1;
        $tmp = $modelRasp->query();
        $result = $tmp->schedule;
        while (!empty($tmp->schedule)) {
            $modelRasp->offset += 100;
            $tmp = $modelRasp->query();
            $result = array_merge($result, $tmp->schedule);
        }
        return $result;
    }

    /* Пересадки на метро */
    public function getCrosses() {
        if ($this->stationID == 0) return false;
        $db =& JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`m`.`title_ru` as `metroStation`, `l`.`title_ru` as `metroLine`, `l`.`color`')
            ->from('#__rw2_cross_metro as `c`')
            ->leftJoin('#__rw2_metro_stations as `m` ON `m`.`id` = `c`.`metroID`')
            ->leftJoin('#__rw2_metro_lines as `l` ON `l`.`id` = `m`.`line`')
            ->where("`c`.`stationID` = {$this->stationID} AND `m`.`active` = 1 AND `l`.`active` = 1");
        $db->setQuery($query);
        $result = $db->loadObjectList();
        if (empty($result)) return false;
        $crosses = array();
        foreach ($result as $cross) {
            $line = $cross->metroLine.' '.mb_strtolower(JText::_('COM_RAILWAY2_METRO_LINE'));
            $crosses[] = "<a class='jutooltip' title='{$line}'><span style='color: {$cross->color}'>{$cross->metroStation}</span></a>";
        }
        return implode(', ', $crosses);
    }

    /* Ближайшая станция без касс */
    public function getNearSafe() {
        if ($this->stationID == 0) {
            return false;
        }
        $result = array();
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`directionID`, `indexID`')
            ->from('#__rw2_directions')
            ->where("`stationID` = {$this->stationID}");
        $db->setQuery($query, 0, 1);
        $station = $db->loadObject();
        if (empty($station)) return false;
        $query = $db->getQuery(true);
        $query
            ->select('`dir`.`stationID`, `st`.`name`')
            ->from('#__rw2_station_tickets as `t`')
            ->leftJoin('#__rw2_directions as `dir` ON `dir`.`stationID` = `t`.`stationID`')
            ->leftJoin('#__rw2_stations as `st` ON `st`.`id` = `dir`.`stationID`')
            ->where("`dir`.`indexID` > {$station->indexID}")
            ->where("`dir`.`directionID` = {$station->directionID}")
            ->where('`t`.`time_1` IS NULL')
            ->where('`t`.`turnstiles` IS NULL')
            ->order('`dir`.`indexID` ASC');
        $db->setQuery($query, 0, 1);
        $tmp = $db->loadObject();
        if (!empty($tmp)) array_push($result, $tmp);
        $query = $db->getQuery(true);
        $query
            ->select('`dir`.`stationID`, `st`.`name`')
            ->from('#__rw2_station_tickets as `t`')
            ->leftJoin('#__rw2_directions as `dir` ON `dir`.`stationID` = `t`.`stationID`')
            ->leftJoin('#__rw2_stations as `st` ON `st`.`id` = `dir`.`stationID`')
            ->where("`dir`.`indexID` < {$station->indexID}")
            ->where("`dir`.`directionID` = {$station->directionID}")
            ->where('`t`.`time_1` IS NULL')
            ->where('`t`.`turnstiles` IS NULL')
            ->order('`dir`.`indexID` DESC');
        $db->setQuery($query, 0, 1);
        $tmp = $db->loadObject();
        if (!empty($tmp)) array_push($result, $tmp);
        return $result;
    }

    /* Кассы */
    public function getDesc() {
        if ($this->stationID == 0) {
            return false;
        }
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`t`.*, `u`.`name` as `user`, `v`.`variant`')
            ->from('#__rw2_station_tickets as `t`')
            ->where('stationID = '.$this->stationID)
            ->leftJoin('#__rw2_turnstile_variants as `v` ON `v`.`id` = `t`.`turnstiles`')
            ->leftJoin('#__users as `u` ON `u`.`id` = `t`.`thanks`');
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
            ->select('`s`.`name`,`n`.`popularName`, `type`.`title` as `tip`, `reg`.`region`, `rail`.`road`, `rail`.`division`, `dir`.`id` as `directionID`, `dir`.`title` as `direction`, `dir`.`color`, `dir`.`font`, `d`.`zoneID`, `d`.`indexID`, `code`.`esr`, `code`.`express`')
            ->from('#__rw2_stations as `s`')
            ->leftJoin('#__rw2_station_types as `type` ON `type`.`id` = `s`.`type`')
            ->leftJoin('#__rw2_regions as `reg` ON `reg`.`id` = `s`.`region`')
            ->leftJoin('#__rw2_railways as `rail` ON `rail`.`id` = `s`.`railway`')
            ->leftJoin('#__rw2_directions as `d` ON `d`.`stationID` = `s`.`id`')
            ->leftJoin('#__rw2_directions_list as `dir` ON `dir`.`id` = `d`.`directionID`')
            ->leftJoin('#__rw2_station_codes as `code` on `code`.`id` = `s`.`id`')
            ->leftJoin('#__rw2_station_names as `n` ON `n`.`stationID` = `s`.`id`')
            ->where('`s`.`id` = '.$this->stationID);
        $db->setQuery($query, 0, 1);
        $result = $db->loadObject();
        if (!isset($result->esr)) return false;
        return $result;
    }
}