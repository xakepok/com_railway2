<?php
defined('_JEXEC') or die;
class Railway2ModelRasp extends JModelLegacy {
    public static function getInstance($type, $prefix = '', $config = array())
    {
        return parent::getInstance($type, $prefix, $config); // TODO: Change the autogenerated stub
    }

    public function getStation($search) {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`s`.`id`, `s`.`name`, `name`.`popularName`, `code`.`esr`, `code`.`express`, `t`.`title` as `type`, `reg`.`region` as `region`, `rw`.`road`, `rw`.`division`, `dir`.`title` as `direction`')
            ->from('#__rw2_stations as `s`')
            ->where('`code`.`express` != 0 AND `railway` != 0')
            ->leftJoin('#__rw2_station_codes as `code` ON `code`.`id` = `s`.`id`')
            ->leftJoin('#__rw2_station_names as `name` ON `name`.`id` = `s`.`id`')
            ->leftJoin('#__rw2_station_types as `t` ON `t`.`id` = `s`.`type`')
            ->leftJoin('#__rw2_regions as `reg` ON `reg`.`id` = `s`.`region`')
            ->leftJoin('#__rw2_railways as `rw` ON `rw`.`id` = `s`.`railway`')
            ->leftJoin('#__rw2_directions as `d` ON `d`.`stationID` = `s`.`id`')
            ->leftJoin('#__rw2_directions_list as `dir` ON `dir`.`id` = `d`.`directionID`')
            ->leftJoin('#__rw2_station_tickets as `desc` ON `desc`.`stationID` = `s`.`id`')
        ;
        $search = $db->quote('%' . $db->escape($search, true) . '%', false);
        $query->where('`s`.`name` LIKE ' . $search . ' OR `name`.`popularName` LIKE ' . $search);
        $db->setQuery($query, 0, 1);
        return $db->loadAssoc();
    }

    /* Кассы на станции */
    public function getDesc($id) {
        $id = (int) $id;
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`s`.`id`, `s`.`name`, `name`.`popularName`, `desc`.`time_1`, `desc`.`time_2`')
            ->from('#__rw2_stations as `s`')
            ->where('`code`.`express` != 0 AND `railway` != 0 AND `s`.`id` = '.$id)
            ->leftJoin('#__rw2_station_codes as `code` ON `code`.`id` = `s`.`id`')
            ->leftJoin('#__rw2_station_names as `name` ON `name`.`id` = `s`.`id`')
            ->rightJoin('#__rw2_station_tickets as `desc` ON `desc`.`stationID` = `s`.`id`')
        ;
        $db->setQuery($query);
        $result = $db->loadAssocList();
        return (count($result) > 0) ? $result : false;
    }

    /* Станции без касс */
    public function getCashless($direction) {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`t`.`stationID`, `s`.`name`')
            ->from('#__rw2_station_tickets as `t`')
            ->where("`t`.`time_1` is NULL AND `t`.`time_2` is NULL AND `dir`.`directionID` = ".$direction)
            ->leftJoin('#__rw2_directions as `dir` ON `dir`.`stationID` = `t`.`stationID`')
            ->leftJoin('#__rw2_stations as `s` ON `s`.`id` = `t`.`stationID`')
        ;
        $db->setQuery($query);
        $result = $db->loadAssocList();
        return (count($result) > 0) ? $result : false;
    }

    /* Время работы касс на направлении */
    public function getCashDesc($direction) {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`t`.`stationID`, `s`.`name` as `name`, `t`.`time_1`, `t`.`time_2`')
            ->from('#__rw2_station_tickets as `t`')
            ->where("`dir`.`directionID` = ".$direction)
            ->leftJoin('#__rw2_directions as `dir` ON `dir`.`stationID` = `t`.`stationID`')
            ->leftJoin('#__rw2_stations as `s` ON `s`.`id` = `t`.`stationID`')
            ->order('`dir`.`indexID`, `dir`.`level`')
        ;
        $db->setQuery($query);
        $result = $db->loadAssocList();
        $stations = array();
        $str = "";
        foreach ($result as $res) {
            if (!isset($stations[$res['name']])) $stations[$res['name']] = array();
            if ($res['time_1'] == null && $res['time_2'] == null) {
                $stations[$res['name']][] = JText::_('COM_RAILWAY2_STATION_DESC_NO');
            } else {
                $start = explode(':', $res['time_1']);
                $end = explode(':', $res['time_2']);
                $stations[$res['name']][] = $start[0].'.'.$start[1].' - '.$end[0].'.'.$end[1];
            }
        }
        foreach ($stations as $st => $desc) {
            $str .= "<b>".$st."</b>: ".implode(', ', $desc)."\n";
        }
        return $str;
    }

    public function getDirectionByName($name) {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`id`')
            ->from('#__rw2_directions_list')
            ->where("`title` LIKE '{$name}'");
        $db->setQuery($query, 0, 1);
        return $db->loadResult();
    }
}