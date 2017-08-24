<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_direction_info extends JTable {
    var $id = null;
    var $directionID = null;
    var $inspection = null;
    var $cocon = null;
    var $info = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_direction_info', 'id', $db);
    }

    public function store($updateNulls = false)
    {
        return parent::store(true);
    }
}
