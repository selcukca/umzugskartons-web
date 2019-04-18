<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->registerRule('user_unique',    'callback', 'qf_check_user');
$oF->registerRule('email_unique',   'callback', 'qf_check_email');


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->addRule('usr',                 'fe_usr_req',       'required');
$oF->addRule('usr',                 'fe_usr_exists',    'user_unique', $AUTH);

$oF->addRule('pwd1',                'fe_pwd1_req',      'required');
$oF->addRule('pwd2',                'fe_pwd2_req',      'required');
$oF->addRule(array('pwd2','pwd1'),  'fe_pwd_compare',   'compare');

$oF->addRule('email',               'fe_email_req',     'required');
$oF->addRule('email',               'fe_email_format',  'email');
$oF->addRule('email',               'fe_email_unique',  'email_unique', $AUTH);



