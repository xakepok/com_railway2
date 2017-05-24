<?php
defined('_JEXEC') or die;

class Railway2ViewRailway2 extends JViewLegacy
{
    public $url;

    public function display() {
        $this->prepare();

        $this->url = JRoute::_('index.php?option=com_railway2&view=search');

        parent::display();
    }

    public function prepare() {
        $doc = JFactory::getDocument();
        JHtml::_('jquery.framework');
        $doc->addStyleSheet(JRoute::_('/media/com_railway2/css/style.css'));
    }
}
