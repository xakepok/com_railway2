<?php
defined('_JEXEC') or die;
use Joomla\CMS\MVC\Model\ListModel;
use Joomla\CMS\MVC\Model\BaseDatabaseModel;

class Railway2ControllerRailway2 extends JControllerLegacy
{
    public function stations()
    {
        $model = ListModel::getInstance('Search', 'Railway2Model', array());
        $stations = $model::getStations();
        $stations = json_encode($stations);
        jexit($stations);
    }

    public function cocon()
    {
        $model = BaseDatabaseModel::getInstance('Cocons', 'Railway2Model', array());
        $del = JFactory::getApplication()->input->getBool('del', false);
        $cocon = (!$del) ? $model->setCocon() : $model->delCocon();
        $url = base64_decode(JFactory::getApplication()->input->getString('back'));
        $this->setRedirect($url, JText::_('COM_RAILWAY2_UPDATED'));
        $this->redirect();
        jexit();
    }
}
