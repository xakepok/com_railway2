<?php
defined('_JEXEC') or die;
$icon['turnstiles'] = '/media/com_railway2/images/turnstiles_18.png';
$icon['desc'] = '/media/com_railway2/images/desc_18.png';
$icon['metro'] = '/media/com_railway2/images/Subway_18px.png';
?>
<div class="direction-info-title">
    <span style="background-color: <?php echo $this->info->color; ?> ; color: <?php echo $this->info->font;?>"><?php echo $this->info->title, ' ', mb_strtolower(JText::_('COM_RAILWAY2_DIRECTION')); ?></span>
</div>
<br>
<div class="center dir-scheme" align="center">
    <table class="direction-table" align="center">
        <tr>
            <td class="zone-1">
                <?php echo "<span class='hint-zone'>0 ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
                <?php
                foreach ($this->items as $item)
                {
                    if ($item->stationID == '4742') {
	                    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
	                    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
	                    echo JHtml::link($stationLink, $stationName).' ';
	                    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
	                    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
	                    if (!empty($this->crosses[$item->stationID])) {
		                    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
	                    }
	                    break;
                    }
                }
                ?>
            </td>
            <td class="zone-1"></td>
        </tr>
        <tr>
            <td class="zone-2">
		        <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '4807') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-2"></td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="4" valign="top">
		        <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '4806') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '4805') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '4804') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '4808') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-1"></td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="5" valign="top">
		        <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main direction-level zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5851') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '5852') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-2" rowspan="3" valign="bottom">
		        <?php
		        foreach ($this->items as $item)
		        {
			        if ($item->stationID == '5858') {
				        $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
				        $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
				        echo JHtml::link($stationLink, $stationName).' ';
				        if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
				        if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
				        if (!empty($this->crosses[$item->stationID])) {
					        echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
				        }
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
				    if ($item->stationID == '5853') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '5854') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '5861') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5859') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '5862') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5860') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '5863') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '5864') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '5865') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-1"></td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="2" valign="top">
		        <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5866') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '5867') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5868') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '5869') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-1"></td>
        </tr>
        <tr>
            <td class="direction-level-main direction-level zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5870') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-1"></td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="3" valign="top">
		        <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2" rowspan="3" valign="center">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5871') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5873') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
			        if ($item->stationID == '5874') {
				        $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
				        $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
				        echo JHtml::link($stationLink, $stationName).' ';
				        if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
				        if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
				        if (!empty($this->crosses[$item->stationID])) {
					        echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
				        }
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
				    if ($item->stationID == '5875') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="5" valign="top">
		        <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1" rowspan="2" valign="middle">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5872') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5877') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '5878') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
        </tr>
        <tr>
            <td class="direction-level-main direction-level zone-1">
		        <?php
		        foreach ($this->items as $item)
		        {
			        if ($item->stationID == '5879') {
				        $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
				        $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
				        echo JHtml::link($stationLink, $stationName).' ';
				        if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
				        if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
				        if (!empty($this->crosses[$item->stationID])) {
					        echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
				        }
				        break;
			        }
		        }
		        ?>
            </td>
            <td class="zone-1"></td>
        </tr>
        <tr>
            <td class="direction-level-main zone-1" valign="middle" rowspan="2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5880') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-1">
		        <?php
		        foreach ($this->items as $item)
		        {
			        if ($item->stationID == '5881') {
				        $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
				        $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
				        echo JHtml::link($stationLink, $stationName).' ';
				        if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
				        if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
				        if (!empty($this->crosses[$item->stationID])) {
					        echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
				        }
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
			        if ($item->stationID == '5882') {
				        $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
				        $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
				        echo JHtml::link($stationLink, $stationName).' ';
				        if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
				        if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
				        if (!empty($this->crosses[$item->stationID])) {
					        echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
				        }
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
			        if ($item->stationID == '5887') {
				        $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
				        $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
				        echo JHtml::link($stationLink, $stationName).' ';
				        if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
				        if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
				        if (!empty($this->crosses[$item->stationID])) {
					        echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
				        }
				        break;
			        }
		        }
		        ?>
            </td>
            <td class="direction-level-main zone-2">
		        <?php
		        foreach ($this->items as $item)
		        {
			        if ($item->stationID == '5883') {
				        $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
				        $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
				        echo JHtml::link($stationLink, $stationName).' ';
				        if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
				        if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
				        if (!empty($this->crosses[$item->stationID])) {
					        echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
				        }
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
				    if ($item->stationID == '5885') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5884') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
			        if ($item->stationID == '5886') {
				        $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
				        $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
				        echo JHtml::link($stationLink, $stationName).' ';
				        if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
				        if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
				        if (!empty($this->crosses[$item->stationID])) {
					        echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
				        }
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
			        if ($item->stationID == '5841') {
				        $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
				        $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
				        echo JHtml::link($stationLink, $stationName).' ';
				        if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
				        if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
				        if (!empty($this->crosses[$item->stationID])) {
					        echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
				        }
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
				    if ($item->stationID == '5842') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '5843') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-1"></td>
        </tr>
        <tr>
            <td class="zone-2">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5888') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5889') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
			        if ($item->stationID == '5890') {
				        $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
				        $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
				        echo JHtml::link($stationLink, $stationName).' ';
				        if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
				        if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
				        if (!empty($this->crosses[$item->stationID])) {
					        echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
				        }
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
				    if ($item->stationID == '5891') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-1"></td>
        </tr>
        <tr>
            <td class="zone-2" rowspan="2" valign="top">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '5892') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '5893') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-2"></td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="2" valign="top">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '6755') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '6756') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-1"></td>
        </tr>
        <tr>
            <td class="zone-2">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '6758') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-2"></td>
        </tr>
        <tr>
            <td class="zone-1">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '6759') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-1"></td>
        </tr>
        <tr>
            <td class="zone-2">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '6761') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-2"></td>
        </tr>
        <tr>
            <td class="zone-1" rowspan="2" valign="top">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '6762') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
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
				    if ($item->stationID == '6763') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-1"></td>
        </tr>
        <tr>
            <td class="zone-2">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-2">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '6764') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-2"></td>
        </tr>
        <tr>
            <td class="zone-1">
			    <?php $item->zoneID++; echo "<span class='hint-zone'>{$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE'))."</span>"; ?>
            </td>
            <td class="direction-level-main zone-1">
			    <?php
			    foreach ($this->items as $item)
			    {
				    if ($item->stationID == '6765') {
					    $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
					    $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
					    echo JHtml::link($stationLink, $stationName).' ';
					    if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
					    if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
					    if (!empty($this->crosses[$item->stationID])) {
						    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
					    }
					    break;
				    }
			    }
			    ?>
            </td>
            <td class="zone-1"></td>
        </tr>
    </table>
</div>