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
class Railway2ViewRailway2 extends JViewLegacy
{
	/**
	 * Railway2 helper
	 *
	 * @var    Railway2Helper
	 * @since  1.0
	 */
	protected $helper;

	/**
	 * The sidebar to show
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $sidebar = '';

	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise a JError object.
	 *
	 * @see     fetch()
	 * @since   1.0
	 */
	public function display($tpl = null)
	{
		// Show the toolbar
		$this->toolbar();

		// Show the sidebar
		$this->helper = new Railway2Helper;
		$this->helper->addSubmenu('railway2');
		$this->sidebar = JHtmlSidebar::render();

		// Display it all
		parent::display($tpl);
	}

	/**
	 * Displays a toolbar for a specific page.
	 *
	 * @return  void.
	 *
	 * @since   1.0
	 */
	private function toolbar()
	{
		JToolBarHelper::title(JText::_('COM_RAILWAY2'), '');

		// Options button.
		if (JFactory::getUser()->authorise('core.admin', 'com_railway2'))
		{
			JToolBarHelper::preferences('com_railway2');
		}
	}
}
