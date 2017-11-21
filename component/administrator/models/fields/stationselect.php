<?php
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldStationSelect extends JFormFieldList  {
    protected  $type = 'StationSelect';

    protected function getOptions()
    {
        $db = JFactory::getDbo();
        $stationID = JFactory::getApplication()->input->getInt('id', 0);

        $query = $db->getQuery(true);
        $query
            ->select('`s`.`id`, `rw`.`road`, `c`.`express`, `r`.`region`')
	        ->select(self::getStationNameQuery())
            ->from('#__rw2_stations as `s`')
            ->leftJoin('#__rw2_railways AS `rw` ON `rw`.`id` = `s`.`railway`')
            ->leftJoin('#__rw2_station_codes AS `c` ON `c`.`stationID` = `s`.`id`')
            ->leftJoin('#__rw2_regions AS `r` ON `r`.`id`=`s`.`region`')
	        ->leftJoin('#__rw2_station_names as `n` ON `n`.`stationID` = `s`.`id`')
            ->order('`stationName`');
        $query->where('`s`.`railway` != 0');
        $query->select('`l`.`title` as `direction`');
        $query->where('`r`.`id` IN (173, 208, 150, 200, 210, 161, 205)');
        if ($stationID != 0) $query->where('`s`.`id` = '.$stationID);
            $query
                ->rightJoin('#__rw2_directions as `d` ON `d`.`stationID` = `s`.`id`')
                ->leftJoin('#__rw2_directions_list as `l` ON `l`.`id` = `d`.`directionID`');
        $db->setQuery($query);
        $names = $db->loadObjectList();

        $options = array();

        if ($names) {
            foreach ($names as $name) {
            	$n = $name->stationName;
            	$n .= ' ('.$name->region.') ';
            	$n .= ', '.$name->direction.' '.mb_strtolower(JText::_('COM_RAILWAY2_DIRECTION'));
                $options[] = JHtml::_('select.option', $name->id, $n);
            }
        }

        $options = array_merge(parent::getOptions(), $options);

        return $options;
    }

	/*
	 * Выборка имени станции в запросе
	 * $prefix - префикс таблицы station_names
	 * */
	function getStationNameQuery($prefix = 'n')
	{
		return 'IF(`'.$prefix.'`.`displayBothNames` = 1, CONCAT(`s`.`name`, " (", `'.$prefix.'`.`popularName`, ")"), IFNULL(`'.$prefix.'`.`popularName`, `s`.`name`)) as `stationName`';
	}
}