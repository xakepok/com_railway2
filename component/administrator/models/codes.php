<?php
defined('_JEXEC') or die;
class Railway2ModelCodes extends JModelList
{
    public function __construct(array $config)
    {
        if (empty($config['filter_fields']))
        {
            $config['filter_fields'] = array(
                'id',
                'esr',
                '`stationName`',
	            'region'
            );
        }
        parent::__construct($config);
    }

    public function getListQuery()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`c`.`id`, `c`.`stationID`, `c`.`esr`, `c`.`express`, `c`.`yandex`, `reg`.`region`, `rail`.`road`, `rail`.`division`')
            ->select(Railway2Helper::getStationNameQuery())
	        ->from('#__rw2_station_codes as `c`')
            ->leftJoin('#__rw2_stations as `s` on `s`.`id` = `c`.`stationID`')
            ->leftJoin('#__rw2_station_names as `n` on `n`.`stationID` = `c`.`stationID`')
            ->leftJoin('#__rw2_regions as `reg` ON `reg`.`id` = `s`.`region`')
            ->leftJoin('#__rw2_railways as `rail` ON `rail`.`id` = `s`.`railway`');
        /* Фильтр */
        $search = $this->getState('filter.search');

        if (!empty($search)) {
            $search = $db->quote('%' . $db->escape($search, true) . '%', false);
            $query->where('`s`.`name` LIKE ' . $search.' OR `n`.`popularName` LIKE '.$search.' OR `c`.`esr` LIKE '.$search.' OR `c`.`express` LIKE '.$search);
        }

        /* Сортировка */
        $orderCol  = $this->state->get('list.ordering', '`stationName`');
        $orderDirn = $this->state->get('list.direction', 'asc');
        $query->order($db->escape($orderCol . ' ' . $orderDirn));

        return $query;
    }


    /* Возврат нормальной сортировки */
    protected function populateState($ordering = null, $direction = null)
    {
        $search = $this->getUserStateFromRequest($this->context . '.filter.search', 'filter_search');
        $direction = $this->getUserStateFromRequest($this->context . '.filter.direction', 'filter_direction');
        $this->setState('filter.search', $search);
        parent::populateState('`stationName`', 'asc');
    }

    protected function getStoreId($id = '')
    {
        $id .= ':' . $this->getState('filter.search');
        return parent::getStoreId($id);
    }

}
