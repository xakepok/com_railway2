<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class Railway2ControllerTickets extends JControllerAdmin {
    public function getModel($name = 'Ticket', $prefix = 'Railway2Model')
    {
        return parent::getModel($name, $prefix, array('ignore_request' => true));
    }

    public function setChecked() {
	    $model = $this->getModel();
	    $model->setChecked();
	    $this->setRedirect('index.php?option=com_railway2&view=tickets');
    }
}