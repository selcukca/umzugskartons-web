<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$result = array();


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oCompany = new \Symbl\Db\Table\Scalan\Umzugskartons\TdtaRelocationCompany($DB);


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (($request = file_get_contents("php://input")) && ($data = (array)json_decode($request))) {
    $_POST = $data;
} else if (isset($_GET["uuid"])) {
    $_POST = $_GET;
}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ((!isset($_POST["uuid"])) || (!$oCompany->loadByUuid($_POST["uuid"], $valid)) || !$valid) {

    http_response_code(403);
    $result = array("error" => "no valid company!");

} else {

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    if ($oCompany->isReadableByByApp()) {
        $result = array("partner" => $oCompany->toApp());

        if ($isEditable = $oCompany->isEditableByApp()) {
            $result["partner"] = array_merge($result["partner"], $oCompany->toEditable());
        }
        $result["partner"]["source"]     = $oCompany::SOURCE_SYNC;
        $result["partner"]["isEditable"] = $isEditable;

    } else {
        $result["partner"] = false;
    }


}

