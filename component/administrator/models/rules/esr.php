<?php
defined('_JEXEC') or die;
jimport('joomla.form.formrule');
class JFormRuleEsr extends JFormRule
{
    protected $regex = '^[0-9]{5}$';
}