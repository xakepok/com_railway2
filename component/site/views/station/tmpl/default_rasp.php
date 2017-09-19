<?php
defined('_JEXEC') or die;
?>
<span class="station-info-title"><?php echo JText::_('COM_RAILWAY2_RASP_ON'), ' ',mb_strtolower(JText::_('COM_RAILWAY2_DAYS_TODAY')); ?></span><br>
<table class="rasp-table">
    <tr>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_NUMBER'); ?></th>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_TIME'); ?></th>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_ROUTE'); ?></th>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_STOPS'); ?></th>
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
        $showTime = ($item->departure !== null) ? $item->departure : $item->arrival; //Отображаемое время
        ?>
        <tr>
            <td class="rasp-list-item"><span class="station-rasp-font<?php echo ' ',$class;?>">
                    <?php echo $item->thread->number; ?></span>
            </td>
            <td class="rasp-list-item"><span class="station-rasp-font<?php echo ' ',$class;?>">
                    <?php echo Railway2HelperCodes::timeRasp($showTime); ?></span>
            </td>
            <td class="rasp-list-item"><span class="station-rasp-font<?php echo ' ',$class;?>">
                    <?php echo ($this->info->directionID != '1') ? $item->thread->title : JHtml::link(JRoute::_('index.php?option=com_railway2&view=thread&id='.$item->thread->uid.'&date='.Railway2HelperCodes::iso8601ToDate($item->departure).'&Itemid=246'), $item->thread->title, array('target' => '_blank')); ?></span>
            </td>
            <td class="rasp-list-item"><span class="station-rasp-font<?php echo ' ',$class;?>">
                    <?php echo $item->stops; ?></span>
            </td>
        </tr>
        <?php
    }?>
</table>