<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
class Railway2Router extends JComponentRouterBase
{
    public function build(&$query)
    {
        $segments = array();
        if ($query['view'] == 'station') {
            $segments[] = $query['id'];
            unset($query['view'], $query['id']);
        }
        if ($query['view'] == 'direction') {
            $segments[] = $query['id'];
	        unset($query['view'], $query['id']);
        }
	    if ($query['view'] == 'help') {
		    unset($query['view']);
	    }
        return $segments;
    }

    public function parse(&$segments)
    {
        $vars = array();
        $menu = JMenu::getInstance('site')->getActive();
        switch ($menu->query["view"]) {
            case 'station': {
                $vars['view'] = 'station';
                $vars['id'] = $segments[0];
                break;
            }
            case 'direction': {
                $vars['view'] = 'direction';
                $vars['id'] = $segments[0];
                break;
            }
	        case 'help': {
		        $vars['view'] = 'help';
		        break;
	        }
        }
        return $vars;
    }
}