<?php

// +----------------------------------------------------------------------+
// | Auth - Parameter                                                     |
// +----------------------------------------------------------------------+
$aParam =
    array(
        "dbtable"       => $oFrontendUser = \Cnx\Db\Table::factory($DB, TB_FRONTEND_USER),
        "sessionName"   => "framework.auth.frontend." . REAL_PROJECT_NAME,
        "cryptType"     => "md5",
    );


// +----------------------------------------------------------------------+
// | Auth - Initialisierung                                               |
// +----------------------------------------------------------------------+
try {
    $AUTH = new \Cnx\Auth("\\Cnx\\Auth\\Container\\Db\\Table", $aParam);
} catch (\Exception $oEx) {
    \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__);
}

// +----------------------------------------------------------------------+
// | Auth - Callback                                                      |
// +----------------------------------------------------------------------+
$AUTH->setCheckAuthCallback( function($username, \Cnx\Auth $oAuth) use ($oFrontendUser) {

    // prepare for account.email change
    if (($oFrontendUser->id == 0) && ($id = $oAuth->getAuthData("id"))) {
        $oFrontendUser->load($id);
        //vardump(__METHOD__, "load");
    }

    // +----------------------------------------------------------------------+
    // | if comes from form.login                                             |
    // +----------------------------------------------------------------------+
    //vardump($oAuth->getAuthData("fk_status"));
    if (($loginStatus = $oAuth->getAuthData("fk_status")) && ($loginStatus != STATUS_ONLINE)) {
        return false;
    }


    if (!in_array($oFrontendUser->fk_status, array(STATUS_DRAFT, STATUS_ONLINE))) {
        return false;
    }

    return true;
    //return $oFrontendUser->onCheck($username, $oAuth);
} );

// +----------------------------------------------------------------------+
// | Auth - Logout                                                        |
// +----------------------------------------------------------------------+
if (isset($_GET["logout"])) {
    $AUTH->logout();
}


// +----------------------------------------------------------------------+
// | Auth - Start                                                         |
// +----------------------------------------------------------------------+
$AUTH->start();


// +----------------------------------------------------------------------+
// | Aktuelle User-Id                                                     |
// +----------------------------------------------------------------------+
define("USER_ID", ($AUTH->getAuth()? $AUTH->getAuthData("id") : 0));


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$PAGE["AUTH"] = $AUTH;
$PAGE["USER"] = new \Cnx\Page\User($USER = $AUTH->getStorage()->getDbTable());
