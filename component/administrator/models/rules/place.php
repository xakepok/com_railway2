<?php
/*
 * Правило проверки координат станции
 */
defined('_JEXEC') or die;
jimport('joomla.form.formrule');

class JFormRulePlace extends JFormRule
{
    protected $regex = '^[\d]{2}\.[\d]+$';
}