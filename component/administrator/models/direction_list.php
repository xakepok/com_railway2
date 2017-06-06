<?php
defined('_JEXEC') or die;

class Railway2ModelDirection_list extends JModelList
{
    public function __construct(array $config)
    {
        if (empty($config['filter_fields']))
        {
            $config['filter_fields'] = array(
                '`id`',
                '`alias`',
                '`title`'
            );
        }
        parent::__construct($config);
    }

    public function getListQuery()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
           ->select('*')
            ->from('#__rw2_directions_list')
        ;

        return $query;
    }
}
