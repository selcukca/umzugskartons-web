<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$result = array();


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oActivation = new \Symbl\Db\Table\Scalan\Umzugskartons\TdtaActivation($DB);


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (($request = file_get_contents("php://input")) && ($data = (array)json_decode($request))) {
    $_POST = $data;
} elseif (isset($_GET["coupon"])) {
    $_POST["coupon"] = $_GET["coupon"];
}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$hash = (isset($_POST["coupon"]))? $_POST["coupon"] : false;
$sync = ((isset($_POST["sync"])) && ($_POST["sync"]))? true : false;


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ((!empty($hash)) && ($oActivation->loadByCode($hash, $valid, $error, !$sync))) {


    if ($valid && $oActivation->productlist->count()) {
        $result["products"]   = $oActivation->productlist->toAssoc("ident");
        $result["valid_days"] = $oActivation->valid_days;
    }

    //vardump($oActivation->toArray(), $oActivation->company->toArray());exit;
    if (($oActivation->company->id > 0) && ($oActivation->company->isReadableByByApp())) {
        $result["partner"]           = $oActivation->company->toApp();
        $result["partner"]["coupon"] = $hash;
        $result["partner"]["source"] = $oActivation->company::SOURCE_COUPON;
    }

    if (count($result) == 0) {

        http_response_code(403);
        $result = array("error" => "no valid code/company!");

    }

} else {

    http_response_code(403);
    $result = array("error" => "no valid code!");

}


