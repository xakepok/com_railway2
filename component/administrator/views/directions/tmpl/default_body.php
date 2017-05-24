<?php
// Запрет прямого доступа.
defined('_JEXEC') or die;
foreach ($this->items as $i => $svyaz) : ?>
    <tr class="row0">
        <td class="center">
            <?php echo JHtml::_('grid.id', $i, $svyaz->id); ?>
        </td>
        <td>
            <?php echo $svyaz->id; ?>
        </td>
        <td>
            <?php echo $svyaz->station; ?>
        </td>
        <td>
            <?php echo $svyaz->direction; ?>
        </td>
        <td>
            <?php echo ($svyaz->isControlPoint == '1') ? JText::_('COM_RAILWAY2_YES') : JText::_('COM_RAILWAY2_NO'); ?>
        </td>
        <td>
            <?php echo $svyaz->indexID; ?>
        </td>
        <td>
            <?php echo $svyaz->zoneID; ?>
        </td>
    </tr>
<?php endforeach; ?>