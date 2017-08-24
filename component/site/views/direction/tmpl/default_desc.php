<?php
defined('_JEXEC') or die;
?>
<div class="dir-info-title">
    <?php echo JText::_('COM_RAILWAY2_STATION_DESC_TIME'),':'; ?>
</div>
<br>
<table align="left">
    <?php foreach ($this->desc as $item => $value): ?>
        <tr>
            <td class="dir-desc"><?php echo $item;?></td>
            <td class="dir-desc"><?php echo $value;?></td>
        </tr>
    <?php endforeach;?>
</table>