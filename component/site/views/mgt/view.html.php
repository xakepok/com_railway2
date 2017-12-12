<?php
defined('_JEXEC') or die;
class Railway2ViewMgt extends JViewLegacy
{
    public $items, $route, $vehicle;

    public function display() {
        $this->items = $this->get('Items');
	    $this->route = JFactory::getApplication()->input->getString('route', '');
	    $this->vehicle = JFactory::getApplication()->input->getString('vehicle', '');

        $this->prepare();
        parent::display();
    }

    private function prepare() {
        $doc = JFactory::getDocument();
        //$title = ($this->error === false) ? $this->makeTitle() : $this->error;
        JHtml::_('jquery.framework');
        $doc->addStyleSheet(JRoute::_('/media/com_railway2/css/style.css'));
        //$doc->setTitle($title);
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
