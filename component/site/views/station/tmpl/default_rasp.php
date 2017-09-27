<?php
defined('_JEXEC') or die;
?>
<span class="station-info-title"><?php echo JText::_('COM_RAILWAY2_RASP_ON'), ' ',mb_strtolower(JText::_('COM_RAILWAY2_DAYS_TODAY')); ?></span><br>
<div>
    <tr>
        <td>
            <?php echo $this->rasp['directions'];?>
        </td>
        <td align="right">

        </td>
    </tr>
</div>
<table class="rasp-table">
    <tr>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_NUMBER'); ?></th>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_TIME'); ?></th>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_ROUTE'); ?></th>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_STOPS'); ?></th>
    </tr>
    <?php foreach ($this->rasp['schedule'] as $item) {
        ?>
        <tr>
            <td class="rasp-list-item"><span class="station-rasp-font<?php echo ' ',$item['class'];?>">
                    <?php echo $item['number']; ?></span>
            </td>
            <td class="rasp-list-item"><span class="station-rasp-font<?php echo ' ',$item['class'];?>">
                    <?php echo $item['time']; ?></span>
            </td>
            <td class="rasp-list-item"><span class="station-rasp-font<?php echo ' ',$item['class'];?>">
                    <?php echo $item['link']; ?></span>
            </td>
            <td class="rasp-list-item"><span class="station-rasp-font<?php echo ' ',$item['class'];?>">
                    <span class="station-rasp-font"><?php echo $item['stops']; ?></span>
            </td>
        </tr>
        <?php
    }?>
</table>