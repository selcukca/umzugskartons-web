<?php

$formdata = $oF->exportValues();


$oComment->tb        = $oTable->getTableAsConstant();
$oComment->pkdata    = serialize($pkdata = $oTable->getPrimaryKeysData());
$oComment->fk_lang   = LANG_ID;
$oComment->url       = WWW_SCRIPT_DIR . WWW_ARGV . GET_QUERY;
$oComment->content   = $formdata["content"];
$oComment->ip        = \Cnx\Framework::getRemoteAddr();


if ($AUTH->getAuth()) {
    $oComment->fk_user   = USER_ID;
} else {
    $oComment->fullname  = $formdata["fullname"];
    $oComment->email     = $formdata["email"];
}
$oComment->fk_status = STATUS_INACTIVE;

try {

    if ($oComment->save(false)) {

        /*
        // +----------------------------------------------------------------------+
        // |                                                                      |
        // +----------------------------------------------------------------------+
        $maildata = $oComment->toMaildata();

        try {
            DB_TABLE::factory($oDB, TB_MAIL)->sendmail("comment", null, $maildata);
        } catch (Exception $oEx) {
            Debugger::err($oEx, __FILE__, __LINE__);
        }


        */

    }



} catch (\Exception $oEx) {
    \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__, $oDB->last_query);
}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->freeze();
