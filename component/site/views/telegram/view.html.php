<?php
defined('_JEXEC') or die;

class Railway2ViewTelegram extends JViewLegacy
{
    public $url;
    protected $api;

    public function display() {
        $telegram = JModelLegacy::getInstance('Telegram', 'Railway2Model');
        $telegram->parse();

        header('Content-Type: application/json');
        jexit();

        //parent::display();
    }
}
