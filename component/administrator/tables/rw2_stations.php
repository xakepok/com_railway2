<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_stations extends JTable {
    var $id = null;
    var $esr = null;
    var $express = null;
    var $dup_esr = null;
    var $railway = null;
    var $control = null;
    var $region = null;
    var $type = null;
    var $name = null;
    var $popularName = null;
    var $yandexSearchName = null;
    var $rzdName = null;
    var $vkid = null;
    var $user = null;
    var $moddate = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_stations', 'id', $db);
    }
}
