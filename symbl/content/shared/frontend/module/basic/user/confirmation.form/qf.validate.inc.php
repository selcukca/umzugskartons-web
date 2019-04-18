<?php

if (($oF->validate()) && ($oTable->id > 0)) {


    // +----------------------------------------------------------------------+
    // | Speichern                                                            |
    // +----------------------------------------------------------------------+
    try {


        if ($oTable->fk_status == STATUS_DRAFT) {

            //$oTable->confirmation_date  = date("Y-m-d H:i:s");
            $oTable->fk_status          = STATUS_ONLINE;


            if ($oTable->save(USER_ID)) {


                // +----------------------------------------------------------------------+
                // | Mail                                                                 |
                // +----------------------------------------------------------------------+
                $maildata = $oTable->toMaildata();


                try {
                    \Cnx\Db\Table::factory($oTable->getDb(), TB_MAIL)->sendmail("user.confirmation", $oTable->email, $maildata);
                } catch (\Exception $oEx) {
                    \Cnx\Debugger::err($oEx, __FILE__, __LINE__);
                }


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



?>