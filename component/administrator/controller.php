<?php
defined('_JEXEC') or die;

class Railway2Controller extends JControllerLegacy
{
    public function display($cachable = false, $urlparams = array())
    {
        $input = JFactory::getApplication()->input;
        $input->set('view', $input->getCmd('view', 'Railway2'));

        parent::display($cachable);
    }
}
