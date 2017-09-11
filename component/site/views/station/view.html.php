<?php
defined('_JEXEC') or die;
class Railway2ViewStation extends JViewLegacy
{
    public $info, $desc, $near, $error, $rasp, $crosses;

    public function display() {
        $this->error = false;
        $this->info = $this->get('Items');

        if (!$this->info) $this->error = JText::_('COM_RAILWAY2_ERROR_BAD_STATION');
        if ($this->error === false) {
            $this->rasp = $this->get('Rasp');
            $this->desc = $this->get('Desc');
            $this->near = $this->get('NearSafe');
            $this->crosses = $this->get('Crosses');
        }

        $this->prepare();
        parent::display();
    }

    private function prepare() {
        $doc = JFactory::getDocument();
        $title = ($this->error === false) ? $this->makeTitle() : $this->error;
        JHtml::_('jquery.framework');
        $doc->addStyleSheet(JRoute::_('/media/com_railway2/css/style.css'));
        $doc->setTitle($title);
    }

    private function makeTitle() {
        $config = JFactory::getConfig();
        $siteName = $config->get('sitename');
        $sitename_pagetitles = $config->get('sitename_pagetitles');

        $name = (!empty($this->info->popularName)) ? $this->info->popularName : $this->info->name;
        $title = $this->info->tip.' '.$name;

        switch ($sitename_pagetitles) {
            case '1': {
                $title = $siteName.' - '.$title;
                break;
            }
            case '2': {
                $title .= ' - '. $siteName;
                break;
            }
            default: {

            }
        }
        return $title;
    }
}
