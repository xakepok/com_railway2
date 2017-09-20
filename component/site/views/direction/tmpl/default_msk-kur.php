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
            <td class="direction-level-main zone-1">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4742') {
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
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '4740') {
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
                    if ($item->stationID == '4703') {
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
                    if ($item->stationID == '4702') {
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
                    if ($item->stationID == '4701') {
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
                    if ($item->stationID == '4739') {
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
                    if ($item->stationID == '4738') {
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
                    if ($item->stationID == '4737') {
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
                    if ($item->stationID == '4736') {
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
                    if ($item->stationID == '4735') {
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
                    if ($item->stationID == '4734') {
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
                    if ($item->stationID == '4733') {
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
                    if ($item->stationID == '4732') {
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
                    if ($item->stationID == '4730') {
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
            <td class="direction-level-main zone-2">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4729') {
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
                    if ($item->stationID == '4728') {
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
            <td class="zone-1 direction-level-main">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4727') {
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
                    if ($item->stationID == '4726') {
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
                    if ($item->stationID == '4725') {
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
				    if ($item->stationID == '4721') {
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
				    if ($item->stationID == '4720') {
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
				    if ($item->stationID == '4719') {
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
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '4718') {
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
				    if ($item->stationID == '4717') {
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
				    if ($item->stationID == '4716') {
					    echo Railway2HelperCodes::printScheme($item, $this->crosses);
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" valign="top">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '4715') {
					    echo Railway2HelperCodes::printScheme($item, $this->crosses);
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" valign="top">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '4714') {
					    echo Railway2HelperCodes::printScheme($item, $this->crosses);
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" valign="top" rowspan="4">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '4710') {
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
				    if ($item->stationID == '4709') {
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
				    if ($item->stationID == '4708') {
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
				    if ($item->stationID == '4707') {
					    echo Railway2HelperCodes::printScheme($item, $this->crosses);
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" valign="top" rowspan="2">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5378') {
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
				    if ($item->stationID == '5377') {
					    echo Railway2HelperCodes::printScheme($item, $this->crosses);
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" valign="top" rowspan="2">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5376') {
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
				    if ($item->stationID == '5375') {
					    echo Railway2HelperCodes::printScheme($item, $this->crosses);
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" valign="top">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5374') {
					    echo Railway2HelperCodes::printScheme($item, $this->crosses);
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" valign="top" rowspan="2">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5373') {
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
				    if ($item->stationID == '5372') {
					    echo Railway2HelperCodes::printScheme($item, $this->crosses);
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" valign="top" rowspan="2">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5371') {
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
				    if ($item->stationID == '5370') {
					    echo Railway2HelperCodes::printScheme($item, $this->crosses);
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" valign="top" rowspan="2">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5369') {
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
				    if ($item->stationID == '5368') {
					    echo Railway2HelperCodes::printScheme($item, $this->crosses);
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" valign="top" rowspan="2">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5367') {
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
				    if ($item->stationID == '5366') {
					    echo Railway2HelperCodes::printScheme($item, $this->crosses);
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-2" valign="top" rowspan="2">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5365') {
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
				    if ($item->stationID == '5361') {
					    echo Railway2HelperCodes::printScheme($item, $this->crosses);
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" valign="top">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5360') {
					    echo Railway2HelperCodes::printScheme($item, $this->crosses);
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
    </table>
</div>