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

JHtml::_('script', 'com_railway2/script.js', false, true);
JHtml::_('stylesheet', 'com_railway2/style.css', array(), true);

$layout = new JLayoutFile('railway2.page');
$data = new stdClass;
$data->text = 'Hello Joomla!';
echo $layout->render($data);