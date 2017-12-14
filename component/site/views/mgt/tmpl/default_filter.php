<?php

echo "<p>", JText::_('COM_RAILWAY2_MGT_ONLINE_FILTER'), ":</p>";
?>
<form action="<?php echo JRoute::_('index.php?option=com_railway2&view=mgt&Itemid=256'); ?>" id="mgt-filter" method="get">
    <table>
        <tr>
            <td>
			    <?php echo JText::_('COM_RAILWAY2_MGT_ONLINE_DATE'); ?>
            </td>
            <td>
                <input type="date" name="date" value="<?php echo Railway2HelperCodes::getDateFromUrl(); ?>" min="2017-12-12" max="<?php echo Railway2HelperCodes::getCurrentDate('Y-m-d');?>" autocomplete="off"/>
            </td>
        </tr>
        <tr>
            <td>
			    <?php echo JText::_('COM_RAILWAY2_MGT_ONLINE_FILTER_PARK'); ?>
            </td>
            <td>
                <select name="park">
                    <option value="" <?php if ($this->park == '') echo ' selected';?>>Все</option>
                    <option value="01" <?php if ($this->park == '01') echo ' selected';?>>1</option>
                    <option value="03" <?php if ($this->park == '03') echo ' selected';?>>3</option>
                    <option value="04" <?php if ($this->park == '04') echo ' selected';?>>4</option>
                    <option value="08" <?php if ($this->park == '08') echo ' selected';?>>8</option>
                    <option value="15" <?php if ($this->park == '15') echo ' selected';?>>15</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
				<?php echo JText::_('COM_RAILWAY2_MGT_ONLINE_FILTER_VEHICLE'); ?>
            </td>
            <td>
                <input type="text" class="mgt-filter-field" name="vehicle" value="<?php echo $this->vehicle; ?>" min="4" max="6" autocomplete="off"/>
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
<p><a href="<?php echo JRoute::_('index.php?option=com_railway2&view=mgt&Itemid=256'); ?>">Сбросить</a></p>