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

    public function mobile()
    {
        $model = BaseDatabaseModel::getInstance('Mobile', 'Railway2Model', array());
        $result = $model->getMobile();
        $result = json_encode($result, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_PARTIAL_OUTPUT_ON_ERROR | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        jexit($result);
    }

    public function desc()
    {
        $model = BaseDatabaseModel::getInstance('Mobile', 'Railway2Model', array());
        $result = $model->getDescTime();
        $result = json_encode($result, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_PARTIAL_OUTPUT_ON_ERROR | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        jexit($result);
    }

    public function food()
    {
        $model = BaseDatabaseModel::getInstance('Station', 'Railway2Model', array());
        $result = $model->getFood();
        $result = json_encode($result, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_PARTIAL_OUTPUT_ON_ERROR | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        jexit($result);
    }
}
