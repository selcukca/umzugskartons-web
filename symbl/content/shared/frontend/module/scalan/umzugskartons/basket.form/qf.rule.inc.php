<?php


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->registerRule('package', 'callback', 'qf_check_package');
$oF->registerRule('coupon',  'callback', 'qf_check_coupon');


$oF->addFormRule("package", $I18N->fe_package_not_available, array($USER));

if (!\Cnx\Form::isClicked($_POST, "btn_coupon")) {

    $oF->addRule('code',            $I18N['element.error.req'],        'required');
    $oF->addRule('code',            str_replace("#signs#", "A-Z 0-9 _", $I18N['element.error.format']),     'regex', "/^([a-z]|[A-Z]|[0-9]|_)*$/");
    $oF->addRule('code',            str_replace("#len#", 4, $I18N['element.error.minlength']),  'minlength', 4);
    $oF->addRule('code',            $I18N['element.error.exists'],     'unique', array(\Cnx\Db\Table::factory($DB, TB_ACTIVATION), "ident"));

}

$oF->addRule('coupon',          $I18N['element.error.coupon'],     'coupon', array($oCoupon, $PACKAGE->data));

