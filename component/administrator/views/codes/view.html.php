<?php
defined('_JEXEC') or die;

class Railway2ViewCodes extends JViewLegacy
{
	protected $helper, $items, $pagination, $sidebar = '';
	public function display($tpl = null)
	{
		// Show the toolbar
		$this->toolbar();
		$this->prepare();

		// Show the sidebar
		$this->helper = new Railway2Helper;
		$this->helper->addSubmenu('codes');
		$this->sidebar = JHtmlSidebar::render();

        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->state = $this->get('State');

		// Display it all
		parent::display($tpl);
	}

	private function toolbar()
	{
		JToolBarHelper::title(JText::_('COM_RAILWAY2_STATION_CODES_NAME'), 'codes');

		// Options button.
		if (JFactory::getUser()->authorise('core.admin', 'com_railway2'))
		{
		    JToolbarHelper::addNew('code.add');
            JToolbarHelper::editList('code.edit');
            JToolbarHelper::deleteList('', 'codes.delete');
			JToolBarHelper::preferences('com_railway2');
		}
	}

    private function prepare() {
        JFactory::getDocument()->addStyleSheet(JUri::root().'media/com_railway2/css/style.css');
    }

}
