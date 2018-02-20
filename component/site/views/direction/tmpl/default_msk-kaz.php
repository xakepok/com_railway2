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
            <td class="zone-1"></td>
            <td class="direction-level-main zone-1" colspan="5">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item['stationID'] == '4828') {
                        echo $item['stationLink'],' ', $item['desc'];
	                    break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" valign="top" rowspan="2">
		        <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="zone-2" rowspan="2"></td>
            <td class="direction-level-main zone-2" colspan="5">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4829') {
                        echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="5">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4830') {
                        echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" valign="top" rowspan="6">
		        <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="zone-1" rowspan="6"></td>
            <td class="direction-level-main zone-1" colspan="5">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4824') {
                        echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="5">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4825') {
                        echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="5">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4814') {
                        echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="5">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4816') {
                        echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="5">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4817') {
                        echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="5">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4818') {
                        echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" valign="top" rowspan="4">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="zone-2" rowspan="4"></td>
            <td class="direction-level-main zone-2" colspan="5">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4819') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2 direction-level" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4833') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-2"></td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4834') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-2" rowspan="2">
		        <?php
		        foreach ($this->items as $item)
		        {
			        if ($item['stationID'] == '4843') {
				        echo $item['stationLink'],' ', $item['desc'];
				        break;
			        }
		        }
		        ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4835') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" valign="top" rowspan="5">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="zone-1" rowspan="5"></td>
            <td class="direction-level-main zone-1" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4836') {
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
				    if ($item['stationID'] == '4844') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4837') {
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
				    if ($item['stationID'] == '4850') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4838') {
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
				    if ($item['stationID'] == '4851') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4867') {
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
				    if ($item['stationID'] == '4852') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4868') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" valign="top" rowspan="5">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="zone-2" rowspan="5"></td>
            <td class="direction-level-main zone-2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4869') {
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
				    if ($item['stationID'] == '4853') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4870') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-2" rowspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4854') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4871') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4872') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-2" rowspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4855') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4873') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" valign="top" rowspan="4">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="zone-1" rowspan="4"></td>
            <td class="direction-level-main zone-1" rowspan="2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4874') {
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
				    if ($item['stationID'] == '4856') {
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
				    if ($item['stationID'] == '4857') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4875') {
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
				    if ($item['stationID'] == '4858') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4876') {
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
				    if ($item['stationID'] == '4866') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" valign="top" rowspan="4">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="zone-2" rowspan="4"></td>
            <td class="direction-level-main zone-2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4877') {
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
				    if ($item['stationID'] == '4859') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4880') {
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
				    if ($item['stationID'] == '4860') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4878') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-2" rowspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4861') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4879') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" valign="top" rowspan="3">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="zone-1" rowspan="3"></td>
            <td class="direction-level-main zone-1" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4881') {
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
				    if ($item['stationID'] == '4862') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4882') {
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
				    if ($item['stationID'] == '4863') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4883') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" valign="top" rowspan="2">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="zone-2" rowspan="2"></td>
            <td class="direction-level-main zone-2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4884') {
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
				    if ($item['stationID'] == '4864') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-2" colspan="4">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4886') {
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
				    if ($item['stationID'] == '4865') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" valign="top" rowspan="6">
			    <?php $zone++; echo "<span class='hint-zone'>{$zone} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="zone-1" rowspan="6"></td>
            <td class="direction-level-main direction-level zone-1" colspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '4885') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-1"></td>
            <td class="zone-1"></td>
            <td class="direction-level-main zone-1"></td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1"></td>
            <td class="zone-1"></td>
            <td class="zone-1 direction-level-main" colspan="2">
	            <?php
	            foreach ($this->items as $item)
	            {
		            if ($item['stationID'] == '5938') {
			            echo $item['stationLink'],' ', $item['desc'];
			            break;
		            }
	            }
	            ?>
            </td>
            <td class="direction-level-main zone-1"></td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1"></td>
            <td class="zone-1"></td>
            <td class="zone-1 direction-level-main" colspan="2">
	            <?php
	            foreach ($this->items as $item)
	            {
		            if ($item['stationID'] == '5937') {
			            echo $item['stationLink'],' ', $item['desc'];
			            break;
		            }
	            }
	            ?>
            </td>
            <td class="direction-level-main zone-1"></td>
        </tr>
        <tr>
            <td class="direction-level-main direction-level zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item['stationID'] == '5943') {
					    echo $item['stationLink'],' ', $item['desc'];
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-1"></td>
            <td class="zone-1 direction-level-main"></td>
            <td class="direction-level zone-1"></td>
            <td class="direction-level-main zone-1">
		        <?php
		        foreach ($this->items as $item)
		        {
			        if ($item['stationID'] == '5904') {
				        echo $item['stationLink'],' ', $item['desc'];
				        break;
			        }
		        }
		        ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1"></td>
            <td class="zone-1 direction-level-main"></td>
            <td class="zone-1 direction-level-main"></td>
            <td class="direction-level-main zone-1">
	            <?php
	            foreach ($this->items as $item)
	            {
		            if ($item['stationID'] == '5906') {
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
			        if ($item['stationID'] == '5907') {
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
		            if ($item['stationID'] == '5944') {
			            echo $item['stationLink'],' ', $item['desc'];
			            break;
		            }
	            }
	            ?>
            </td>
            <td class="zone-1 direction-level-main"></td>
            <td class="zone-1 direction-level-main"></td>
            <td class="direction-level-main zone-1"></td>
            <td class="direction-level-main zone-1">
		        <?php
		        foreach ($this->items as $item)
		        {
			        if ($item['stationID'] == '5905') {
				        echo $item['stationLink'],' ', $item['desc'];
				        break;
			        }
		        }
		        ?>
            </td>
        </tr>
    </table>
</div>