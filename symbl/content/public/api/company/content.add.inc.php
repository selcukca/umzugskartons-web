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
}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ((!isset($_POST["uuid"])) || (!$oCompany->loadByUuid($_POST["uuid"], $valid)) || !$valid) {
    $oCompany->reset();
}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ((isset($_POST["email"])) && ($_POST["email"] != $oCompany->email)) {
    if ($oCompany->count("email=? AND fk_status<>?", array($_POST["email"], STATUS_DELETED))) {
        if ((!$oCompany->loadBy('email', $_POST["email"])) || ($oCompany->fk_status == STATUS_DELETED)) {
            $oCompany->reset();
        }
    }
}


$isInsert = false;
if ($oCompany->id > 0) {

    if ($oCompany->isEditableByApp()) {
        $oCompany->toObject($_POST, false, array("fk_status", "is_user_reported"));
    }

} else {
    $oCompany->toObject($_POST, true);
    $oCompany->fk_status          = STATUS_DRAFT;
    $oCompany->is_user_reported   = 1;
    $oCompany->content            = COMPANY_MESSAGE_TEMPLATE;
    $oCompany->has_public_profile = 0;
    $isInsert = true;
}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ($oCompany->isEditableByApp()) {

    if (($oCompany->save(false)) && ($isInsert)) {

        // +----------------------------------------------------------------------+
        // |                                                                      |
        // +----------------------------------------------------------------------+
        $oRelation = new \Symbl\Db\Table\Scalan\Umzugskartons\TrelRelocationCompanySelection($DB);

        $oRelation->fk_company = $oCompany->id;
        $oRelation->server     = $_SERVER;
        $oRelation->fk_status  = STATUS_ONLINE;

        $oRelation->save(false);

    }
}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$result = array("partner" => $oCompany->toApp());
if ($isEditable = $oCompany->isEditableByApp()) {
    $result["partner"]                  = array_merge($result["partner"], $oCompany->toEditable());
}
$result["partner"]["source"]        = $oCompany::SOURCE_REPORT;
$result["partner"]["isEditable"]    = $isEditable;


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
//http_response_code(403);
//$result = array("error" => "no valid code!" . $error);



