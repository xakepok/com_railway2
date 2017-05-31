<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_station_codes extends JTable {
    var $id = null;
    var $esr = null;
    var $express = null;
    var $dup_esr = null;
    var $vkid = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_station_codes', 'id', $db);
    }
}
