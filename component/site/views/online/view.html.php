<?php
use Joomla\CMS\MVC\View\HtmlView;
defined('_JEXEC') or die;
class Railway2ViewOnline extends HtmlView
{
	public $items, $pagination, $state;
	public function display() {
		try
		{
			$this->items = $this->get('Items');
			$this->pagination = $this->get('Pagination');
			$this->state = $this->get('State');

			$this->prepare();

			parent::display();
		}
		catch (Exception $e)
		{
			JFactory::getApplication()->enqueueMessage($e->getCode().'.\nFile: '.$e->getFile().'.\nLine: '.$e->getLine().',\nText:'.$e->getMessage(), 'error');
			JLog::add($e->getMessage(), JLog::ERROR, 'com_railway2');
		}
	}

	private function prepare()
	{
		JHtml::_('jquery.framework');
		$doc = JFactory::getDocument();
		$doc->addStyleSheet('/media/com_railway2/css/style.css');
	}
}
