<?php


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$formdata = $oF->exportValues();



// +----------------------------------------------------------------------+
// | Speichern                                                            |
// +----------------------------------------------------------------------+
try {


    $formdata["formdata"] = $formdata;

    $sendmail = $oTable->subscribe($formdata["email"], $directly = false, $formdata);


    if (($oTable->save(USER_ID)) && ($sendmail)) {


        // +----------------------------------------------------------------------+
        // | Mail                                                                 |
        // +----------------------------------------------------------------------+
        $maildata = $oTable->toMaildata();

        if ($content->holder && $content->holder->data->linkto->isLink()) {
            $maildata["url"] = HTTP_HOST . $content->holder->data->linkto->getUrl(false) . "?email={$oTable->email}&hash={$oTable->hashval}";
        } else {
            $maildata["url"] = HTTP_HOST . WWW_PROJECT_HOME_DIR;
        }


        try {
            \Cnx\Db\Table::factory($oTable->getDb(), TB_MAIL)->sendmail("newsletter.subscribe", $oTable->email, $maildata);
        } catch (\Exception $oEx) {
            \Cnx\Debugger::err($oEx, __FILE__, __LINE__);
        }



    }

    // +----------------------------------------------------------------------+
    // | Quickform - Freezen                                                  |
    // +----------------------------------------------------------------------+
    $oF->freeze();


    header("Location: " . WWW_SCRIPT_DIR . WWW_ARGV . "?saved={$content->id}");
    exit;



} catch (\Exception $oEx) {
    \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__);
}


