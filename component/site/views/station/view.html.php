<?php
defined('_JEXEC') or die;

class Railway2ViewStation extends JViewLegacy
{
    public $info, $desc, $near, $error, $rasp;

    public function display() {
        $this->error = false;
        $this->info = $this->get('Items');
        if (!$this->info) $this->error = JText::_('COM_RAILWAY2_ERROR_BAD_STATION');
        if ($this->error === false) {
            $this->rasp = $this->get('Rasp');
            //var_dump($this->rasp);
            $this->desc = $this->get('Desc');
            $this->near = $this->get('NearSafe');
        }

        $this->prepare();
        parent::display();
    }

    public function prepare() {
        $doc = JFactory::getDocument();
        $config = JFactory::getConfig();
        $name = (!empty($this->info->popularName)) ? $this->info->popularName : $this->info->name;
        $stationName = ($this->error === false) ? $this->info->tip.' '.$name : $this->error;
        $siteName = $stationName.' - '.$config->get('sitename');
        JHtml::_('jquery.framework');
        $doc->addStyleSheet(JRoute::_('/media/com_railway2/css/style.css'));
        $doc->setTitle($siteName);
    }
}
