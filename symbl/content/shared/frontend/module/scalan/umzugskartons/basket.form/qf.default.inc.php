<?php

$oF->setDefaults(
    array(
        "code"   => $_SESSION[REAL_PROJECT_NAME]["BASKET"]["CODE"]?  $_SESSION[REAL_PROJECT_NAME]["BASKET"]["CODE"] : \Cnx\Hash::generate(8),
        "coupon" => $_SESSION[REAL_PROJECT_NAME]["BASKET"]["COUPON"]? $_SESSION[REAL_PROJECT_NAME]["BASKET"]["COUPON"]->ident : "",
        "period" => $_SESSION[REAL_PROJECT_NAME]["BASKET"]["PERIOD"]->id
    )
);

//vardump($_SESSION[REAL_PROJECT_NAME]["BASKET"]["COUPON"]);exit;