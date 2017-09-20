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
    echo ($this->info->id == '2' || $this->info->id == '1' || $this->info->id == '6') ? $this->loadTemplate($this->info->alias) : $this->loadTemplate('scheme');
    ?>
    <?php if ($this->wiki !== false): ?>
        <div class="wiki">
            <?php echo $this->loadTemplate('wiki'); ?>
        </div>
    <?php endif; ?>
    <?php
    //var_dump($this->crosses);
}