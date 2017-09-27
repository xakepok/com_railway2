<?php
defined('_JEXEC') or die;
?>
<span class="station-info-title"><?php echo JText::_('COM_RAILWAY2_DETOUR'); ?></span><br>
<?php
echo $this->info['detour'];
?>
<p class="updated">
    <?php echo $this->info['updated'];?>
</p>