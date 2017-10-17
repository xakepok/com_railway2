<?php
defined('_JEXEC') or die;
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('calendar');
?>
<script type="text/javascript">
    Joomla.submitbutton = function(task) {
        if (task == 'ticket.cancel' || document.formvalidator.isValid(document.id('ticket-form'))) {
            Joomla.submitform(task, document.getElementById('ticket-form'));
        }
    }
</script>
<form action="<?php echo JRoute::_('index.php?option=com_railway2&view=ticket&layout=edit&id=' . (int)$this->item->id); ?>"
      method="post" name="adminForm" id="ticket-form" xmlns="http://www.w3.org/1999/html" class="form-validate">
    <div class="row-fluid">
        <div class="span12 form-horizontal">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#general" data-toggle="tab"><?php echo JText::_('COM_RAILWAY2_STATION_DESC_TIME');?></a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    <fieldset class="adminform">
                        <div class="control-group form-inline">
                            <?php foreach ($this->form->getFieldset('names') as $field) :
                                if (($field->name == "jform[time_check]" && empty($field->value)) || $field->name != "jform[time_check]")
                                ?>
                                <div class="control-label"><?php echo $field->label; ?></div>
                                <div class="controls"><?php echo $field->input; ?>
                                    <?php if ($field->name == "jform[time_1]"):?>
                                    <span id="everytime_click" style="cursor: pointer; text-decoration: underline;"><?php echo JText::_('COM_RAILWAY2_DESC_EVERYTIME');?></span>
                                    <?php endif;?>
                                </div>
                                <br>
                            <?php
                            endforeach; ?>
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