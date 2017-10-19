<?php
defined('_JEXEC') or die;

class Railway2ModelTickets extends JModelList
{
    public function __construct(array $config)
    {
        if (empty($config['filter_fields']))
        {
            $config['filter_fields'] = array(
                '`s`.`id`', '`s`.`id`',
                '`code`.`esr`', '`code`.`esr`',
                '`code`.`express`', '`code`.`express`',
                '`s`.`name`', '`s`.`name`',
                '`dir`.`title`','`dir`.`title`'
            );
        }
        parent::__construct($config);
    }

    public function getListQuery()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`desc`.`id` as `id`, `s`.`id` as `sid`, `s`.`name`, `name`.`popularName`, `desc`.`timemask`, `desc`.`tpd`, `desc`.`turnstiles`, `desc`.`time_1`, `desc`.`time_2`, `code`.`esr`, `code`.`express`, `t`.`title` as `type`, `reg`.`region` as `region`, `rw`.`road`, `rw`.`division`, `dir`.`title` as `direction`, `desc`.`time_check`')
            ->from('#__rw2_stations as `s`')
            ->where('`code`.`express` != 0 AND `railway` != 0')
            ->leftJoin('#__rw2_station_codes as `code` ON `code`.`stationID` = `s`.`id`')
            ->leftJoin('#__rw2_station_names as `name` ON `name`.`stationID` = `s`.`id`')
            ->leftJoin('#__rw2_station_types as `t` ON `t`.`id` = `s`.`type`')
            ->leftJoin('#__rw2_regions as `reg` ON `reg`.`id` = `s`.`region`')
            ->leftJoin('#__rw2_railways as `rw` ON `rw`.`id` = `s`.`railway`')
            ->leftJoin('#__rw2_directions as `d` ON `d`.`stationID` = `s`.`id`')
            ->leftJoin('#__rw2_directions_list as `dir` ON `dir`.`id` = `d`.`directionID`')
            ->rightJoin('#__rw2_station_tickets as `desc` ON `desc`.`stationID` = `s`.`id`')
        ;

        /* Фильтр */
        $search = $this->getState('filter.search');
        $direction = $this->getState('filter.direction');
	    $actuality = $this->getState('filter.actuality');
        if (!empty($search))
        {
            $search = $db->quote('%' . $db->escape($search, true) . '%', false);
            $query->where('`s`.`name` LIKE ' . $search . ' OR `name`.`popularName` LIKE ' . $search);
        }

        if (is_numeric($direction)) {
            $query->where('`d`.`directionID` = '. (int) $direction);
        }

        if (is_numeric($actuality)) {
        	$txt = '';
        	switch ($actuality) {
		        case '1': {
			        $txt = '`desc`.`time_check` > CURRENT_DATE()';
			        break;
		        }
		        case '2': {
			        $txt = '`desc`.`time_check` <= CURRENT_DATE()';
			        break;
		        }
	        }
        	$query->where($txt);
        }

        /* Сортировка */
        $orderCol  = $this->state->get('list.ordering', '`s`.`name`');
        $orderDirn = $this->state->get('list.direction', 'asc');
        $query->order($db->escape($orderCol . ' ' . $orderDirn));

        return $query;
    }

    /* Возврат нормальной сортировки */
    protected function populateState($ordering = null, $direction = null)
    {
        $search = $this->getUserStateFromRequest($this->context . '.filter.search', 'filter_search');
        $direction = $this->getUserStateFromRequest($this->context . '.filter.direction', 'filter_direction');
	    $actuality = $this->getUserStateFromRequest($this->context . '.filter.actuality', 'filter_actuality');
        $this->setState('filter.search', $search);
        $this->setState('filter.direction', $direction);
	    $this->setState('filter.actuality', $actuality);
        parent::populateState('`s`.`name`, `desc`.`time_1`', 'asc');
    }

    protected function getStoreId($id = '')
    {
        $id .= ':' . $this->getState('filter.search');
        $id .= ':'.$this->getState('filter.direction');
	    $id .= ':'.$this->getState('filter.actuality');
        return parent::getStoreId($id);
    }
}
