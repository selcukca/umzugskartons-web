<?php

// +----------------------------------------------------------------------+
// | Basket                                                               |
// +----------------------------------------------------------------------+
if ((!isset($_SESSION[REAL_PROJECT_NAME]["BASKET"])) || (URL_TK_VALUE)) {
    $_SESSION[REAL_PROJECT_NAME]["BASKET"] = array(
        "PACKAGE"  => false,
        "CODE"     => "",
        "COUPON"   => null,
        "PERIOD"   => null,
    );
}


