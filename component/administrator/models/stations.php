<?php
defined('_JEXEC') or die;

class Railway2ModelStations extends JModelList
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
            ->select('`s`.`id`, `s`.`name`, `code`.`esr`, `code`.`express`, `t`.`title` as `type`, `reg`.`region` as `region`, `rw`.`road`, `rw`.`division`, `dir`.`title` as `direction`')
            ->from('#__rw2_stations as `s`')
            ->where('`code`.`express` != 0 AND `railway` != 0')
            ->leftJoin('#__rw2_station_codes as `code` ON `code`.`stationID` = `s`.`id`')
            ->leftJoin('#__rw2_station_names as `name` ON `name`.`id` = `s`.`id`')
            ->leftJoin('#__rw2_station_types as `t` ON `t`.`id` = `s`.`type`')
            ->leftJoin('#__rw2_regions as `reg` ON `reg`.`id` = `s`.`region`')
            ->leftJoin('#__rw2_railways as `rw` ON `rw`.`id` = `s`.`railway`')
            ->leftJoin('#__rw2_directions as `d` ON `d`.`stationID` = `s`.`id`')
            ->leftJoin('#__rw2_directions_list as `dir` ON `dir`.`id` = `d`.`directionID`')
        ;

        /* Фильтр */
        $search = $this->getState('filter.search');
        if (!empty($search))
        {
            $search = $db->quote('%' . $db->escape($search, true) . '%', false);
            $query->where('`s`.`name` LIKE ' . $search . ' OR `name`.`popularName` LIKE ' . $search);
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
        $this->setState('filter.search', $search);
        parent::populateState('`s`.`name`', 'asc');
    }

    protected function getStoreId($id = '')
    {
        $id .= ':' . $this->getState('filter.search');
        return parent::getStoreId($id);
    }
}
