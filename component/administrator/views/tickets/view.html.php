<?php
defined('_JEXEC') or die;

class Railway2ViewTickets extends JViewLegacy
{
	protected $helper, $items, $pagination, $sidebar = '';
	public function display($tpl = null)
	{
		$this->helper = new Railway2Helper;
		$this->helper->addSubmenu('tickets');
		$this->sidebar = JHtmlSidebar::render();

        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->state = $this->get('State');

        $this->toolbar();
        $this->prepare();
		parent::display($tpl);
	}

	private function toolbar()
	{
		JToolBarHelper::title(JText::_('COM_RAILWAY2_STATION_DESC_TIME'), 'tickets');

		// Options button.
		if (JFactory::getUser()->authorise('core.admin', 'com_railway2'))
		{
		    JToolbarHelper::addNew('ticket.add');
            JToolbarHelper::editList('ticket.edit');
            JToolbarHelper::deleteList(JText::_('COM_RAILWAY2_DESC_DELETE_QUESTION').'?', 'tickets.delete');
			JToolBarHelper::preferences('com_railway2');
		}
	}

    private function prepare() {
        JFactory::getDocument()->addStyleSheet(JUri::root().'media/com_railway2/css/style.css');
    }

}
