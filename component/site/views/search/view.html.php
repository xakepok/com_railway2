<?php
defined('_JEXEC') or die;
use Joomla\CMS\MVC\View\HtmlView;

class Railway2ViewSearch extends HtmlView {
	public $items, $title;

    public function display($tpl = null) {
		try
		{
            $input = JFactory::getApplication()->input;
            $this->format = $input->getString('format', 'html');

			$this->items   = $this->get('Items');
			$this->title = JText::_('COM_RAILWAY2_RASP_ELEKTRIC_TRAINS')." ".$this->items['from']." - ".$this->items['to']." ".$this->items['date'];

			$this->prepare();

			parent::display($tpl);
		}
		catch (Exception $e)
		{
			JFactory::getApplication()->enqueueMessage(JText::_('COM_MGT_ERROR').' '.$e->getCode().'.\nFile: '.$e->getFile().'.\nLine: '.$e->getLine().',\nText:'.$e->getMessage(), 'error');
			JLog::add($e->getMessage(), JLog::ERROR, 'com_mgt');
		}
	}

	private function prepare()
	{
		JHtml::_('jquery.framework');
		$doc = JFactory::getDocument();
		$doc->setTitle($this->title);
	}

	private $format;
}
