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
JHtml::_('behavior.tooltip');

?>
<div id="j-sidebar-container" class="span2">
	<?php echo $this->sidebar; ?>
</div>
<div id="j-main-container" class="span10">
    <form action="<?php echo JRoute::_('index.php?option=com_railway2'); ?>" method="post" name="adminForm" id="adminForm">
        <table class="adminlist">
            <thead><?php echo $this->loadTemplate('head');?></thead>
            <tbody><?php echo $this->loadTemplate('body');?></tbody>
            <tfoot><?php echo $this->loadTemplate('foot');?></tfoot>
        </table>
        <div>
            <input type="hidden" name="task" value="" />
            <input type="hidden" name="boxchecked" value="0" />
            <?php echo JHtml::_('form.token'); ?>
        </div>
    </form>
</div>
