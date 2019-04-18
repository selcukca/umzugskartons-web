<?php

$aF = $oF->exportValues();


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$USER->relocation->toObject($aF["company"], true, array("latitude", "longitude", "notice", "is_user_reported", "rating_cnt", "rating_avg", "selection_cnt", "activation_cnt", "shares_cnt", "package"));

$USER->relocation->fk_status = $USER->relocation::STATUS_REPORTED;


if ($USER->relocation->save(USER_ID)) {

    $USER->usr          = $USER->relocation->email;
    $USER->email        = $USER->relocation->email;
    $USER->fk_status    = STATUS_DRAFT;
    $USER->plainpwd     = \Cnx\Hash::generate(8);
    $USER->pwd          = md5($USER->plainpwd);
    $USER->hashval      = \Cnx\Hash::generate(4);
    $USER->extra1       = $USER->relocation->id;
    if ($USER->save($USER->id)) {

        // +----------------------------------------------------------------------+
        // | User - Mail                                                          |
        // +----------------------------------------------------------------------+
        $maildata               = $USER->toMaildata();
        $maildata["relocation"] = $USER->relocation->toMaildata();
        $maildata["url"]        = $STRUCTURE["REGISTRATION_COMPLETE"]->linkto->getUrl(false, true) . "?hash={$USER->getHash()}&email={$USER->email}";

        try {
            \Cnx\Db\Table::factory($DB, TB_MAIL)->sendmail("user.registration", $USER->email, $maildata);
        } catch (\Exception $oEx) {
            \Cnx\Debugger::err($oEx, __FILE__, __LINE__);
        }


        // +----------------------------------------------------------------------+
        // |                                                                      |
        // +----------------------------------------------------------------------+
        $USER->fk_status = STATUS_ONLINE;
        $AUTH->setAuth($USER->usr);
        foreach ($USER as $key => $value) {
            $AUTH->setAuthData($key, $value, $overwrite = true);
        }

        //$AUTH->getStorage()->getDbTable()->onLogin($USER->usr, $AUTH);



        // +----------------------------------------------------------------------+
        // |                                                                      |
        // +----------------------------------------------------------------------+
        $oF->freeze();



    }
}
