<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_directions extends JTable {
    var $id = null;
    var $stationID = null;
    var $directionID = null;
    var $isControlPoint = null;
    var $indexID = null;
    var $zoneID = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_directions', 'id', $db);
    }
}
