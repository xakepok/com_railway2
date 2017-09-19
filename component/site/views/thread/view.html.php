<?php
defined('_JEXEC') or die;
class Railway2ViewThread extends JViewLegacy
{
    public $items;

    public function display() {
        $this->items = $this->get('Items');

        $this->prepare();
        parent::display();
    }

    private function prepare() {
        $doc = JFactory::getDocument();
        JHtml::_('jquery.framework');
        $doc->addStyleSheet(JRoute::_('/media/com_railway2/css/style.css'));
        $doc->setTitle($this->makeTitle());
    }

    private function makeTitle() {
        $config = JFactory::getConfig();
        $siteName = $config->get('sitename');
        $sitename_pagetitles = $config->get('sitename_pagetitles');

        $name = $this->items['number'].' '.$this->items['title'];
        $title =JText::_('COM_RAILWAY2_RASP_SUBURBAN').' '.$name;

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
