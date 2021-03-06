<?php
defined('_JEXEC') or die;
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
?>
<script type="text/javascript">
    Joomla.submitbutton = function(task) {
        if (task == 'cross.cancel' || document.formvalidator.isValid(document.id('cross-form'))) {
            Joomla.submitform(task, document.getElementById('cross-form'));
        }
    }
</script>
<form action="<?php echo JRoute::_('index.php?option=com_railway2&view=cross&layout=edit&id=' . (int)$this->item->id); ?>"
      method="post" name="adminForm" id="cross-form" xmlns="http://www.w3.org/1999/html" class="form-validate">
    <div class="row-fluid">
        <div class="span12 form-horizontal">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#general" data-toggle="tab"><?php echo JText::_('COM_RAILWAY2_METRO_CROSSES');?></a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    <fieldset class="adminform">
                        <div class="control-group form-inline">
                            <?php foreach ($this->form->getFieldset('names') as $field) : ?>
                                <div class="control-label"><?php echo $field->label; ?></div>
                                <div class="controls"><?php echo $field->input; ?></div>
                                <br>
                            <?php endforeach; ?>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div>
            <input type="hidden" name="task" value="" />
            <?php echo JHtml::_('form.token'); ?>
        </div>
    </div>
</form>