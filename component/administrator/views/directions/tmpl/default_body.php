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
		    <?php echo $svyaz->stationID; ?>
        </td>
        <td>
            <?php $link = JRoute::_('index.php?option=com_railway2&view=direction&layout=edit&id='.$svyaz->id.'&stationID='.$svyaz->stationID); ?>
            <!--<a href="<?php //echo $link;?>"><?php //echo Railway2Helper::getStationName($svyaz->station, $svyaz->popularName, $svyaz->displayBothNames); ?></a>-->
            <?php echo JHtml::link($link, $svyaz->stationName);?>
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
        <td>
            <?php echo ($svyaz->distance != null) ? $svyaz->distance.' '.JText::_('COM_RAILWAY2_KM') : JText::_('COM_RAILWAY2_UNKNOWN'); ?>
        </td>
    </tr>
<?php endforeach; ?>