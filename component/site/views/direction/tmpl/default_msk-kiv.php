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
                    if ($item['stationID'] == '4977') {
	                    echo $item['stationLink'],' ', $item['desc'];
	                    break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2">
		        <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4974') {
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
				    if ($item['stationID'] == '4437') {
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
				    if ($item['stationID'] == '4436') {
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
				    if ($item['stationID'] == '4438') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="4" valign="top">
		        <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2 direction-level">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4439') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-2"></td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4440') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4442') {
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
                    if ($item['stationID'] == '4441') {
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
                    if ($item['stationID'] == '4443') {
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
            <td class="direction-level-main zone-1 direction-level">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4444') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-1"></td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4447') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4445') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4448') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4446') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="4" valign="top">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4449') {
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
				    if ($item['stationID'] == '4450') {
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
				    if ($item['stationID'] == '4451') {
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
				    if ($item['stationID'] == '4452') {
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
				    if ($item['stationID'] == '4453') {
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
				    if ($item['stationID'] == '4454') {
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
				    if ($item['stationID'] == '4455') {
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
				    if ($item['stationID'] == '4456') {
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
				    if ($item['stationID'] == '4425') {
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
				    if ($item['stationID'] == '4428') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="2" valign="top">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4516') {
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
				    if ($item['stationID'] == '4517') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4518') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4519') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4521') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="2" valign="top">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4522') {
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
				    if ($item['stationID'] == '4523') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4524') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4526') {
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
				    if ($item['stationID'] == '4525') {
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
				    if ($item['stationID'] == '4527') {
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
				    if ($item['stationID'] == '4528') {
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
				    if ($item['stationID'] == '4529') {
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
				    if ($item['stationID'] == '4530') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2 direction-level">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4531') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-2"></td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="2" valign="top">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" rowspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4532') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4666') {
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
				    if ($item['stationID'] == '4665') {
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
            <td class="direction-level-main zone-2" rowspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4533') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4664') {
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
				    if ($item['stationID'] == '4663') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
    </table>
</div>