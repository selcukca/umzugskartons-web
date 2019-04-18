<?php

if (!function_exists("qf_check_package")) {

    /**
     *
     */
    function qf_check_package($form, \Cnx\Db\Table $user)
    {
        if ($_SESSION[REAL_PROJECT_NAME]["BASKET"]["PACKAGE"]->isFree($user->relocation->country)) {
            return $user->relocation->orders->count()? false : true;
        }
        return true;
    }

}


if (!function_exists("qf_check_coupon")) {

    /**
     *
     */
    function qf_check_coupon($value, \Cnx\Db\Table $oCoupon, \Cnx\Db\Table $oPackage)
    {
        if (empty($value)) {
            $oCoupon->reset();
        } else if ($oCoupon->loadByCoupon($value, $oPackage, $valid, $msg, $track=true)) {

            if (!$valid) {
                $oCoupon->reset();
            }

        } else {
            $oCoupon->reset();
        }

        return ($oCoupon->id > 0)? true : (empty($value)? true : false);
    }


}