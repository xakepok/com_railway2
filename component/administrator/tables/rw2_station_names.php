<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_station_names extends JTable {
    var $id = null;
    var $stationID = null;
    var $popularName = null;
    var $rzdName = null;
    var $displayBothNames = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_station_names', 'id', $db);
    }

	public function store($updateNulls = false)
	{
		return parent::store(true);
	}
}
