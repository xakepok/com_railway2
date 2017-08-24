<?php
defined('_JEXEC') or die;
if ($this->error !== false) {
    echo $this->loadTemplate('error');
} else {
    echo $this->loadTemplate('scheme');
    ?>
    <div class="dir-info">
        <?php if (!empty($this->desc)) echo $this->loadTemplate('desc'); ?>
    </div>
    <br>
    <?php if ($this->wiki !== false): ?>
        <div class="wiki">
            <?php echo $this->loadTemplate('wiki'); ?>
        </div>
    <?php endif; ?>
    <?php
}