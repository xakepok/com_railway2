<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_station_tickets extends JTable {
    var $id = null;
    var $stationID = null;
    var $turnstiles = null;
    var $tpd = null;
    var $time_1 = null;
    var $time_2 = null;
    var $timemask = null;
    var $detour = null;
    var $time_check = null;
    var $thanks = null;
    var $mod_date = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_station_tickets', 'id', $db);
    }

    public function store($updateNulls = false)
    {
        return parent::store(true);
    }
}
