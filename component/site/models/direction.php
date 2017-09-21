<?php
defined('_JEXEC') or die;

class Railway2ModelDirection extends JModelList {
    public $dir;

    public function __construct(array $config = array())
    {
        parent::__construct($config);
        $this->dir = JFactory::getApplication()->input->getInt('id', 0);
    }

    /* ID направления */
    public function getDir() {
        return $this->dir;
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

    /* Информация о направлении */
    public function getInfo() {
        if ($this->dir == 0) return false;
        $db =& JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('*')
            ->from('#__rw2_directions_list')
            ->where("`id` = {$this->dir}");
	    if (!Railway2HelperCodes::canDo('core.admin')) {
	    	$query->where('`active` = 1');
	    }
        $db->setQuery($query, 0, 1);
        $result = $db->loadObject();
        return (!empty($result->id) && file_exists(JPATH_BASE.'/components/com_railway2/views/direction/tmpl/default_'.$result->alias.'.php')) ? $db->loadObject() : false;
    }

    public function getItems()
    {
        if ($this->dir == 0) return false;
	    $linkOptions = array('target' => '_blank');
        $db =& JFactory::getDbo();
        $where = $this->advStations();
        $query = $db->getQuery(true);
        $query
            ->select('`dir`.`stationID`, `dir`.`indexID`, `dir`.`zoneID`, `s`.`name`, `n`.`popularName`, `t`.`turnstiles`, `t`.`time_1`, `t`.`time_2`, `m`.`title_ru` as `metroStation`, `l`.`title_ru` as `metroLine`')
            ->from('#__rw2_directions as `dir`')
            ->leftJoin("#__rw2_stations as `s` ON `s`.`id` = `dir`.`stationID`")
            ->leftJoin('#__rw2_station_names as `n` ON `n`.`stationID` = `dir`.`stationID`')
            ->leftJoin('#__rw2_station_tickets as `t` ON `t`.`stationID` = `s`.`id`')
            ->leftJoin('#__rw2_cross_metro as `c` ON `c`.`stationID` = `dir`.`stationID`')
            ->leftJoin('#__rw2_metro_stations as `m` ON `m`.`id` = `c`.`stationID`')
            ->leftJoin('#__rw2_metro_lines as `l` ON `l`.`id` = `m`.`line`')
            ->where($where)
            ->order('`dir`.`indexID`, `dir`.`level`, `dir`.`zoneID`')
            ->group('`dir`.`stationID`');
        $db->setQuery($query);
        $result = $db->loadObjectList();
	    if (empty($result)) return false;
	    $withInfo = $this->getStationsWithInfo();
        $arr = array();

	    foreach ($result as $item)
	    {
		    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
		    $icon = "";
		    $text = "";
		    if ($item->turnstiles != null)
		    {
			    $text = JText::_('COM_RAILWAY2_TURNSTILES');
		    	$icon = '/media/com_railway2/images/turnstiles_18.png';
		    }
		    if ($item->time_1 == null && $item->time_2 == null && $item->turnstiles == null && in_array($item->stationID, $withInfo))
		    {
		    	$text = JText::_('COM_RAILWAY2_STATION_DESC_NO');
		    	$icon = '/media/com_railway2/images/Approval_18px.png';
		    }
		    if ($item->time_1 != null && $item->time_2 != null && $item->turnstiles == null)
		    {
			    $text = JText::_('COM_RAILWAY2_DESC');
		    	$icon = '/media/com_railway2/images/Receipt_18px.png';
		    }
		    if ($item->time_1 == '00:00:00' && $item->time_2 == '23:59:59' && $item->turnstiles == null)
		    {
			    $text = JText::_('COM_RAILWAY2_DESC_EVERYTIME');
			    $icon = '/media/com_railway2/images/24_Hours_18px.png';
		    }
		    $arr[] = array(
		    	'stationID' => $item->stationID,
			    'zoneID' => (int) $item->zoneID,
			    'stationLink' => JHtml::link(JRoute::_('index.php?option=com_railway2&view=station&id='.$item->stationID.'&Itemid=236'), $stationName, $linkOptions),
			    'desc' =>  "<span class='jutooltip' title='{$text}'><img src='{$icon}' alt='{$text}' /></span>"
		    );
        }
        return $arr;
    }

    /* Станции, инфа о которых есть */
    private function getStationsWithInfo() {
	    $db =& JFactory::getDbo();
	    $where = $this->advStations();
	    $query = $db->getQuery(true);
	    $query
		    ->select('DISTINCT `dir`.`stationID`')
		    ->from('#__rw2_station_tickets as `t`')
		    ->leftJoin('#__rw2_directions as `dir` ON `dir`.`stationID` = `t`.`stationID`')
		    ->where($where);
	    $db->setQuery($query);
	    $result = $db->loadColumn();
	    return $result;
    }

    /* Дополнительные станции для направлений */
    private function advStations()
    {
    	$text = "`dir`.`directionID` = {$this->dir}";
    	$stations = array(
    		'6' => array(4743),
    		'9' => array(4743, 4744)
	    );
    	if (isset($stations[$this->dir]) && !empty($stations[$this->dir]))
	    {
		    $text .= " OR `dir`.`stationID` IN (".implode(', ', $stations[$this->dir]).")";
	    }
	    return $text;
    }
}