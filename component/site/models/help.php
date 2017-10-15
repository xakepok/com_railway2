<?php
defined('_JEXEC') or die;

class Railway2ModelHelp extends JModelList {
    public function getItems()
    {
	    $db =& JFactory::getDbo();
	    $query = $db->getQuery(true);

	    $query
		    ->select('DISTINCT `t`.`stationID` as `sid`')
		    ->from('#__rw2_station_tickets as `t`')
		    ->leftJoin('#__rw2_directions as `dir` ON `dir`.`stationID` = `t`.`stationID`')
            ->leftJoin('#__rw2_directions_list as `l` ON `l`.`id` = `dir`.`directionID`')
		    ->where('`l`.`state` > 0 AND (`t`.`turnstiles` IS NOT NULL || (`t`.`time_1` IS NULL AND `t`.`time_2` IS NULL AND `t`.`turnstiles` IS NULL) || (`t`.`time_1` IS NOT NULL AND `t`.`time_2` IS NOT NULL AND `t`.`turnstiles` IS NULL))');
	    $db->setQuery($query);
	    $result = $db->loadObjectList();

	    $arr = array();
	    foreach ($result as $res) {
	    	$arr[] = $res->sid;
	    }
	    $not = implode(', ', $arr);

	    $query = $db->getQuery(true);
	    $query
		    ->select('`dir`.`stationID`, `s`.`name`, `n`.`popularName`, `n`.`displayBothNames`, `dir`.`directionID` as `did`, `l`.`title` as `directionName`')
		    ->from('#__rw2_directions as `dir`')
		    ->leftJoin('#__rw2_stations as `s` ON `s`.`id` = `dir`.`stationID`')
		    ->leftJoin('#__rw2_station_names as `n` ON `n`.`stationID` = `dir`.`stationID`')
            ->leftJoin('#__rw2_directions_list as `l` ON `l`.`id` = `dir`.`directionID`')
		    ->where("`l`.`state` > 0 AND `dir`.`stationID` NOT IN ({$not})")
	        ->order('`directionName`, `dir`.`indexID`');

	    $db->setQuery($query);

        $tmp = $db->loadObjectList();
        $result = array();
        foreach ($tmp as $item) {
            if (!isset($result[$item->directionName])) $result[$item->directionName] = array();
            $url = JRoute::_("index.php?option=com_railway2&view=station&id=".$item->stationID."&Itemid=236");
            $name = Railway2HelperCodes::getStationName($item->name, $item->popularName, $item->displayBothNames);
            $link = JHtml::link($url, $name, array('targer' => '_blank'));
            $result[$item->directionName][] = $link;
        }
        return $result;
    }
}