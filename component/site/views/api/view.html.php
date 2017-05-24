<?php
defined('_JEXEC') or die;

class Railway2ViewApi extends JViewLegacy
{
    public $url;
    protected $api;

    public function display() {
        //$this->prepare();
        header('Content-Type: application/json');
        $this->api = "API";
        $res = json_encode(array("api" => "ok"));
        echo $res;
        jexit();

        //parent::display();
    }

    public function prepare() {
        $doc = JFactory::getDocument();
        //JHtml::_('jquery.framework');
        //$doc->addStyleSheet(JRoute::_('/media/com_railway2/css/style.css'));
    }
}
