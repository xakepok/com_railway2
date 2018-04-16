<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_cocons extends JTable {
    var $id = null;
    var $dat = null;
    var $thread = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_cocons', 'id', $db);
    }
}
