<?php
defined('_JEXEC') or die;

abstract class Railway2HtmlFilters
{
    private function getDirections()
    {
        $options = array();
        $directions = Railway2Helper::getDirections();
        foreach ($directions as $direction) {
            $options[] = JHtml::_('select.option', $direction->id, $direction->title);
        }
        return $options;
    }

    private function getActuality()
    {
    	$options = array();
	    $options[] = JHtml::_('select.option', '1', JText::_('COM_RAILWAY2_ACTUAL_BEFORE'));
	    $options[] = JHtml::_('select.option', '2', JText::_('COM_RAILWAY2_NEED_CHECK'));
	    return $options;
    }

    /* Фильтр по направлениям */
    public static function direction($selected)
    {
        $options = array();
        $options[] = JHtml::_('select.option', '', 'COM_RAILWAY2_FILTER_SELECT_DIRECTION');
        $options = array_merge($options, self::getDirections());
        $attribs = 'class="inputbox" onchange="this.form.submit()"';
        return JHtml::_('select.genericlist', $options, 'filter_direction', $attribs, 'value', 'text', $selected, null, true);
    }

    /* Фильтр по акутальности */
    public static function actuality($selected) {
	    $options = array();
	    $options[] = JHtml::_('select.option', '', 'COM_RAILWAY2_FILTER_SELECT_ACTUALITY');
	    $options = array_merge($options, self::getActuality());
	    $attribs = 'class="inputbox" onchange="this.form.submit()"';
	    return JHtml::_('select.genericlist', $options, 'filter_actuality', $attribs, 'value', 'text', $selected, null, true);
    }
}