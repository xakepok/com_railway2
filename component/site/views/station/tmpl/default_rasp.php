<?php
defined('_JEXEC') or die;
?>
<span class="station-info-title"><?php echo JText::_('COM_RAILWAY2_RASP'); ?></span><br>
<table class="rasp-table">
    <tr>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_NUMBER'); ?></th>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_ROUTE'); ?></th>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_STOPS'); ?></th>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_TIME'); ?></th>
    </tr>
    <?php foreach ($this->rasp as $item) {
        $class = '';
        switch ($item->thread->express_type) {
            case 'express': {
                $class = 'express';
                break;
            }
            default: {
                $class = 'noexpress';
            }
        }
        ?>
        <tr>
            <td class="rasp-list-item"><span class="station-rasp-font<?php echo ' ',$class;?>">
                    <?php echo $item->thread->number; ?></span>
            </td>
            <td class="rasp-list-item"><span class="station-rasp-font<?php echo ' ',$class;?>">
                    <?php echo $item->thread->title; ?></span>
            </td>
            <td class="rasp-list-item"><span class="station-rasp-font<?php echo ' ',$class;?>">
                    <?php echo $item->stops; ?></span>
            </td>
            <td class="rasp-list-item"><span class="station-rasp-font<?php echo ' ',$class;?>">
                    <?php echo Railway2HelperCodes::timeRasp($item->departure); ?></span>
            </td>
        </tr>
        <?php
    }?>
</table>