<?php
defined('_JEXEC') or die;
?>
<div><h3><?php echo JText::_('COM_RAILWAY2_DIRECTION_INFO');?></h3></div>
<p>
    <h4><?php echo JText::_('COM_RAILWAY2_INSPECTIONS');?></h4><br>
    <?php echo $this->wiki->inspection;?>
</p>
<p>
<h4><?php echo JText::_('COM_RAILWAY2_INSPECTIONS_INFO_DESC');?></h4><br>
    <?php echo $this->wiki->info;?>
</p>