<?php
// Запрет прямого доступа.
defined('_JEXEC') or die;
foreach ($this->items as $i => $station) : ?>
    <tr class="row0">
        <td class="center">
            <?php echo JHtml::_('grid.id', $i, $station->id); ?>
        </td>
        <td>
            <?php echo $station->id; ?>
        </td>
        <td>
            <?php $link = JRoute::_('index.php?option=com_railway2&view=ticket&layout=edit&stationID='.$station->sid.'&id='.$station->id); ?>
            <a href="<?php echo $link;?>"><?php echo $station->name; ?></a>
        </td>
        <td>
            <?php echo $station->esr; ?>
        </td>
        <td>
            <?php echo $station->express; ?>
        </td>
        <td>
            <?php echo $station->direction; ?>
        </td>
        <td>
            <?php echo ($station->time_1 != null) ? $station->time_1 : JText::_('COM_RAILWAY2_STATION_DESC_NO'); ?>
        </td>
        <td>
            <?php echo ($station->time_2 != null) ? $station->time_2 : JText::_('COM_RAILWAY2_STATION_DESC_NO'); ?>
        </td>
        <td>
            <?php echo $station->region; ?>
        </td>
    </tr>
<?php endforeach; ?>