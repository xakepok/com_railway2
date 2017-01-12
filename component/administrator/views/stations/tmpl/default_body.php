<?php
// Запрет прямого доступа.
defined('_JEXEC') or die;
foreach ($this->items as $i => $station) : ?>
    <tr class="row0">
        <td class="center">
            <?php echo JHtml::_('grid.id', $i, $station->id); ?>
        </td>
        <td>
            <?php echo $station->esr; ?>
        </td>
        <td>
            <?php echo $station->express; ?>
        </td>
        <td>
            <?php echo $station->name; ?>
        </td>
        <td>
            <?php echo $station->type; ?>
        </td>
        <td>
            <?php echo $station->region; ?>
        </td>
        <td>
            <?php echo $station->road; ?>
        </td>
        <td>
            <?php echo $station->id; ?>
        </td>
    </tr>
<?php endforeach; ?>