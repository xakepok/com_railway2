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
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_ID', '`s`.`id`', $listDirn, $listOrder); ?>
    </th>
    <th class="esr-table">
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_STATION_CODE_ESR', '`code`.`esr`', $listDirn, $listOrder); ?>
    </th>
    <th class="express-table">
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_STATION_CODE_EXPRESS', '`code`.`express`', $listDirn, $listOrder); ?>
    </th>
    <th class="station-table">
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_STATION', '`s`.`name`', $listDirn, $listOrder); ?>
    </th>
    <th>
        <?php echo JHtml::_('grid.sort', 'COM_RAILWAY2_DIRECTION', '`dir`.`title`', $listDirn, $listOrder); ?>
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
</tr>