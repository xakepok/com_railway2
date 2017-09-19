<?php
defined('_JEXEC') or die;
$icon['turnstiles'] = '/media/com_railway2/images/turnstiles_18.png';
$icon['desc'] = '/media/com_railway2/images/desc_18.png';
$icon['metro'] = '/media/com_railway2/images/Subway_18px.png';
$linkOptions = array('target' => '_blank');
?>
<div class="direction-info-title">
    <span style="background-color: <?php echo $this->info->color; ?> ; color: <?php echo $this->info->font;?>"><?php echo $this->info->title, ' ', mb_strtolower(JText::_('COM_RAILWAY2_DIRECTION')); ?></span>
</div>
<br>
<div class="center dir-scheme" align="center">
    <table class="direction-table" align="center">
        <tr>
            <td class="zone-1 zone-hint">
                <?php echo "<span class='hint-zone'>0 ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4983') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
	                    break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="2" valign="top">
		        <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '4981') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4982') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="4" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4469') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4470') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1 direction-level">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4471') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4472') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
            <td class="direction-level-main zone-1"></td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="4" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4473') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
            <td class="direction-level-main zone-2"></td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4474') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4477') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4475') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4478') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4483') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4479') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="4" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4484') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
            <td class="direction-level-main zone-1">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4480') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4485') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
            <td class="direction-level-main zone-1">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4482') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4486') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4487') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="4" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4488') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4489') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4490') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4491') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-2"></td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="3" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1"></td>
            <td class="zone-1 direction-level-main">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4493') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1 direction-level-main">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4492') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-1 direction-level-main">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4494') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1 direction-level-main">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4497') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-1 direction-level-main">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4495') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="3" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4498') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-2 direction-level-main">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4496') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4502') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4500') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="3" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4501') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4502') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4503') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="3" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4507') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4508') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4509') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="2" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4510') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4511') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="2" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4512') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4513') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="2" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4514') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4515') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4337') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4336') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="3" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4335') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4332') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4334') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4333') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="2" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4331') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4330') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4329') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4328') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="2" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4327') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4326') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4323') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="2" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4284') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4321') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="2" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4322') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4298') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="2" valign="top">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4297') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
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
                    if ($item->stationID == '4296') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2">
                <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4295') {
                        echo Railway2HelperCodes::printScheme($item, $this->crosses);
                        break;
                    }
                }
                ?>
            </td>
        </tr>
    </table>
</div>