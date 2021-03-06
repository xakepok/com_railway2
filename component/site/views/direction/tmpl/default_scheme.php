<?php
defined('_JEXEC') or die;
?>
<div class="direction-info-title">
    <span style="background-color: <?php echo $this->info->color; ?>"><?php echo $this->info->title, ' ', mb_strtolower(JText::_('COM_RAILWAY2_DIRECTION')); ?></span>
</div>
<br>
<div class="center dir-scheme" align="center">
    <table class="direction-table" align="center">
        <?php
        $icon['turnstiles'] = '/media/com_railway2/images/turnstiles_18.png';
        $icon['desc'] = '/media/com_railway2/images/desc_18.png';
        $icon['metro'] = '/media/com_railway2/images/Subway_18px.png';
        $currentZone = array('0' => '0');
        $currentLevel = 0; //Текущий уровень ответвления
        for ($i = 0; $i < $this->cnt+1; $i++) {
	        $rowspan = array('level' => '0', 'row' => 0);
	        $currentRowspan = array('level' => '0', 'i' => 0);
            ?>
            <tr>
                <?php
                $td = 0; //Количество ячеек
                for ($j = 0; $j < $this->levels; $j++) {
                    foreach ($this->items as $item) {
                        if ($item->level == $j && $item->indexID == $i) {
                            $td++;
                            $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
                            $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $item->stationID.'&Itemid=236');
                            /* Рисуем цвет зоны */
                            $zone = '';
                            $zone = ($item->zoneID % 2 == 1) ? '1' : '2';
                            if ($item->zoneID == NULL) $zone = 0;
                            /* Определяем границу ячейки */
                            $class = 'direction-level-main';
                            if ($item->startLevel == '1') $class .= ' direction-level';
                            if ($item->stationID == '5871') {
                                $check = 3;
                            }
                            ?>
                            <td class="<?php echo $class; ?> zone-<?php echo $zone; ?>" <?php if ($check != 0) echo "rowspan='{$check}'"; ?>>
                                <a href="<?php echo $stationLink; ?>" target="_blank"><?php echo $stationName; ?></a>
                                <?php if ($item->turnstiles != NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_TURNSTILES')."'><img src='{$icon['turnstiles']}' alt='turnstiles' /></a>";
                                if ($item->desc != NULL && $item->turnstiles == NULL) echo "<a class='jutooltip' title='".JText::_('COM_RAILWAY2_DESC')."'><img src='{$icon['desc']}' alt='desc' /></a>";
                                if (!empty($this->crosses[$item->stationID])) {
                                    echo "<a class='jutooltip' title='".$this->crosses[$item->stationID]."'><img src='{$icon['metro']}' alt='".JText::_('COM_RAILWAY2_METRO_CROSSES')."' /></a>";
                                }
                                $currentLevel = $item->level;
                                if (!isset($currentZone[$currentLevel])) $currentZone[$currentLevel] = $item->zoneID;
                                if ($currentZone[$currentLevel] != $item->zoneID && $item->zoneID !== NULL) {
                                    echo "<span class='hint-zone'>({$item->zoneID} ".mb_strtolower(JText::_('COM_RAILWAY2_STATION_ZONE')).")</span>";
                                    $currentZone[$currentLevel]++;
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