<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->addElement('text',   'code');
$oF->addElement('text',   'coupon');
$oF->addElement('select', 'period', '', $options["period"]->toOptions($I18N));

$oF->addElement('submit', 'btn_code');
$oF->addElement('submit', 'btn_coupon');