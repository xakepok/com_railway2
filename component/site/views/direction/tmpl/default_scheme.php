<?php
defined('_JEXEC') or die;
?>
<span class="station-info-title"><?php echo $this->info->title, ' ', mb_strtolower(JText::_('COM_RAILWAY2_DIRECTION')); ?></span><br>
<table>
    <?php
    foreach ($this->items as $item) {
        $stationName = (!empty($item->popularName)) ? $item->popularName : $item->name;
        $stationLink = JRoute::_('index.php?option=com_railway2&view=station&id='.$item->stationID);
        ?>
        <tr>
            <?php for ($i = 0; $i < $this->levels; $i++) {
                ?>
                <td>
                    <?php
                    if ($item->level == $i) {
                        ?>
                        <a href="<?php echo $stationLink; ?>"><?php echo $stationName; ?></a>
                        <?php
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