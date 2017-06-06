<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_directions_list extends JTable {
    var $id = null;
    var $alias = null;
    var $title = null;
    var $color = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_directions_list', 'id', $db);
    }
}
