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
                    if ($item['stationID'] == '4983') {
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
				    if ($item['stationID'] == '4981') {
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
                    if ($item['stationID'] == '4982') {
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
                    if ($item['stationID'] == '4469') {
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
                    if ($item['stationID'] == '4470') {
                        echo $item['stationLink'],' ', $item['desc'];
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
                    if ($item['stationID'] == '4471') {
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
                    if ($item['stationID'] == '4472') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="direction-level-main zone-1"></td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="4" valign="top">
                <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4473') {
                        echo $item['stationLink'],' ', $item['desc'];
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
                    if ($item['stationID'] == '4474') {
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
                    if ($item['stationID'] == '4477') {
                        echo $item['stationLink'],' ', $item['desc'];
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
                    if ($item['stationID'] == '4475') {
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
                    if ($item['stationID'] == '4478') {
                        echo $item['stationLink'],' ', $item['desc'];
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
                    if ($item['stationID'] == '4483') {
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
                    if ($item['stationID'] == '4479') {
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
            <td class="direction-level-main zone-1">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4484') {
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
                    if ($item['stationID'] == '4480') {
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
                    if ($item['stationID'] == '4485') {
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
                    if ($item['stationID'] == '4482') {
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
                    if ($item['stationID'] == '4486') {
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
                    if ($item['stationID'] == '4487') {
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
                    if ($item['stationID'] == '4488') {
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
                    if ($item['stationID'] == '4489') {
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
                    if ($item['stationID'] == '4490') {
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
                    if ($item['stationID'] == '4491') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-2"></td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="3" valign="top">
                <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1"></td>
            <td class="zone-1 direction-level-main">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4493') {
                        echo $item['stationLink'],' ', $item['desc'];
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
                    if ($item['stationID'] == '4492') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-1 direction-level-main">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4494') {
                        echo $item['stationLink'],' ', $item['desc'];
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
                    if ($item['stationID'] == '4497') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-1 direction-level-main">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4495') {
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
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4498') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-2 direction-level-main">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4496') {
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
                    if ($item['stationID'] == '4499') {
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
                    if ($item['stationID'] == '4500') {
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
                    if ($item['stationID'] == '4501') {
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
                    if ($item['stationID'] == '4502') {
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
                    if ($item['stationID'] == '4503') {
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
                    if ($item['stationID'] == '4507') {
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
                    if ($item['stationID'] == '4508') {
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
                    if ($item['stationID'] == '4509') {
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
                    if ($item['stationID'] == '4510') {
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
                    if ($item['stationID'] == '4511') {
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
                    if ($item['stationID'] == '4512') {
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
                    if ($item['stationID'] == '4513') {
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
                    if ($item['stationID'] == '4514') {
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
                    if ($item['stationID'] == '4515') {
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
                    if ($item['stationID'] == '4337') {
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
                    if ($item['stationID'] == '4336') {
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
                    if ($item['stationID'] == '4335') {
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
                    if ($item['stationID'] == '4332') {
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
                    if ($item['stationID'] == '4334') {
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
                    if ($item['stationID'] == '4333') {
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
                    if ($item['stationID'] == '4331') {
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
                    if ($item['stationID'] == '4330') {
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
                    if ($item['stationID'] == '4329') {
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
                    if ($item['stationID'] == '4328') {
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
                    if ($item['stationID'] == '4327') {
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
                    if ($item['stationID'] == '4326') {
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
                    if ($item['stationID'] == '4323') {
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
                    if ($item['stationID'] == '4284') {
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
                    if ($item['stationID'] == '4321') {
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
                    if ($item['stationID'] == '4322') {
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
                    if ($item['stationID'] == '4298') {
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
                    if ($item['stationID'] == '4297') {
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
                    if ($item['stationID'] == '4296') {
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
                    if ($item['stationID'] == '4295') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
    </table>
</div>