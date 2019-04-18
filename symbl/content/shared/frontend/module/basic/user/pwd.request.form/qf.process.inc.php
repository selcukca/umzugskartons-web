<?php


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$formdata = $oF->exportValues();



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oTable = $AUTH->getStorage()->getDbTable();


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$maildata = $oTable->toMaildata();
$maildata["user"] = $oTable;
$maildata["url"]  = $STRUCTURE["PWDCHANGE"]->linkto->getUrl(false, true) . "?hash=" . $oTable->getUuid(time());


// +----------------------------------------------------------------------+
// | User - Mail                                                          |
// +----------------------------------------------------------------------+
try {
    \Cnx\Db\Table::factory($oTable->getDb(), TB_MAIL)->sendmail("user.pwd-request", $oTable->email, $maildata);
} catch (\Exception $oEx) {
    //\Cnx\Debugger::err($oEx, __FILE__, __LINE__);
}



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->freeze();
