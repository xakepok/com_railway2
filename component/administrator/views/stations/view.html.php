<?php
defined('_JEXEC') or die;

class Railway2ViewStations extends JViewLegacy
{
	protected $helper, $items, $pagination, $state, $sidebar = '', $dirs, $timeQuery;
	public function display($tpl = null)
	{
		$this->toolbar();
        $this->prepare();

		$this->helper = new Railway2Helper;
		$this->helper->addSubmenu('stations');
		$this->sidebar = JHtmlSidebar::render();

        $this->items = $this->get('Items');
        $this->timeQuery = time() - $tStart;
        $this->pagination = $this->get('Pagination');
        $this->state = $this->get('State');

		parent::display($tpl);
	}

	private function toolbar()
	{
		JToolBarHelper::title(JText::_('COM_RAILWAY2_STATIONS'), 'stations');

		if (JFactory::getUser()->authorise('core.admin', 'com_railway2'))
		{
		    JToolbarHelper::addNew('station.add');
            JToolbarHelper::editList('station.edit');
            JToolbarHelper::deleteList(JText::_('COM_RAILWAY2_STATION_DELETE_QUESTION').'?', 'stations.delete');
			JToolbarHelper::preferences('com_railway2');
		}
	}

	private function prepare() {
	    JFactory::getDocument()->addStyleSheet(JUri::root().'media/com_railway2/css/style.css');

    }
}
