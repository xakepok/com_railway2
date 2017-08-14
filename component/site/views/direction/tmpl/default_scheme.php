<?php
defined('_JEXEC') or die;
?>
<div class="direction-info-title">
    <span style="background-color: <?php echo $this->info->color; ?>"><?php echo $this->info->title, ' ', mb_strtolower(JText::_('COM_RAILWAY2_DIRECTION')); ?></span>
</div>
<br>
<div class="center" align="center">
    <table class="direction-table">
        <?php
        $icon['turnstiles'] = '/media/com_railway2/images/turnstiles_18.png';
        $icon['desc'] = '/media/com_railway2/images/desc_18.png';
        $currentZone = 0; //Текущая зона
        for ($i = 0; $i < $this->cnt+1; $i++) {
            ?>
            <tr>
                <?php
                $td = 0; //Количество ячеек
                for ($j = 0; $j < $this->levels; $j++) {
                    foreach ($this->items as $item) {
                        if ($item->level == $j && $item->indexID == $i) {
                            $td++;
                            $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
                            $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID);
                            /* Рисуем цвет зоны */
                            $zone = '';
                            $zone = ($item->zoneID % 2 == 1) ? '1' : '2';
                            if ($item->zoneID == NULL) $zone = 0;
                            /* Определяем границу ячейки */
                            $class = 'direction-level-main';
                            if ($item->startLevel == '1') $class .= ' direction-level';
                            ?>
                            <td class="<?php echo $class; ?> zone-<?php echo $zone; ?>">
                                <a href="<?php echo $stationLink; ?>" target="_blank"><?php echo $stationName; ?></a>
                                <?php if ($item->turnstiles != NULL) echo "<img src='{$icon['turnstiles']}' alt='turnstiles' />";
                                if ($item->desc != NULL && $item->turnstiles == NULL) echo "<img src='{$icon['desc']}' alt='desc' />";
                                if (($currentZone != $item->zoneID && $item->zoneID !== NULL) || $item->zoneID === 0) {
                                    echo "<span class='hint-zone'>({$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE')).")</span>";
                                    $currentZone++;
                                }
                                ?>
                            </td>
                            <?php
                            break;
                        }
                    }
                }
                /* Рисуем недостающие ячейки */
                while($td < $this->levels) {
                    echo "<td></td>";
                    $td++;
                }
                ?>
            </tr>
            <?php
        }
        ?>
    </table>
</div>