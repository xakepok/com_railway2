<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_station_names extends JTable {
    var $id = null;
    var $name = null;
    var $popularName = null;
    var $yandexName = null;
    var $rzdName = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_station_names', 'id', $db);
    }
}
