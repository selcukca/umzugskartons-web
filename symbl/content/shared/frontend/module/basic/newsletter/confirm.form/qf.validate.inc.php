<?php

if (($oF->validate()) && ($oTable->id > 0)) {


    // +----------------------------------------------------------------------+
    // | Speichern                                                            |
    // +----------------------------------------------------------------------+
    try {

        $sendmail = $oTable->confirm();


        if (($oTable->save(USER_ID)) && $sendmail) {


            // +----------------------------------------------------------------------+
            // | Mail                                                                 |
            // +----------------------------------------------------------------------+
            $maildata = $oTable->toMaildata();


            try {
                \Cnx\Db\Table::factory($oTable->getDb(), TB_MAIL)->sendmail("newsletter.confirmed", $oTable->email, $maildata);
            } catch (\Exception $oEx) {
                \Cnx\Debugger::err($oEx, __FILE__, __LINE__);
            }

        }



        // +----------------------------------------------------------------------+
        // | Quickform - Freezen                                                  |
        // +----------------------------------------------------------------------+
        $oF->freeze();
        //$_SESSION[PROJECT_TIMESTAMP][] = $aF["ts"];

        header("Location: " . WWW_SCRIPT_DIR . WWW_ARGV . "?saved={$content->id}#newsletter-confirm");
        exit;


    } catch (\Exception $oEx) {
        \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__);
    }
}

