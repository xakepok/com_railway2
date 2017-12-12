<?php
echo "<p>", JText::_('COM_RAILWAY2_MGT'), ":</p>";
?>

<table>
    <thead>
    <tr>
        <th><?php echo JText::_('COM_RAILWAY2_MGT_ONLINE_VEHICLE'); ?></th>
        <th><?php echo JText::_('COM_RAILWAY2_MGT_ONLINE_ROUTE'); ?></th>
    </tr>
    </thead>
    <tbody>
	<?php foreach ($this->items as $item) : ?>
        <tr>
            <td><?php echo $item['vehicle']; ?></td>
            <td><?php echo $item['route']; ?></td>
        </tr>
	<?php endforeach; ?>
    </tbody>
</table>