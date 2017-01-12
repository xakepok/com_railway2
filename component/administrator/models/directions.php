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
 * Railway2
 *
 * @package  railway2
 * @since    1.0
 */
class Railway2ModelDirections extends JModelList
{
    public function getListQuery()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
            ->select('id, name')
            ->from('#__directions')
            ->order('id');
        return $query;
    }
}
