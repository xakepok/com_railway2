<?php
defined('_JEXEC') or die;
?>
<span class="station-info-title"><?php echo $this->tableTitle; ?></span><br>
<div>
    <table class="no-border" width="100%">
        <tr>
            <td class="no-border">
                <?php echo $this->rasp['directions'];?>
            </td>
            <td style="text-align: right;" class="no-border">
                <input type="date" name="date" id="rasp_station_date" min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d', time() + 86400*60);?>" value="<?php echo $this->dat;?>" />
            </td>
        </tr>
    </table>
</div>
<table class="rasp-table">
    <tr>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_NUMBER'); ?></th>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_TIME'); ?></th>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_ROUTE'); ?></th>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_STOPS'); ?></th>
        <?php if ($this->dat == Railway2HelperCodes::getCurrentDate("Y-m-d")): ?>
            <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_ONLINE'); ?></th>
        <?php endif; ?>
        <th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_COCONS'); ?></th>
    </tr>
    <?php foreach ($this->rasp['schedule'] as $item) {
        ?>
        <tr>
            <td class="rasp-list-item"><span class="station-rasp-font">
                    <?php echo $item['number']; ?></span>
            </td>
            <td class="rasp-list-item"><span class="station-rasp-font">
                    <?php echo $item['time']; ?></span>
            </td>
            <td class="rasp-list-item"><span class="station-rasp-font">
                    <?php echo $item['link']; ?></span>
                    <?php if (!empty($item['type'])) {
                        echo "<br><span class=\"station-rasp-font\" style=\"color: ".$item['color']."\">", $item['type'], "</span>";
                    }?>
            </td>
            <td class="rasp-list-item"><span class="station-rasp-font">
                    <span class="station-rasp-font"><?php echo $item['stops']; ?></span>
                    <?php if (!empty($item['platform'])) {
                        echo "<br><span class=\"platform\">", $item['platform'], "</span>";
                    }?>
            </td>
            <?php if ($this->dat == Railway2HelperCodes::getCurrentDate("Y-m-d")): ?>
                <td class="rasp-list-item"><span class="station-rasp-font"><?php echo $item['online'];?></span></td>
	        <?php endif; ?>
            <td class="rasp-list-item">
                <?php echo $item['cocon'];?>
            </td>
        </tr>
        <?php
    }?>
</table>