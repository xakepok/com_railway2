<?php
defined('_JEXEC') or die;
$zone = 0;
?>
<div class="direction-info-title">
    <span style="background-color: <?php echo $this->info->color; ?> ; color: <?php echo $this->info->font;?>"><?php echo $this->info->title, ' ', mb_strtolower(JText::_('COM_RAILWAY2_DIRECTION')); ?></span>
</div>
<br>
<div class="center dir-scheme" align="center">
    <table class="direction-table" align="center">
        <tr>
            <td class="zone-1 zone-hint">
                <?php echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '1465') {
                        echo $item['stationLink'],' ', $item['desc'];
	                    break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="2" valign="top">
		        <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1464') {
                        echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '1463') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="4" valign="top">
                <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '1462') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '1461') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '1460') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '1458') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="3" valign="top">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1459') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1470') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1471') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="4" valign="top">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1472') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1473') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1474') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1475') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="3" valign="top">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1476') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1477') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1479') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="4" valign="top">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1480') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1481') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1483') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1484') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" valign="top">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1485') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="3" valign="top">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1486') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1487') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1488') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="2" valign="top">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1489') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1490') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" valign="top">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1491') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="2" valign="top">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1492') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2 direction-level">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1493') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-2"></td>
        </tr>
        <tr>
            <td class="zone-0" rowspan="9" valign="top">
                <?php echo JText::_('COM_RAILWAY2_EVENKILOMETR_TARIF'); ?>
            </td>
            <td class="direction-level-main zone-0">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1494') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-0">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1495') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-0">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1499') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-0">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1496') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-0">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1500') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-0">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1497') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-0">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1501') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-0">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1498') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-0" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1502') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-0" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1503') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-0" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1504') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-0" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1505') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-0" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '1506') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
    </table>
</div>