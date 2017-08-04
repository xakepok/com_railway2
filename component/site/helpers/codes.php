<?php
defined('_JEXEC') or die;
class Railway2HelperCodes {

    /* Получаем валидный код ЕСР */
    static function getValidEsr($esr) {
        return (strlen($esr) == 5) ? '0'.$esr : $esr;
    }
}