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
            <?php $link = JRoute::_('index.php?option=com_railway2&view=synonym&layout=edit&id='.$station->id); ?>
            <a href="<?php echo $link;?>"><?php echo $station->name; ?></a>
        </td>
        <td>
            <?php echo $station->esr; ?>
        </td>
        <td>
            <?php echo $station->express; ?>
        </td>
        <td>
            <?php echo $station->popularName; ?>
        </td>
        <td>
            <?php echo $station->yandexName; ?>
        </td>
        <td>
            <?php echo $station->rzdName; ?>
        </td>
        <td>
            <?php echo $station->direction; ?>
        </td>
        <td>
            <?php echo $station->region; ?>
        </td>
    </tr>
<?php endforeach; ?>