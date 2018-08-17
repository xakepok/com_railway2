<?php
defined('_JEXEC') or die;
?>
<table class="rasp-table">
	<thead>
		<tr>
			<th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_NUMBER'); ?></th>
			<th class="rasp-table-th"><?php echo $this->items['from']; ?></th>
			<th class="rasp-table-th"><?php echo $this->items['to']; ?></th>
			<th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_DIFF'); ?></th>
			<th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_ROUTE'); ?></th>
			<th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_RASP_STOPS'); ?></th>
            <!--<th class="rasp-table-th"><?php //echo JText::_('COM_RAILWAY2_COCONS'); ?></th>-->
			<th class="rasp-table-th"><?php echo JText::_('COM_RAILWAY2_PRICE'); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($this->items['schedule'] as $item) :?>
		<tr>
			<td class="rasp-list-item search-link"><?php echo $item['number'];?></td>
			<td class="rasp-list-item search-link">
                <?php
                echo $item['dep'];
                if (!empty($item['platform']['dep'])): ?>
                    <br>
                    <span class="platform"><?php echo $item['platform']['dep'];?></span>
                <?php endif; ?>
            </td>
			<td class="rasp-list-item search-link">
				<?php
				echo $item['arr'];
				if (!empty($item['platform']['arr'])): ?>
                    <br>
                    <span class="platform"><?php echo $item['platform']['arr'];?></span>
				<?php endif; ?>
            </td>
            <td class="rasp-list-item price">
                <?php echo $item['diff']; ?>
            </td>
			<td class="rasp-list-item search-link thread-title"><?php echo $item['link'];?></td>
			<td class="rasp-list-item stops">
                <a class="jutooltip" title="<?php echo $item['stops'];?>"><?php echo JText::_('COM_RAILWAY2_RASP_STOPS'); ?></a>
            </td>
            <!--<td class="rasp-list-item search-link thread-title"><?php //echo $item['cocon'];?></td>-->
			<td class="rasp-list-item price"><?php echo $item['tickets'];?></td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
