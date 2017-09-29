<?php
defined('_JEXEC') or die;
if (!$this->items) echo JText::_('COM_RAILWAY2_THREAD_NOT_FOUND'); else {
?>
<div>
	<?php echo $this->loadTemplate('info'); ?>
</div>
<div>
    <?php echo $this->loadTemplate('schedule'); ?>
</div>
<div class="carrier"><?php echo $this->items['carrier'];?></div>
<?php }?>