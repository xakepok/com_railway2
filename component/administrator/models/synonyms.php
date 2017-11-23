<?php
defined('_JEXEC') or die;

class Railway2ModelSynonyms extends JModelList
{
    public function __construct(array $config)
    {
        if (empty($config['filter_fields']))
        {
            $config['filter_fields'] = array(
                '`s`.`id`',
                '`s`.`name`',
                '`c`.`esr`',
                '`c`.`express`',
                '`n`.`popularName`',
                '`n`.`rzdName`',
                '`dir`.`title`'
            );
        }
        parent::__construct($config);
    }

    public function getListQuery()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
           ->select('`n`.`id`, `s`.`id` as `stationID`, `s`.`name`, `c`.`esr`, `c`.`express`, `n`.`popularName`, `n`.`rzdName`, `r`.`region`, `dir`.`title` as `direction`')
            ->from('#__rw2_stations AS `s`')
            ->where('`s`.`railway` != 0 AND `c`.`express` != 0')
            ->innerJoin('#__rw2_station_names AS `n` ON `n`.`stationID` = `s`.`id`')
            ->innerJoin('#__rw2_station_codes AS `c` ON `c`.`stationID` = `s`.`id`')
            ->leftJoin('#__rw2_directions AS `d` ON `d`.`stationID` = `s`.`id`')
            ->leftJoin('#__rw2_directions_list AS `dir` ON `dir`.`id` = `d`.`directionID`')
            ->leftJoin('#__rw2_regions AS `r` ON `r`.`id` = `s`.`region`')
        ;

        /* Фильтр */
        $search = $this->getState('filter.search');
        if (!empty($search))
        {
            $search = $db->quote('%' . $db->escape($search, true) . '%', false);
            $query->where('`s`.`name` LIKE ' . $search . ' OR `n`.`popularName` LIKE ' . $search);
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
