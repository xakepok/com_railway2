<?php
defined('_JEXEC') or die;
$zone = 0;
?>
<div class="direction-info-title">
    <span style="background-color: <?php echo $this->info->color; ?> ; color: <?php echo $this->info->font;?>"><?php echo $this->info->title, ' ', mb_strtolower(JText::_('COM_RAILWAY2_DIRECTION')); ?></span>
</div>
<br>
<div class="center" align="center">
    <table class="direction-table" align="center" width="100%">
        <tr>
            <td class="zone-1 zone-hint">
                <?php echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4896') {
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
            <td class="direction-level-main zone-2" colspan="3">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4897') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="3">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4898') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1 zone-hint" rowspan="4">
                <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4899') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4900') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4889') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4890') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="6" valign="top">
                <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4891') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4892') {
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
                    if ($item['stationID'] == '5985') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-2 direction-level"></td>
            <td class="zone-2"></td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '5986') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-2"></td>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '5994') {
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
                    if ($item['stationID'] == '5987') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-2"></td>
            <td class="direction-level-main zone-2" rowspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '5995') {
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
                    if ($item['stationID'] == '5988') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-2 direction-level"></td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="5" valign="top">
                <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '5989') {
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
                    if ($item['stationID'] == '5998') {
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
                    if ($item['stationID'] == '5996') {
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
                    if ($item['stationID'] == '5990') {
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
                    if ($item['stationID'] == '5999') {
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
                    if ($item['stationID'] == '5997') {
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
                    if ($item['stationID'] == '6017') {
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
                    if ($item['stationID'] == '6000') {
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
                    if ($item['stationID'] == '6005') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" rowspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6018') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="direction-level-main zone-1" rowspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6001') {
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
                    if ($item['stationID'] == '6006') {
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
                    if ($item['stationID'] == '6007') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="5" valign="top">
                <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6019') {
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
                    if ($item['stationID'] == '6002') {
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
                    if ($item['stationID'] == '6008') {
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
                    if ($item['stationID'] == '6020') {
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
                    if ($item['stationID'] == '6003') {
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
                    if ($item['stationID'] == '6009') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" rowspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6021') {
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
                    if ($item['stationID'] == '6004') {
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
                    if ($item['stationID'] == '6010') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2"></td>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6011') {
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
                    if ($item['stationID'] == '6023') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-2"></td>
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6012') {
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
            <td class="direction-level-main zone-1">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6024') {
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
                    if ($item['stationID'] == '6029') {
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
                    if ($item['stationID'] == '6013') {
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
                    if ($item['stationID'] == '6025') {
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
                    if ($item['stationID'] == '6030') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="direction-level-main zone-1" rowspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6014') {
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
                    if ($item['stationID'] == '6026') {
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
                    if ($item['stationID'] == '6031') {
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
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6027') {
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
                    if ($item['stationID'] == '6032') {
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
                    if ($item['stationID'] == '6015') {
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
                    if ($item['stationID'] == '6033') {
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
                    if ($item['stationID'] == '6028') {
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
                    if ($item['stationID'] == '6016') {
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
            <td class="direction-level-main zone-1">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6034') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-1"></td>
            <td class="direction-level-main zone-1" rowspan="2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '5870') {
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
                    if ($item['stationID'] == '6035') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
            <td class="zone-1"></td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="3" valign="top">
                <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6036') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6037') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6038') {
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
            <td class="direction-level-main zone-1" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6046') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6047') {
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
            <td class="direction-level-main zone-2" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6048') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6049') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1"valign="top">
                <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '6051') {
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
            <td class="direction-level-main zone-2" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '8124') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1"valign="top">
                <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" colspan="3">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '8123') {
                        echo $item['stationLink'],' ', $item['desc'];
                        break;
                    }
                }
                ?>
            </td>
        </tr>
    </table>
</div>