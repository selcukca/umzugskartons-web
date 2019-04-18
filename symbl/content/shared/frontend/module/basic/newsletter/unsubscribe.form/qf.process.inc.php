<?php


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$formdata = $oF->exportValues();


// +----------------------------------------------------------------------+
// | Speichern                                                            |
// +----------------------------------------------------------------------+
try {

    if ($oTable->loadFirstBy("email = ?", $formdata["email"])) {

        $EMAIL  = $oTable->email;

        $sendmail = $oTable->unsubscribe();


        if (($oTable->save(USER_ID)) && ($sendmail)) {


            // +----------------------------------------------------------------------+
            // | Mail                                                                 |
            // +----------------------------------------------------------------------+
            $maildata = $oTable->toMaildata();

            try {
                \Cnx\Db\Table::factory($oTable->getDb(), TB_MAIL)->sendmail("newsletter.unsubscribe", $EMAIL, $maildata);
            } catch (\Exception $oEx) {
                \Cnx\Debugger::err($oEx, __FILE__, __LINE__);
            }



        }

    }


    // +----------------------------------------------------------------------+
    // | Quickform - Freezen                                                  |
    // +----------------------------------------------------------------------+
    $oF->freeze();


    header("Location: " . WWW_SCRIPT_DIR . WWW_ARGV . "?saved={$content->id}");
    exit;


} catch (\Cnx\Exception $oEx) {

    \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__, $oDB->last_query);

}

