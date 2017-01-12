<?php
defined('_JEXEC') or die;
$listOrder    = $this->escape($this->state->get('list.ordering'));
$listDirn    = $this->escape($this->state->get('list.direction'));
?>
<tr>
    <th width="1%">
        <input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
    </th>
    <th class="esr-table">
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_STATION_CODE_ESR', 'esr', $listDirn, $listOrder); ?>
    </th>
    <th class="express-table">
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_STATION_CODE_EXPRESS', 'express', $listDirn, $listOrder); ?>
    </th>
    <th class="station-table">
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_STATION', 'name', $listDirn, $listOrder); ?>
    </th>
    <th>
        <?php echo JText::_('COM_RAILWAY2_STATION_TYPE'); ?>
    </th>
    <th>
        <?php echo JText::_('COM_RAILWAY2_REGION'); ?>
    </th>
    <th>
        <?php echo JText::_('COM_RAILWAY2_RAILWAY'); ?>
    </th>
    <th width="1%">
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_ID', 'id', $listDirn, $listOrder); ?>
    </th>
</tr>