<?php
defined('_JEXEC') or die;
if ($this->error !== false) echo $this->loadTemplate('error'); else {
?>
<p style="<?php echo $this->info['style'];?>" class="direction-info-title"><?php echo $this->info['fullName']; ?></p>
<p><?php if (isset($this->info['detour']) && !empty($this->info['detour'])) echo $this->loadTemplate('detour');?></p>
<p><?php if (count($this->rasp) > 0) echo $this->loadTemplate('rasp');?></p>
<?php } ?>