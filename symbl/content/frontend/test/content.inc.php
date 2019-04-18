<?php


$oActivation = new \Symbl\Db\Table\Scalan\Umzugskartons\TdtaActivation($DB);

if ($oActivation->load(5)) {

    vardump($oActivation->toArray(), $oActivation->invoice->toArray());

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+


    // +----------------------------------------------------------------------+
    // | User - Mail                                                          |
    // +----------------------------------------------------------------------+
    $maildata               = $oActivation->toMaildata();
    $maildata["invoice"]    = $oActivation->invoice->toMaildata();
    $maildata["klarna"]     = $oActivation->invoice->fetchOrder($I18N);

    $options                = array("return" => "command");
    $options["attachments"] = array(
        array(\Cnx\MediaFile::$INC_MEDIA_DIR . "agb.pdf", 'application/octet-stream', "Allgemeine Geschäftsbedingungen.pdf")
    );

    try {
        $result = \Cnx\Db\Table::factory($DB, TB_MAIL)->sendmail("order.acknowledged", "selcuk.alan@scalan.de", $maildata, $options);
        vardump($result);
    } catch (\Exception $oEx) {
        \Cnx\Debugger::err($oEx, __FILE__, __LINE__);
    }


}


exit;