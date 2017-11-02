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
		    <?php echo $item->stationID; ?>
        </td>
        <td>
            <?php $link = JRoute::_('index.php?option=com_railway2&view=code&layout=edit&id='.$item->id.'&stationID='.$item->stationID);
            echo JHtml::link($link, $item->stationName);
            ?>
        </td>
        <td>
            <?php echo $item->esr; ?>
        </td>
        <td>
            <?php echo $item->express; ?>
        </td>
        <td>
            <?php echo $item->yandex; ?>
        </td>
    </tr>
<?php endforeach; ?>