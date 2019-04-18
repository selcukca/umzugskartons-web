<?php


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
//$oF->registerRule('check_login_email',       'callback', 'qf_check_login_email');


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->addRule('pwd1',                $I18N["element.error.req"],         'required');
$oF->addRule('pwd1',                str_replace("#len#", $len = 8, $I18N["element.error.minlength"]),   'minlength', $len);
$oF->addRule('pwd2',                $I18N["element.error.req"],         'required');
$oF->addRule(array('pwd2','pwd1'),  $I18N["element.error.compare"],     'compare');
$oF->addRule(array('pwd1','pwd2'),  $I18N["element.error.compare"],     'compare');
