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
            <?php echo $station->sid; ?>
        </td>
        <td>
            <?php $link = "http://elektrichking.ru/railway2/station/{$station->sid}/?from=wiki"; ?>
            <a href="<?php echo $link;?>" target="_blank"><?php echo JText::_('COM_RAILWAY2_STATION_LINK_FOR_MANUAL');?></a>
        </td>
        <td>
            <?php $link = JRoute::_('index.php?option=com_railway2&view=ticket&layout=edit&stationID='.$station->sid.'&id='.$station->id);
            echo JHtml::link($link, $station->stationName);
            ?>
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
            <?php
            $text = "";
            if ($station->turnstiles != null) {
                $text = JText::_('COM_RAILWAY2_STATION_TURNSTILE');
            } else {
                $text_1 = date("H.i", strtotime(date("Y-m-d").$station->time_1));
                $text_2 = date("H.i", strtotime(date("Y-m-d").$station->time_2));
                $text = $text_1.' - '.$text_2;
            }
            if ($station->time_1 == null && $station->time_2 == null && $station->turnstiles == null) {
                $text = JText::_('COM_RAILWAY2_STATION_DESC_NO');
            }
            if ($station->time_1 == '00:00:00' && $station->time_2 == '23:59:59') $text = JText::_('COM_RAILWAY2_DESC_EVERYTIME');
            if ($station->tpd == '1') $text = JText::_('COM_RAILWAY2_TPD');
            ?>
            <?php echo $text; ?>
        </td>
        <td>
            <?php echo JText::_('COM_RAILWAY2_TIMEMASK_'.$station->timemask);?>
        </td>
        <td>
            <?php echo $station->region; ?>
        </td>
        <td>
            <?php
            $act = JText::_('COM_RAILWAY2_CHECKED');
            $class = 'check-ok';
            if (!empty($station->time_check)) {
                if (date("Y-m-d") < $station->time_check) {
	                $dat = date("d.m.Y", strtotime($station->time_check.' 00:00:00'));
	                $act = JText::_('COM_RAILWAY2_ACTUAL_BEFORE').' '.$dat;
	                $class = 'check-yellow';
                } else {
                    $act = JText::_('COM_RAILWAY2_NEED_CHECK');
                    $class = 'check-need';
                }
            }
            echo "<span class='{$class}'>{$act}</span>";
            ?>
        </td>
    </tr>
<?php endforeach; ?>