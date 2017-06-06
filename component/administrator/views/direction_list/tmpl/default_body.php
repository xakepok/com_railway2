<?php
// Запрет прямого доступа.
defined('_JEXEC') or die;
foreach ($this->items as $i => $dir) : ?>
    <tr class="row0">
        <td class="center">
            <?php echo JHtml::_('grid.id', $i, $dir->id); ?>
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