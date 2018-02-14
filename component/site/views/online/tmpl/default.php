<?php
defined('_JEXEC') or die;
?>
<div class="station-info-title">
    <?php echo JText::_('COM_RAILWAY2_ONLINE_TITLE'); ?>
</div>
<br>
<div>
	<?php echo $this->loadTemplate('filter');?>
</div>
<br>
<div>
	<?php echo $this->loadTemplate('result');?>
</div>
<div class="clear" style="text-align: center"><?php echo $this->pagination->getListFooter(); ?></div>