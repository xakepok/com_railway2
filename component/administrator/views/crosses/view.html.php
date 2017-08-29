<?php
defined('_JEXEC') or die;

class Railway2ViewCrosses extends JViewLegacy
{
	protected $helper, $items, $pagination, $state, $sidebar = '', $dirs;
	public function display($tpl = null)
	{
		$this->toolbar();
        $this->prepare();

		$this->helper = new Railway2Helper;
		$this->helper->addSubmenu('crosses');
		$this->sidebar = JHtmlSidebar::render();

        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->state = $this->get('State');

		parent::display($tpl);
	}

	private function toolbar()
	{
		JToolBarHelper::title(JText::_('COM_RAILWAY2_METRO_CROSSES'), 'crosses');

		if (JFactory::getUser()->authorise('core.admin', 'com_railway2'))
		{
		    JToolbarHelper::addNew('cross.add');
            JToolbarHelper::editList('cross.edit');
            JToolbarHelper::deleteList(JText::_('COM_RAILWAY2_METRO_CROSS_DELETE_QUESTION').'?', 'crosses.delete');
			JToolbarHelper::preferences('com_railway2');
		}
	}

	private function prepare() {
	    JFactory::getDocument()->addStyleSheet(JUri::root().'media/com_railway2/css/style.css');

    }
}
