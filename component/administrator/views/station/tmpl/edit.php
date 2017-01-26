<?php
defined('_JEXEC') or die;
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<form action="<?php echo JRoute::_('index.php?option=com_railway2&view=station&layout=edit&id=' . (int)$this->item->id); ?>"
      method="post" name="adminForm" id="station-form" xmlns="http://www.w3.org/1999/html" class="form-validate">
    <fieldset>
        <legend><?php echo JText::_('COM_RAILWAY2_STATION_CODES'); ?></legend>
            <?php foreach ($this->form->getFieldset('codes') as $field) : ?>
                <p><?php echo $field->label; echo $field->input; ?></p>
            <?php endforeach; ?>
    </fieldset>
    <fieldset>
        <legend><?php echo JText::_('COM_RAILWAY2_STATION_NAMES'); ?></legend>
        <?php foreach ($this->form->getFieldset('names') as $field) : ?>
            <?php echo $field->label; echo $field->input; ?><br>
        <?php endforeach; ?>
    </fieldset>
    <div>
        <input type="hidden" name="task" value="" />
        <?php echo JHtml::_('form.token'); ?>
    </div>
</form>