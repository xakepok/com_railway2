<?php
defined('_JEXEC') or die;
class Railway2ViewStation extends JViewLegacy
{
    public $info, $error, $rasp;

    public function display() {
        $this->error = false;
        $this->info = $this->get('Items');

        if (!$this->info) $this->error = JText::_('COM_RAILWAY2_ERROR_BAD_STATION');
        if ($this->error === false) {
            $this->rasp = $this->get('Rasp');
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

        $title = $this->info['fullName'];

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
