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
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_ID', 'id', $listDirn, $listOrder); ?>
    </th>
    <th>
        <?php echo JText::_('COM_RAILWAY2_STATION_ID'); ?>
    </th>
    <th>
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_STATION', '`stationName`', $listDirn, $listOrder); ?>
    </th>
    <th>
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_STATION_CODE_ESR', 'esr', $listName, $listOrder); ?>
    </th>
    <th>
        <?php echo JText::_('COM_RAILWAY2_STATION_CODE_EXPRESS'); ?>
    </th>
    <th>
        <?php echo JText::_('COM_RAILWAY2_STATION_CODE_YANDEX'); ?>
    </th>
</tr>