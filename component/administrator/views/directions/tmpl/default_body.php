<?php
// Запрет прямого доступа.
defined('_JEXEC') or die;
foreach ($this->items as $i => $direction) : ?>
    <tr class="row0">
        <td class="center">
            <?php echo JHtml::_('grid.id', $i, $direction->id); ?>
        </td>
        <td>
            <?php echo $direction->name; ?>
        </td>
        <td>
            <?php echo $direction->id; ?>
        </td>
    </tr>
<?php endforeach; ?>