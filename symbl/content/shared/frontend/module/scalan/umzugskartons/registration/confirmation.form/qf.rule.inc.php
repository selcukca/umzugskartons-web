<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->registerRule('check_confirmation', 'callback', 'qf_check_confirmation');


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->addRule('email',     $I18N['element.error.req'],      'required');
$oF->addRule('email',     $I18N->fe_format,   'email');

$oF->addRule('hash',      $I18N['element.error.req'],      'required');


$oF->addRule(array('email', 'hash'),      $I18N->fe_combination,        'check_confirmation', array($oTable));


