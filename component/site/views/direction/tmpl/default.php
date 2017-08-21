<?php
defined('_JEXEC') or die;
if ($this->error !== false) {
    echo $this->loadTemplate('error');
} else {
    echo $this->loadTemplate('scheme');
}