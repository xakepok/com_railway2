<?php
defined('_JEXEC') or die;
$tmp = array();
foreach ($this->desc as $item) {
	if ($item->show_thanks != '0') $tmp[] = $item->user;
}
$tmp = array_unique($tmp);
$thanks = implode(',', $tmp);
if (!empty($thanks)) {
    ?>
    <p>
    <span class="station-info-title"><?php echo JText::_('COM_RAILWAY2_THANKS'); ?></span><br>
	<?php
	echo JText::_('COM_RAILWAY2_INFO_BY'), ' ',$thanks, '.';
    ?></p><?php
}
?>
