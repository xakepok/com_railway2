<?php
defined('_JEXEC') or die;

class Railway2ModelDirections extends JModelList {

    public function getItems()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`id`, `title`')
            ->from('#__rw2_directions_list')
            ->where("`state` > 0 AND `showMenu` > 0")
            ->order('title');
        $db->setQuery($query);
        $res = $db->loadObjectList();
        $result = array();
	    foreach ($res as $dir)
	    {
	    	$link = JRoute::_('index.php?option=com_railway2&view=direction&id='.$dir->id.'&Itemid=243');
		    $result[] = JHtml::link($link, $dir->title);
        }
        return $result;
    }
}