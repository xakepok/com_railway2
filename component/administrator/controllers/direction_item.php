<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.controllerform');

class Railway2ControllerDirection_item extends JControllerForm {
    public function direction_item() {
        parent::display();
    }

    public function save($key = null, $urlVar = null)
    {
        $return = parent::save($key, $urlVar);
        $this->setRedirect('index.php?option=com_railway2&view=direction_list');
        return $return;
    }

    public function cancel($key = null)
    {
        $return = parent::cancel($key);
        $this->setRedirect('index.php?option=com_railway2&view=direction_list');
        return $return;
    }
}