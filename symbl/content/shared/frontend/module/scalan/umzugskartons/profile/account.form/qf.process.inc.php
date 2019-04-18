<?php

$aF = $oF->exportValues();

try {

    $USER->usr   = $aF["usr"];
    $USER->email = $aF["email"];
    if (!empty($aF["pwd1"])) {
        $USER->pwd = $AUTH->hashPassword($aF["pwd1"]);
    }

    $hasEmailChanged = false;
    if (($USER->hasModifications($modifications)) && (isset($modifications["email"]))) {
        $hasEmailChanged = true;
        $USER->fk_status = STATUS_DRAFT;
        $USER->hashval   = \Cnx\Hash::generate(4);
    }

    if (($USER->save(USER_ID)) && ($hasEmailChanged)) {
        $AUTH->setAuthData("fk_status", STATUS_ONLINE, $overwrite = true);

        // +----------------------------------------------------------------------+
        // | User - Mail                                                          |
        // +----------------------------------------------------------------------+
        $maildata               = $USER->toMaildata();
        $maildata["relocation"] = $USER->relocation->toMaildata();
        $maildata["url"]        = $STRUCTURE["REGISTRATION_COMPLETE"]->linkto->getUrl(false, true) . "?hash={$USER->getHash()}&email={$USER->email}";

        try {
            \Cnx\Db\Table::factory($DB, TB_MAIL)->sendmail("user.email", $USER->email, $maildata);
        } catch (\Exception $oEx) {
            \Cnx\Debugger::err($oEx, __FILE__, __LINE__);
        }

    }

} catch (\Exception $oEx) {
    \Cnx\Debugger::emerg($oEx);
}

$oF->freeze();
