<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_station_types extends JTable {
    var $id = null;
    var $title = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_station_types', 'id', $db);
    }
}
