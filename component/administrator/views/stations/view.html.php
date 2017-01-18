<?php
/**
 * @package    railway2
 *
 * @author     Admin <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

/**
 * Railway2 view.
 *
 * @package  railway2
 * @since    1.0
 */
class Railway2ViewStations extends JViewLegacy
{
	protected $helper, $items, $pagination, $state, $sidebar = '';
	public function display($tpl = null)
	{
		// Show the toolbar
		$this->toolbar();
        $this->prepare();

		// Show the sidebar
		$this->helper = new Railway2Helper;
		$this->helper->addSubmenu('stations');
		$this->sidebar = JHtmlSidebar::render();

        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->state = $this->get('State');

		// Display it all
		parent::display($tpl);
	}

	private function toolbar()
	{
		JToolBarHelper::title(JText::_('COM_RAILWAY2_STATIONS'), 'stations');

		// Options button.
		if (JFactory::getUser()->authorise('core.admin', 'com_railway2'))
		{
		    JToolbarHelper::addNew('station.add');
            JToolbarHelper::editList('station.edit');
            JToolbarHelper::deleteList('stations.delete');
			JToolBarHelper::preferences('com_railway2');
		}
	}

	private function prepare() {
	    JFactory::getDocument()->addStyleSheet(JUri::root().'media/com_railway2/css/style.css');

    }
}
