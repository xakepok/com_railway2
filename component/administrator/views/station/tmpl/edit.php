<?php
defined('_JEXEC') or die;
JHtml::_('behavior.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_railway2&layout=edit&id=' . (int)$this->item->id); ?>"
      method="post" name="adminForm" id="railway2-form" xmlns="http://www.w3.org/1999/html">
    <fieldset>
        <legend><?php echo JText::_('COM_RAILWAY2_STATION'); ?></legend>
            <?php foreach ($this->form->getFieldset() as $field) : ?>
                <?php echo $field->label; echo $field->input; ?><br>
            <?php endforeach; ?>
    </fieldset>
    <div>
        <input type="hidden" name="task" value="" />
        <?php echo JHtml::_('form.token'); ?>
    </div>
</form>