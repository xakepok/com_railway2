<?php
defined('_JEXEC') or die;

class Railway2ViewInspections extends JViewLegacy
{
	protected $helper, $items, $pagination, $sidebar = '';
	public function display($tpl = null)
	{
		// Show the toolbar
		$this->toolbar();
		$this->prepare();

		// Show the sidebar
		$this->helper = new Railway2Helper;
		$this->helper->addSubmenu('inspections');
		$this->sidebar = JHtmlSidebar::render();

        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->state = $this->get('State');

		// Display it all
		parent::display($tpl);
	}

	private function toolbar()
	{
		JToolBarHelper::title(JText::_('COM_RAILWAY2_INSPECTIONS'), 'inspections');

		// Options button.
		if (JFactory::getUser()->authorise('core.admin', 'com_railway2'))
		{
		    JToolbarHelper::addNew('inspection.add');
            JToolbarHelper::editList('inspection.edit');
            JToolbarHelper::deleteList('railway2.delete');
			JToolBarHelper::preferences('com_railway2');
		}
	}

    private function prepare() {
        JFactory::getDocument()->addStyleSheet(JUri::root().'media/com_railway2/css/style.css');
    }

}
