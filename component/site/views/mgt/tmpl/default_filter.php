<?php

echo "<p>", JText::_('COM_RAILWAY2_MGT_ONLINE_FILTER'), ":</p>";
?>
<form action="<?php echo JRoute::_('index.php?option=com_railway2&view=mgt&Itemid=256'); ?>" id="mgt-filter" method="get">
    <table>
        <tr>
            <td>
				<?php echo JText::_('COM_RAILWAY2_MGT_ONLINE_FILTER_VEHICLE'); ?>
            </td>
            <td>
                <input type="text" class="mgt-filter-field" name="vehicle" value="<?php echo $this->vehicle; ?>" min="4", max="6" autocomplete="off"/>
            </td>
        </tr>
        <tr>
            <td>
				<?php echo JText::_('COM_RAILWAY2_MGT_ONLINE_FILTER_ROUTE'); ?>
            </td>
            <td>
                <input type="text" class="mgt-filter-field" name="route" value="<?php echo $this->route; ?>" autocomplete="off"/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="<?php echo JText::_('COM_RAILWAY2_MGT_ONLINE_FILTER_APPLY'); ?>">
            </td>
        </tr>
    </table>
</form>
