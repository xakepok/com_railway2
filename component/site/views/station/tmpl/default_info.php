<?php
defined('_JEXEC') or die;
$stationName = (!empty($this->info->popularName)) ? $this->info->popularName : $this->info->name;
?>
<span style="background-color: <?php echo $this->info->color; ?>" class="station-title"><?php echo $this->info->tip, ' ', $stationName; ?></span><br>
<table>
    <?php if (!empty($this->info->direction)) : ?>
    <tr>
        <td>
            <?php echo JText::_('COM_RAILWAY2_DIRECTION'); ?>
        </td>
        <td>
            <!--<a href="<?php echo JRoute::_('index.php?option=com_railway2&view=direction&id='.$this->info->directionID); ?>"><?php echo $this->info->direction; ?></a>-->
            <?php echo $this->info->direction; ?>
        </td>
    </tr>
    <?php endif; ?>
    <tr>
        <td>
            <?php echo JText::_('COM_RAILWAY2_RAILWAY'); ?>
        </td>
        <td>
            <?php echo $this->info->road; ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo JText::_('COM_RAILWAY2_RAILWAY_PART'); ?>
        </td>
        <td>
            <?php echo $this->info->division; ?>
        </td>
    </tr>
    <?php if ($this->info->zoneID != null) : ?>
    <tr>
        <td>
            <?php echo JText::_('COM_RAILWAY2_STATION_ZONE'); ?>
        </td>
        <td>
            <?php echo $this->info->zoneID; ?>
        </td>
    </tr>
    <?php endif; ?>
    <tr>
        <td>
            <?php echo JText::_('COM_RAILWAY2_STATION_CODE_ESR'); ?>
        </td>
        <td>
            <?php echo Railway2HelperCodes::getValidEsr($this->info->esr); ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo JText::_('COM_RAILWAY2_STATION_CODE_EXPRESS'); ?>
        </td>
        <td>
            <?php echo $this->info->express; ?>
        </td>
    </tr>
    <?php
    if ($this->desc[0]->turnstiles == null) {
        $turnstiles = JText::_('COM_RAILWAY2_TURN_NO_EXISTS');
    }
    if ($this->desc[0]->turnstiles != null) {
        $turnstiles = $this->desc[0]->variant;
    }
    if (empty($this->desc[0])) $turnstiles = JText::_('COM_RAILWAY2_NOINFO');
    ?>
    <tr>
        <td>
            <?php echo JText::_('COM_RAILWAY2_TURNSTILES'); ?>
        </td>
        <td>
            <?php echo $turnstiles; ?>
        </td>
    </tr>
</table>
