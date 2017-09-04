<?php
defined('_JEXEC') or die;

abstract class Railway2HtmlFilters
{
    public static function getDirections()
    {
        $options = array();
        $directions = Railway2Helper::getDirections();
        foreach ($directions as $direction) {
            $options[] = JHtml::_('select.option', $direction->id, $direction->title);
        }
        return $options;
    }

    public static function direction($selected)
    {
        $options = array();
        $options[] = JHtml::_('select.option', '', 'COM_RAILWAY2_FILTER_SELECT_DIRECTION');
        $options = array_merge($options, self::getDirections());
        $attribs = 'class="inputbox" onchange="this.form.submit()"';
        return JHtml::_('select.genericlist', $options, 'filter_direction', $attribs, 'value', 'text', $selected, null, true);
    }
}