<div>
    <label for="filter_search"><?php echo JText::_('JSEARCH_FILTER_LABEL'); ?></label>
    <input type="text" autocomplete="off" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" title="<?php echo JText::_('COM_RAILWAY2_SEARCH_STATION'); ?>" />
    <button type="submit"><?php echo JText::_('JSEARCH_FILTER_SUBMIT'); ?></button>
    <button type="button" onclick="document.id('filter_search').value='';this.form.submit();"><?php echo JText::_('JSEARCH_FILTER_CLEAR'); ?></button>
    <?php echo Railway2HtmlFilters::direction($this->state->get('filter.direction')); ?>
</div>
