<?php
defined('_JEXEC') or die;
?>
<span class="station-info-title"><?php echo JText::_('COM_RAILWAY2_DETOUR'); ?></span><br>
<?php
echo $this->desc[0]->detour;
?>
<p class="updated">
    <?php echo JText::_('COM_RAILWAY2_UPDATED'), ' ', date("d.m.Y", strtotime($this->desc[0]->mod_date));?>
</p>
