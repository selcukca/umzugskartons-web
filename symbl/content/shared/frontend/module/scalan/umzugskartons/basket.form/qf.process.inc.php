<?php

$aF = $oF->exportValues();

$_SESSION[REAL_PROJECT_NAME]["BASKET"]["CODE"]   = $aF["code"];
$_SESSION[REAL_PROJECT_NAME]["BASKET"]["COUPON"] = ($oCoupon->id)? $oCoupon : null;


$oF->freeze();