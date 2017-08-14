<?php
defined('_JEXEC') or die;
class Railway2ViewDirection extends JViewLegacy {
    public $items, $cnt, $info, $levels;

    public function display() {

        $this->items = $this->get('Items');
        if ($this->items != false) {
            $this->levels = $this->get('Levels'); //Количество уровней на направлении
            $this->cnt = $this->get('StationsCount'); //Количество строк в таблице со станциями
            $this->info = $this->get('Info');
        }
        $this->prepare();
        parent::display();
    }

    public function prepare() {
        $doc = JFactory::getDocument();
        $doc->addStyleSheet(JRoute::_('/media/com_railway2/css/style.css'));
        JHtml::_('jquery.framework');
        $doc->addScript('/media/com_railway2/js/script.js');
    }
}