<?php
// Запрет прямого доступа.
defined('_JEXEC') or die;
foreach ($this->items as $i => $cross) : ?>
    <tr class="row0">
        <td class="center">
            <?php echo JHtml::_('grid.id', $i, $cross->id); ?>
        </td>
        <td>
            <?php echo $cross->id; ?>
        </td>
        <td>
            <?php
            $link = JRoute::_('index.php?option=com_railway2&view=cross&layout=edit&id='.$cross->id.'&stationID='.$cross->stationID);
            ?>
            <a href="<?php echo $link;?>"><?php echo Railway2Helper::getStationName($cross->station, $cross->popularName, $cross->displayBothNames); ?></a>
        </td>
        <td>
            <?php echo $cross->metro; ?>
        </td>
        <td>
            <?php echo $cross->line; ?>
        </td>
    </tr>
<?php endforeach; ?>