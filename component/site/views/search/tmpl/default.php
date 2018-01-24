<?php
defined('_JEXEC') or die;
use Joomla\CMS\HTML\HTMLHelper;
HTMLHelper::_('script', 'com_railway2/script.js', array('version' => 'auto', 'relative' => true));
HTMLHelper::_('stylesheet', 'com_railway2/style.css', array('version' => 'auto', 'relative' => true));
?>
<div>
    <div><?php echo $this->loadTemplate('info');?></div>
	<div><?php echo $this->loadTemplate('count');?></div>
    <br>
	<div><?php echo $this->loadTemplate('rasp');?></div>
</div>
