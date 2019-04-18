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

    $oRelation = new \Symbl\Db\Table\Scalan\Umzugskartons\TrelRelocationCompanySelection($DB);

    $oRelation->fk_company = $oCompany->id;
    $oRelation->server     = $_SERVER;
    $oRelation->fk_status  = STATUS_ONLINE;

    if ($oRelation->save(false)) {

    }

    $result["summary"] = $oRelation->company->selection_cnt;

}

