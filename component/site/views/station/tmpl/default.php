<?php
defined('_JEXEC') or die;
if ($this->error !== false) echo $this->loadTemplate('error'); else {
?>
<br>
<p><?php echo $this->loadTemplate('info');?></p>
<br>
<p><?php if (count($this->desc) > 0 && $this->desc !== false) echo $this->loadTemplate('desc');?></p>
<p><?php if ($this->crosses !== false) echo $this->loadTemplate('crosses');?></p>
<!--<p><?php //if (count($this->desc) > 0 && $this->desc[0]->turnstiles != null) echo $this->loadTemplate('detour');?></p>-->
<p><?php if (count($this->rasp) > 0) echo $this->loadTemplate('rasp');?></p>
<?php } ?>