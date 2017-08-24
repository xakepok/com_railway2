<?php
defined('_JEXEC') or die;
class Railway2ModelInspections extends JModelList
{
    public function __construct(array $config)
    {
        if (empty($config['filter_fields']))
        {
            $config['filter_fields'] = array(
                '`d`.`id`',
                '`d`.`title`'
            );
        }
        parent::__construct($config);
    }

    public function getListQuery()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('`i`.`id`, `d`.`id` as `directionID`, `d`.`title` as `direction`, `i`.`inspection`, `cocon`, `info`')
            ->from('#__rw2_direction_info as `i`')
            ->leftJoin('#__rw2_directions_list as `d` on `d`.`id` = `i`.`directionID`');
        /* Сортировка */
        $orderCol  = $this->state->get('list.ordering', '`d`.`title`');
        $orderDirn = $this->state->get('list.direction', 'asc');
        $query->order($db->escape($orderCol . ' ' . $orderDirn));

        return $query;
    }


    /* Возврат нормальной сортировки */
    protected function populateState($ordering = null, $direction = null)
    {
        $direction = $this->getUserStateFromRequest($this->context . '.filter.direction', 'filter_direction');
        $this->setState('filter.direction', $direction);
        parent::populateState('`d`.`title`', 'asc');
    }
}
