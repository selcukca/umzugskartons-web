<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$formdata = $oF->exportValues();


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oTable = \Cnx\Db\Table::factory(\Cnx\Db::getInstance(), TB_CONTACT);


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oTable->toObject($formdata, true, array("ip", "fk_lang", "formdata"));
$oTable->fk_lang   = LANG_ID;
$oTable->ip        = \Cnx\Framework::getRemoteAddr();
$oTable->formdata  = serialize($formdata);
$oTable->fk_status = STATUS_ONLINE;




// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ($oTable->save()) {


    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    $maildata = $oTable->toMaildata();



    // +----------------------------------------------------------------------+
    // | User - Mail                                                          |
    // +----------------------------------------------------------------------+
    try {
        \Cnx\Db\Table::factory($oTable->getDb(), TB_MAIL)->sendmail("contact", $oTable->email, $maildata);
    } catch (\Exception $oEx) {
        \Cnx\Debugger::err($oEx, __FILE__, __LINE__);
    }


    // +----------------------------------------------------------------------+
    // | Admin - Mail                                                         |
    // +----------------------------------------------------------------------+
    try {
        \Cnx\Db\Table::factory($oTable->getDb(), TB_MAIL)->sendmail("contact.admin", null, $maildata);
    } catch (\Exception $oEx) {
        \Cnx\Debugger::err($oEx, __FILE__, __LINE__);
    }


}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->freeze();
