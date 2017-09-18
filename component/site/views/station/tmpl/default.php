<?php
defined('_JEXEC') or die;
if ($this->error !== false) echo $this->loadTemplate('error'); else {
	$stationName = (!empty($this->info->popularName)) ? $this->info->popularName : $this->info->name;
?>
<p style="background-color: <?php echo $this->info->color; ?> ; color:<?php echo $this->info->font;?>;" class="direction-info-title">
    <?php echo $this->info->tip, ' ', $stationName; ?>
</p>
<p><?php if (count($this->desc) > 0 && $this->desc[0]->turnstiles != null) echo $this->loadTemplate('detour');?></p>
    <?php //echo $this->loadTemplate('thanks');?>
<p><?php if (count($this->rasp) > 0) echo $this->loadTemplate('rasp');?></p>
<?php } ?>