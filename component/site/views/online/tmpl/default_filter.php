<?php
defined('_JEXEC') or die;
$action = JRoute::_('index.php?option=com_railway2&view=online');
?>
<form action="<?php echo $action;?>" name="adminForm" id="adminForm" method="post">
	<?php echo Railway2HtmlFilters::direction($this->state->get('filter.direction'));?>
    <?php echo Railway2HtmlFilters::parity($this->state->get('filter.parity'));?>
	<?php echo JHtml::_('form.token');?>
</form>
