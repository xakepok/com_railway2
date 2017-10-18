<?php
defined('_JEXEC') or die;
?>
<table class="rasp-table">
    <tr>
        <th class="thread"><?php echo JText::_('COM_RAILWAY2_STATION');?></th>
        <th class="thread"><?php echo JText::_('COM_RAILWAY2_ARR');?></th>
        <th class="thread"><?php echo JText::_('COM_RAILWAY2_DEP');?></th>
        <th class="thread"><?php echo JText::_('COM_RAILWAY2_DESC');?></th>
        <?php if (JFactory::getUser()->authorise('core.manage', 'com_railway2')): ?>
            <th class="thread"><?php echo JText::_('COM_RAILWAY2_DISTANCE');?></th>
        <?php endif;?>
    </tr>
    <?php foreach ($this->items['stops'] as $item): ?>
    <tr>
        <td class="rasp-list-item <?php echo $item['class'];?>">
            <?php echo $item['station']; ?>
        </td>
        <td class="rasp-list-item thread-time <?php echo $item['class'];?>">
            <?php if (!empty($item['arr'])) echo $item['arr']; ?>
        </td>
        <td class="rasp-list-item thread-time <?php echo $item['class'];?>">
		    <?php if (!empty($item['dep'])) echo $item['dep']; ?>
        </td>
        <td class="rasp-list-item <?php echo $item['class'];?>">
            <?php echo $item['desc']; ?>
        </td>
	    <?php if (JFactory::getUser()->authorise('core.manage', 'com_railway2')): ?>
            <td class="rasp-list-item <?php echo $item['class'];?>">
			    <?php echo $item['distance'], ' ', JText::_('COM_RAILWAY2_DISTANCE_KM'); ?>
            </td>
	    <?php endif;?>
    </tr>
    <?php endforeach; ?>
</table>
