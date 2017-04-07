<?php
defined('_JEXEC') or die;
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
//$params = $this->form->getFieldsets('params');
?>
<script type="text/javascript">
    Joomla.submitbutton = function(task) {
        if (task == 'station.cancel' || document.formvalidator.isValid(document.id('station-form'))) {
            Joomla.submitform(task, document.getElementById('station-form'));
        }
    }
</script>
<form action="<?php echo JRoute::_('index.php?option=com_railway2&view=station&layout=edit&id=' . (int)$this->item->id); ?>"
      method="post" name="adminForm" id="station-form" xmlns="http://www.w3.org/1999/html" class="form-validate">
    <div class="row-fluid">
        <div class="span12 form-horizontal">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#general" data-toggle="tab"><?php echo JText::_('COM_RAILWAY2_STATION_NAMES');?></a></li>
                <li><a href="#params-codes" data-toggle="tab"><?php echo JText::_('COM_RAILWAY2_STATION_CODES');?></a></li>
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
                <div class="tab-pane" id="params-codes">
                    <fieldset class="adminform">
                        <div class="control-group form-inline">
                            <?php foreach ($this->form->getFieldset('codes') as $field) : ?>
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