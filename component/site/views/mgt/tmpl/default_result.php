<?php
echo "<p>", JText::_('COM_RAILWAY2_MGT'), ":</p>";
?>

<table>
    <thead>
    <tr>
        <th><?php echo JText::_('COM_RAILWAY2_MGT_ONLINE_VEHICLE'); ?></th>
        <th><?php echo JText::_('COM_RAILWAY2_MGT_ONLINE_ROUTE'); ?></th>
        <?php if (!empty($this->route) && !empty($this->items[0]['dat'])) :?>
            <th><?php echo JText::_('COM_RAILWAY2_MGT_ONLINE_TIME'); ?></th>
        <?php endif; ?>
    </tr>
    </thead>
    <tbody>
	<?php foreach ($this->items as $item) : ?>
        <tr>
            <td><?php echo $item['vehicle']; ?></td>
            <td><?php echo $item['route']; ?></td>
	        <?php if (!empty($this->route) && !empty($item['dat'])) :?>
                <td><?php echo $item['dat']; ?></td>
	        <?php endif; ?>
        </tr>
	<?php endforeach; ?>
    </tbody>
</table>