<?php
defined('_JEXEC') or die;
class Railway2ViewDirection extends JViewLegacy {
    public $items, $levels, $info;

    public function display() {

        $this->items = $this->get('Items');
        if ($this->items != false) {
            $this->levels = $this->get('Levels');
            $this->info = $this->get('Info');
        }
        $this->prepare();
        parent::display();
    }

    public function prepare() {
        $doc = JFactory::getDocument();
        $doc->addStyleSheet(JRoute::_('/media/com_railway2/css/style.css'));
    }
}