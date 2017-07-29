<?php
defined('_JEXEC') or die;

class Railway2ViewStation extends JViewLegacy
{
    public $info, $desc, $near;

    public function display() {
        $this->info = $this->get('Items');
        $this->desc = $this->get('Desc');
        $this->near = $this->get('NearSafe');

        $this->prepare();
        parent::display();
    }

    public function prepare() {
        $doc = JFactory::getDocument();
        JHtml::_('jquery.framework');
        $doc->addStyleSheet(JRoute::_('/media/com_railway2/css/style.css'));
    }
}
