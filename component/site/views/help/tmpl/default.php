<?php

echo "<p>", JText::_('COM_RAILWAY2_HELP_NEED_INFO_DESC'), ":</p>";

foreach ($this->items as $dir => $item) {
    ?>
    <p style="font-weight: bold;"><?php echo $dir;?>
    <ul>
        <?php foreach ($item as $station) {
            echo "<li>{$station}</li>";
        }?>
    </ul>
    </p>
<?php
}
?>
