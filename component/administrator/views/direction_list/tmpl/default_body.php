<?php
// Запрет прямого доступа.
defined('_JEXEC') or die;
foreach ($this->items as $i => $dir) :
	$canChange = JFactory::getUser()->authorise('core.edit.state', 'com_railway2.message.' . $item->id);
    ?>
    <tr class="row0">
        <td class="center">
            <?php echo JHtml::_('grid.id', $i, $dir->id); ?>
        </td>
        <td>
		    <?php echo JHtml::_('jgrid.published', $dir->state, $i, 'direction_list.', $canChange); ?>
        </td>
        <td>
            <?php echo $dir->id; ?>
        </td>
        <td>
            <?php echo $dir->alias; ?>
        </td>
        <td>
            <?php $link = JRoute::_('index.php?option=com_railway2&view=direction_item&layout=edit&id='.$dir->id); ?>
            <a href="<?php echo $link;?>"><?php echo $dir->title; ?></a>
        </td>
        <td>
            <?php echo $dir->color; ?>
        </td>
    </tr>
<?php endforeach; ?>