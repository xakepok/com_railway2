<?php
defined('_JEXEC') or die;
class Railway2ModelDirections extends JModelList
{
    public function __construct(array $config)
    {
        if (empty($config['filter_fields']))
        {
            $config['filter_fields'] = array(
                'id', 'id',
                '`name`.`name`', '`name`.`name`',
                '`l`.`title`', '`l`.`title`'
            );
        }
        parent::__construct($config);
    }

    public function getListQuery()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`d`.`id` as `id`, `name`.`name` as `station`, `stationID`, `directionID`, `l`.`title` as `direction`, `isControlPoint`, `indexID`, `zoneID`, `distance`')
            ->from('#__rw2_directions as `d`')
            ->leftJoin('#__rw2_stations as `s` on `s`.`id` = `d`.`stationID`')
            ->leftJoin('#__rw2_station_names as `name` ON `name`.`id` = `d`.`stationID`')
            ->leftJoin('#__rw2_directions_list as `l` on `l`.`id` = `d`.`directionID`');
        /* Фильтр */
        $search = $this->getState('filter.search');
        if (!empty($search))
        {
            $search = $db->quote('%' . $db->escape($search, true) . '%', false);
            $query->where('name.name LIKE ' . $search . ' OR name.popularName LIKE ' . $search);
        }

        /* Сортировка */
        $orderCol  = $this->state->get('list.ordering', '`name`.`name`');
        $orderDirn = $this->state->get('list.direction', 'asc');
        $query->order($db->escape($orderCol . ' ' . $orderDirn));

        return $query;
    }


    /* Возврат нормальной сортировки */
    protected function populateState($ordering = null, $direction = null)
    {
        $search = $this->getUserStateFromRequest($this->context . '.filter.search', 'filter_search');
        $this->setState('filter.search', $search);
        parent::populateState('`name`.`name`', 'asc');
    }

    protected function getStoreId($id = '')
    {
        $id .= ':' . $this->getState('filter.search');
        return parent::getStoreId($id);
    }

}
