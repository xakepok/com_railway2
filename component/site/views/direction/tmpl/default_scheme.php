<?php
defined('_JEXEC') or die;
?>
<span class="station-info-title"><?php echo $this->info->title, ' ', mb_strtolower(JText::_('COM_RAILWAY2_DIRECTION')); ?></span><br>
<table>
    <?php
    $turnstiles = '/media/com_railway2/images/turnstiles_18.png';
    $desc = '/media/com_railway2/images/desc_18.png';
    $levels = array();
    $cnts = array();
    foreach ($this->items as $item) {
        if (!isset($levels[$item->level])) array_push($levels, $item->level);
        if (!isset($cnts[$item->level])) $cnts[$item->level] = 0;
        $levels[$item->level] = $item;
        $cnts[$item->level]++;
    }
    rsort($cnts);
    //$toFor = count($this->items) - ;
    for ($i = 0; $i < count($this->items); $i++) {
        $stationName = (!empty($this->items[$i]->popularName)) ? $this->items[$i]->popularName : $this->items[$i]->name;
        $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id=' . $this->items[$i]->stationID);
        ?>
        <tr>
            <?php
            for ($j = 0; $j < $this->levels; $j++) {
                ?>
                <td>
                    <?php
                    if ($this->items[$i]->level == $j) {
                        ?>
                        <a href="<?php echo $stationLink; ?>" target="_blank"><?php echo $stationName; ?></a>
                        <?php if ($this->items[$i]->turnstiles != NULL) echo "<img src='{$turnstiles}' alt='turnstiles' />";
                        if ($this->items[$i]->desc != NULL && $this->items[$i]->turnstiles == NULL) echo "<img src='{$desc}' alt='desc' />";
                    }
                    ?>
                </td>
                <?php
            }?>
        </tr>
        <?php
    }
    ?>
</table>