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

$controller = JControllerLegacy::getInstance('railway2');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
