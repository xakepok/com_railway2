<?php
defined('_JEXEC') or die;
$stationName = (!empty($this->info->popularName)) ? $this->info->popularName : $this->info->name;
?>
<span style="background-color: <?php echo $this->info->color; ?>" class="direction-info-title"><?php echo $this->info->tip, ' ', $stationName; ?></span>