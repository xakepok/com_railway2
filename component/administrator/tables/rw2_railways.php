<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_railways extends JTable {
    var $id = null;
    var $road = null;
    var $division = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_railways', 'id', $db);
    }
}
