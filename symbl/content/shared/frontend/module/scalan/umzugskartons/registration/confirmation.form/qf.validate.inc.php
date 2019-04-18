<?php

if (($oF->validate()) && ($oTable->id > 0)) {


    // +----------------------------------------------------------------------+
    // | Speichern                                                            |
    // +----------------------------------------------------------------------+
    try {

        if ($oTable->fk_status == STATUS_DRAFT) {
            $oTable->fk_status = STATUS_ONLINE;
            if ($oTable->save(USER_ID)) {

            }
        }

        if ($oTable->relocation->fk_status == STATUS_DRAFT) {

            //$oTable->confirmation_date  = date("Y-m-d H:i:s");
            $oTable->relocation->fk_status          = STATUS_ONLINE;



            if ($oTable->relocation->save(USER_ID)) {

                $maildata               = $oTable->toMaildata();
                $maildata["relocation"] = $oTable->relocation->toMaildata();


                // +----------------------------------------------------------------------+
                // | Mail                                                                 |
                // +----------------------------------------------------------------------+
                try {
                    \Cnx\Db\Table::factory($oTable->getDb(), TB_MAIL)->sendmail("user.confirmation", $oTable->email, $maildata);

                } catch (\Exception $oEx) {
                    \Cnx\Debugger::err($oEx, __FILE__, __LINE__);
                }


                $AUTH->setAuth($oTable->usr);
                foreach ($oTable as $key => $value) {
                    $AUTH->setAuthData($key, $value, $overwrite = true);
                }

                $AUTH->getStorage()->getDbTable()->onLogin($oTable->usr, $AUTH);


            }




        }


        // +----------------------------------------------------------------------+
        // | Quickform - Freezen                                                  |
        // +----------------------------------------------------------------------+
        $oF->freeze();



    } catch (\Exception $oEx) {
        \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__);
    }
}
