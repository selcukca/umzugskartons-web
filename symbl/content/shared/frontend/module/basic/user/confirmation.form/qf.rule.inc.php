<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->registerRule('check_confirmation', 'callback', 'qf_check_confirmation');


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->addRule('email',     "fe_email_required",      'required');
$oF->addRule('email',     "fe_email_format",        'email');

$oF->addRule('hash',      "fe_hash_required",       'required');


$oF->addRule(array('email', 'hash'),      "fe_wrong_combination",        'check_confirmation', $oTable);


