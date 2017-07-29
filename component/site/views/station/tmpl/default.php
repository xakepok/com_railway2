<?php
defined('_JEXEC') or die; ?>
<br>
<p><?php echo $this->loadTemplate('info');?></p>
<br>
<p><?php if (count($this->desc) > 0) echo $this->loadTemplate('desc');?></p>
<p><?php if (count($this->desc) > 0 && $this->desc[0]->turnstiles != null) echo $this->loadTemplate('detour');?></p>