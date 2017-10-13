<?php
defined('_JEXEC') or die;
class Railway2ViewDirections extends JViewLegacy
{
    public $items;

    public function display() {
        $this->items = $this->get('Items');

        $this->prepare();
        parent::display();
    }

    private function prepare() {
        $doc =& JFactory::getDocument();
        //$title = ($this->error === false) ? $this->makeTitle() : $this->error;
        JHtml::_('jquery.framework');
        $doc->addStyleSheet(JRoute::_('/media/com_railway2/css/style.css'));
        //$doc->setTitle($title);
        $doc->addScript(JRoute::_('/media/com_railway2/js/script.js'));
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
