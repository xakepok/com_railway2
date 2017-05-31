<?php defined('_JEXEC') or die;
jimport('joomla.database.table');

class TableRw2_regions extends JTable {
    var $id = null;
    var $country = null;
    var $region = null;
    var $sources = null;

    public function __construct(&$db) {
        parent::__construct('#__rw2_regions', 'id', $db);
    }
}
