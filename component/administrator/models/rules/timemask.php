<?php
defined('_JEXEC') or die;
jimport('joomla.form.formrule');
class JFormRuleTimemask extends JFormRule
{
    protected $regex = '^([0-1]{7})$';
}