<?php
defined('_JEXEC') or die;
class Railway2ModelCrosses extends JModelList
{
    public function __construct(array $config)
    {
        if (empty($config['filter_fields']))
        {
            $config['filter_fields'] = array(
                '`c`.`id`',
                '`station`',
                '`metro`',
                '`line`'
            );
        }
        parent::__construct($config);
    }

    public function getListQuery()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`c`.`id`, `s`.`id` as `stationID`, `s`.`name` as `station`, `n`.`popularName`, `n`.`displayBothNames`, `m`.`title_ru` as `metro`, `l`.`title_ru` as `line`')
            ->from('#__rw2_cross_metro as `c`')
            ->leftJoin('#__rw2_stations as `s` ON `s`.`id` = `c`.`stationID`')
            ->leftJoin('#__rw2_metro_stations as `m` ON `m`.`id` = `c`.`metroID`')
            ->leftJoin('#__rw2_metro_lines as `l` ON `l`.`id` = `m`.`line`')
	        ->leftJoin('#__rw2_station_names as `n` on `n`.`stationID` = `c`.`stationID`')
        ;
        /* Сортировка */
        $orderCol  = $this->state->get('list.ordering', '`c`.`id`');
        $orderDirn = $this->state->get('list.direction', 'asc');
        $query->order($db->escape($orderCol . ' ' . $orderDirn));

        return $query;
    }


    /* Возврат нормальной сортировки */
    protected function populateState($ordering = null, $direction = null)
    {
        $direction = $this->getUserStateFromRequest($this->context . '.filter.direction', 'filter_direction');
        $this->setState('filter.direction', $direction);
        parent::populateState('`c`.`id`', 'asc');
    }
}
