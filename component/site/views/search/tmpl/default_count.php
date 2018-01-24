<?php
defined('_JEXEC') or die;
?>
<div>
    <b><?php echo JText::_('COM_RAILWAY2_CNT_TOTAL'); ?>:</b> <?php echo $this->items['cnt']['total'];?>,&nbsp;
    <b><?php echo JText::_('COM_RAILWAY2_CNT_SUBURBAN'); ?>:</b> <?php echo $this->items['cnt']['suburban'];?>&nbsp;
    <b><?php echo JText::_('COM_RAILWAY2_CNT_EXPRESS'); ?>:</b> <?php echo $this->items['cnt']['express'];?>
</div>
