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

?>

<form action="<?php echo $this->url;?>">
    <table>
        <tr>
            <td class="searchForm">
                <input type="text" class="raspSearchField" name="fromName" value="" placeholder="<?php echo JText::_('COM_RAILWAY2_FROM');?>">
                <div class="raspSearchLayer" id="raspSearchFrom">Test</div>
            </td>
            <td class="searchForm">
                <input type="text" class="raspSearchField" name="fromTo" value="" placeholder="<?php echo JText::_('COM_RAILWAY2_TO');?>">
                <div class="raspSearchLayer" id="raspSearchTo">Test</div>
            </td>
            <td><input type="submit" value="<?php echo JText::_('COM_RAILWAY2_GO');?>"></td>
        </tr>
    </table>
    <br>
    <br>
    <input type="hidden" name="fromID" value="">
    <input type="hidden" name="toID" value="">
</form>
