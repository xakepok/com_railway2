<?php
defined('_JEXEC') or die;
class Railway2ViewDirection extends JViewLegacy {
    public $items, $cnt, $info, $levels, $error;

    public function display() {
        $this->error = false;
        $this->info = $this->get('Info');
        if (!$this->info) $this->error = JText::_('COM_RAILWAY2_ERROR_BAD_DIRECTION');
        if ($this->error === false) {
            $this->items = $this->get('Items');
            $this->levels = $this->get('Levels'); //Количество уровней на направлении
            $this->cnt = $this->get('StationsCount'); //Количество строк в таблице со станциями
        }
        $this->prepare();
        parent::display();
    }

    private function prepare() {
        $doc = JFactory::getDocument();
        $doc->addStyleSheet(JRoute::_('/media/com_railway2/css/style.css'));
        JHtml::_('jquery.framework');
        $doc->addScript('/media/com_railway2/js/script.js');
        $title = ($this->error === false) ? $this->makeTitle() : $this->error;
        $doc->setTitle($title);
    }

    private function makeTitle() {
        $config = JFactory::getConfig();
        $title = $this->info->title.' '.mb_strtolower(JText::_('COM_RAILWAY2_DIRECTION'));
        $siteName = $config->get('sitename');
        $sitename_pagetitles = $config->get('sitename_pagetitles');
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
                $title = $title;
            }
        }
        return $title;
    }
}