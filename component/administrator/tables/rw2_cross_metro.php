<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_cross_metro extends JTable {
    var $id = null;
    var $stationID = null;
    var $metroID = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_cross_metro', 'id', $db);
    }

    public function store($updateNulls = false)
    {
        return parent::store(true);
    }
}
