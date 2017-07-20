<?php
defined('_JEXEC') or die;
jimport('joomla.form.formrule');
class JFormRuleDesctime extends JFormRule
{
    protected $regex = '^([0-9]{2}):([0-9]{2}):([0-9]{2})$';
}