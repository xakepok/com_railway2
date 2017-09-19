<?php
defined('_JEXEC') or die;
?>
<table class="rasp-table">
    <?php foreach ($this->items['stops'] as $item): ?>
    <tr>
        <td class="rasp-list-item">
            <?php echo $item['station']; ?>
        </td>
        <td class="rasp-list-item">
            <?php if (!empty($item['arr'])) echo $item['arr']; ?>
        </td>
        <td class="rasp-list-item">
		    <?php if (!empty($item['dep'])) echo $item['dep']; ?>
        </td class="rasp-list-item">
        <td class="rasp-list-item">
            <?php echo $item['desc']; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
