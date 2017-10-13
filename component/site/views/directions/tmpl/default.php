<?php
defined('_JEXEC') or die;
?>
<div>
	<?php echo JText::_('COM_RAILWAY2_DIRECTIONS'); ?>:
    <br>
    <ul>
		<?php foreach ($this->items as $item)
		{
            echo "<li>$item</li>";
		}
		?>
    </ul>
</div>
