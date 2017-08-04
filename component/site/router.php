<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
class Railway2Router extends JComponentRouterBase
{
    public function build(&$query)
    {
        $segments = array();
        if ($query['view'] == 'station') {
            $segments[] = 'station';
            $segments[] = $query['id'];
            unset($query['view'], $query['id']);
        }
        $query['Itemid'] = '235';
        return $segments;
    }

    public function parse(&$segments)
    {
        $vars = array();
        switch ($segments[0]) {
            case 'station': {
                $vars['view'] = 'station';
                $vars['id'] = $segments[1];
                break;
            }
        }
        return $vars;
    }
}