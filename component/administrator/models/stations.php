<?php
defined('_JEXEC') or die;

class Railway2ModelStations extends JModelList
{
    public function __construct(array $config)
    {
        if (empty($config['filter_fields']))
        {
            $config['filter_fields'] = array(
                'id', 'id',
                'esr', 'esr',
                'express', 'express',
                'name', 'name',
            );
        }
        parent::__construct($config);
    }

    public function getListQuery()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('s.id, s.esr, s.express, s.popularName, t.title as `type`, `dir`.`directionID` as `directionID`, cat.title as `direction`, s.yandexSearchName, s.rzdName, reg.region, road.road, road.division, s.name')
            ->from('#__rw2_stations as s')
            ->where('s.railway<>0 AND express<>0')
            ->leftJoin('#__rw2_directions as dir ON `dir`.`stationID`=`s`.`id`')
            ->leftJoin('#__categories as cat ON `cat`.`id`=`directionID`')
            ->leftJoin('#__categories as t ON `t`.`id`=`s`.`type`')
            ->leftJoin('#__regions as reg ON `reg`.`id`=`s`.`region`')
            ->leftJoin('#__railways as road ON `road`.`id`=`s`.`railway`');

        /* Фильтр */
        $search = $this->getState('filter.search');
        if (!empty($search))
        {
            $search = $db->quote('%' . $db->escape($search, true) . '%', false);
            $query->where('s.name LIKE ' . $search . ' OR s.popularName LIKE ' . $search);
        }

        /* Сортировка */
        $orderCol  = $this->state->get('list.ordering', 'name');
        $orderDirn = $this->state->get('list.direction', 'asc');
        $query->order($db->escape($orderCol . ' ' . $orderDirn));

        return $query;
    }

    /* Возврат нормальной сортировки */
    protected function populateState($ordering = null, $direction = null)
    {
        $search = $this->getUserStateFromRequest($this->context . '.filter.search', 'filter_search');
        $this->setState('filter.search', $search);
        parent::populateState('name', 'asc');
    }

    protected function getStoreId($id = '')
    {
        $id .= ':' . $this->getState('filter.search');
        return parent::getStoreId($id);
    }
}
