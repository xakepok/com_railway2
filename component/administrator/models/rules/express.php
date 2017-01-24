<?php
defined('_JEXEC') or die;
jimport('joomla.form.formrule');
class JFormRuleExpress extends JFormRule
{
    protected $regex = '^[0-9]{7}$';
}