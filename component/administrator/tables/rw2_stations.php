<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_stations extends JTable {
    var $id = null;
    var $railway = null;
    var $region = null;
    var $type = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_stations', 'id', $db);
    }
}
