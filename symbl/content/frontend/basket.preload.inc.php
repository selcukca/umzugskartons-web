<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oPackage = \Cnx\Db\Table::factory($DB, TB_FIX_RELOCATION_PACKAGE)->createHolder();

if ((isset($_GET["package"])) && ($oPackage->load($_GET["package"])) && ($oPackage->data->fk_status == STATUS_ONLINE)) {

    $_SESSION[REAL_PROJECT_NAME]["BASKET"]["PACKAGE"] = $oPackage;

}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oTpl_frame->assign("oPackage", $oPackage = $_SESSION[REAL_PROJECT_NAME]["BASKET"]["PACKAGE"]);




// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ($oCoupon  = $_SESSION[REAL_PROJECT_NAME]["BASKET"]["COUPON"]) {

    if (!$oCoupon->check($oPackage->data, $msg, $track = false)) {
        $oCoupon->reset();
        $_SESSION[REAL_PROJECT_NAME]["BASKET"]["COUPON"] = null;
    }

}



// +----------------------------------------------------------------------+
// | Inhalte                                                              |
// +----------------------------------------------------------------------+
include($INC_SCRIPT_DIR . "index.data.inc.php");

