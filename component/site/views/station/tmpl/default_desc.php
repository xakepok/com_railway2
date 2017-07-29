<?php
defined('_JEXEC') or die;
?>
<span class="station-info-title"><?php echo JText::_('COM_RAILWAY2_DESC'); ?></span><br>
<?php
$bezkass = array();
foreach ($this->near as $free) {
    array_push($bezkass, "<a href='".JRoute::_('index.php?option=com_railway2&view=station&id=')."{$free->stationID}'>{$free->name}</a>");
}
if ($this->desc[0]->time_1 == null && $this->desc[0]->time_2 == null && $this->desc[0]->turnstiles == null) echo JText::_('COM_RAILWAY2_STATION_DESC_NO');
elseif ($this->desc[0]->turnstiles != null || ($this->desc[0]->time_1 == '00:00:00' && $this->desc[0]->time_2 == '23:59:59')) echo JText::_('COM_RAILWAY2_EVERYTIME');
else {
    ?>
    <table>
        <tr>
            <th><?php echo JText::_('COM_RAILWAY2_STATION_DESC_TIME_START'); ?></th>
            <th><?php echo JText::_('COM_RAILWAY2_STATION_DESC_TIME_END'); ?></th>
        </tr>
        <?php foreach ($this->desc as $item) : ?>
        <tr>
            <td>
                <?php echo $item->time_1; ?>
            </td>
            <td>
                <?php echo $item->time_2; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php
}
echo "<br>".JText::_('COM_RAILWAY2_NEAR').': '.implode(',', $bezkass);
?>