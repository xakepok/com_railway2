<?php
defined('_JEXEC') or die;
?>
<table>
	<thead>
	<tr>
		<th><?php echo JText::_('COM_RAILWAY2_DIRECTION'); ?></th>
		<th><?php echo JText::_('COM_RAILWAY2_RASP_NUMBER'); ?></th>
		<th><?php echo JText::_('COM_RAILWAY2_RASP_ROUTE'); ?></th>
		<th><?php echo JText::_('COM_RAILWAY2_ONLINE'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($this->items as $item): ?>
		<tr>
			<td class="thread-link"><?php echo $item['direction'];?></td>
			<td class="thread-link"><?php echo $item['num'];?></td>
			<td><?php echo $item['route'];?></td>
			<td class="thread-link"><?php echo $item['online'];?></td>
		</tr>
	<?php endforeach;?>
	</tbody>
</table>
