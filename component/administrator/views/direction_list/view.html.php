<?php
defined('_JEXEC') or die;

class Railway2ViewDirection_list extends JViewLegacy
{
	protected $helper, $items, $pagination, $sidebar = '';
	public function display($tpl = null)
	{
		// Show the toolbar
		$this->toolbar();
		$this->prepare();

		// Show the sidebar
		$this->helper = new Railway2Helper;
		$this->helper->addSubmenu('direction_list');
		$this->sidebar = JHtmlSidebar::render();

        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->state = $this->get('State');

		// Display it all
		parent::display($tpl);
	}

	private function toolbar()
	{
		JToolBarHelper::title(JText::_('COM_RAILWAY2_DIRECTION_LIST'), 'direction_list');

		// Options button.
		if (JFactory::getUser()->authorise('core.admin', 'com_railway2'))
		{
		    JToolbarHelper::addNew('direction_item.add');
            JToolbarHelper::editList('direction_item.edit');
            JToolbarHelper::deleteList('direction_list.delete');
			if (Railway2Helper::canDo('core.edit.state'))
			{
				JToolbarHelper::publish('direction_list.publish', 'JTOOLBAR_PUBLISH', true);
				JToolbarHelper::unpublish('direction_list.unpublish', 'JTOOLBAR_UNPUBLISH', true);
			}
			JToolBarHelper::preferences('com_railway2');
		}
	}

    private function prepare() {
        JFactory::getDocument()->addStyleSheet(JUri::root().'media/com_railway2/css/style.css');
    }

}
