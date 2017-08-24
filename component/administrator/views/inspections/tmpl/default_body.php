<?php
// Запрет прямого доступа.
defined('_JEXEC') or die;
foreach ($this->items as $i => $item) : ?>
    <tr class="row0">
        <td class="center">
            <?php echo JHtml::_('grid.id', $i, $item->id); ?>
        </td>
        <td>
            <?php echo $item->id; ?>
        </td>
        <td>
            <?php $link = JRoute::_('index.php?option=com_railway2&view=inspection&layout=edit&id='.$item->id); ?>
            <a href="<?php echo $link;?>"><?php echo $item->direction; ?></a>
        </td>
        <td>
            <?php echo (!$item->cocon) ? JText::_('COM_RAILWAY2_NO') : JText::_('COM_RAILWAY2_YES'); ?>
        </td>
    </tr>
<?php endforeach; ?>