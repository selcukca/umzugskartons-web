<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->registerRule('check_email',     'callback', 'qf_check_email');
$oF->registerRule('check_blacklist', 'callback', 'qf_check_blacklist');
$oF->registerRule('check_format',    'callback', 'qf_check_format');


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->addRule('email',     "fe_email_req",       'required');
$oF->addRule('email',     "fe_email_format",    'email');
//$oF->addRule('email',     "fe_email_exists",    'check_format');
$oF->addRule('email',     "fe_email_exists",    'check_email',      $oTable);
$oF->addRule('email',     "fe_email_blacklist", 'check_blacklist',  $oTable);


$oF->addRule('lastname',     "fe_lastname_req",       'required');
$oF->addRule('firstname',    "fe_firstname_req",      'required');


