<?php
defined('_JEXEC') or die;
if (Railway2HelperCodes::canDo('core.admin') && $this->info->active != '1') {
    ?>
    <div class="onlyAdmin"><?php echo JText::_('COM_RAILWAY2_ONLY_FOR_ADMIN_DIRECTION');?></div>
    <?php
}
if ($this->error !== false) {
    echo $this->loadTemplate('error');
} else {
    echo $this->loadTemplate($this->info->alias);
    ?>
    <p class="scheme-hint">
        <?php echo "<h5>", JText::_('COM_RAILWAY2_SCHEME_DESC_OBOZN'), ':</h5>';?>
        <img src="/media/com_railway2/images/turnstiles_18.png" alt="<?php echo JText::_('COM_RAILWAY2_SCHEME_DESC_TURNSTILES')?>" /> - <?php echo JText::_('COM_RAILWAY2_SCHEME_DESC_TURNSTILES')?>
        <br>
        <img src="/media/com_railway2/images/24_Hours_18px.png" alt="<?php echo JText::_('COM_RAILWAY2_SCHEME_DESC_EVERYTIME')?>" /> - <?php echo JText::_('COM_RAILWAY2_SCHEME_DESC_EVERYTIME')?>
        <br>
        <img src="/media/com_railway2/images/Receipt_18px.png" alt="<?php echo JText::_('COM_RAILWAY2_SCHEME_DESC_DESC')?>" /> - <?php echo JText::_('COM_RAILWAY2_SCHEME_DESC_DESC')?>
        <br>
        <img src="/media/com_railway2/images/TPD_18px.png" alt="<?php echo JText::_('COM_RAILWAY2_SCHEME_DESC_TPD_DESC')?>" /> - <?php echo JText::_('COM_RAILWAY2_SCHEME_DESC_TPD_DESC')?>
        <br>
        <img src="/media/com_railway2/images/Approval_18px.png" alt="<?php echo JText::_('COM_RAILWAY2_SCHEME_DESC_NO_DESC')?>" /> - <?php echo JText::_('COM_RAILWAY2_SCHEME_DESC_NO_DESC')?>
    </p>
    <?php if ($this->wiki !== false): ?>
        <div class="wiki">
            <?php echo $this->loadTemplate('wiki'); ?>
        </div>
    <?php endif; ?>
    <?php
    //var_dump($this->crosses);
}