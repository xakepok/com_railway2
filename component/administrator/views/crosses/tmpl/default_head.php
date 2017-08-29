<?php
defined('_JEXEC') or die;
$listOrder    = $this->escape($this->state->get('list.ordering'));
$listDirn    = $this->escape($this->state->get('list.direction'));
?>
<tr>
    <th width="1%" class="hidden-phone">
        <input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
    </th>
    <th width="1%">
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_ID', '`c`.`id`', $listDirn, $listOrder); ?>
    </th>
    <th class="esr-table">
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_METRO_STATION_RW', '`station`', $listDirn, $listOrder); ?>
    </th>
    <th class="express-table">
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_METRO_STATION', '`metro`', $listDirn, $listOrder); ?>
    </th>
    <th class="station-table">
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_METRO_LINE', '`line`', $listDirn, $listOrder); ?>
    </th>
</tr>