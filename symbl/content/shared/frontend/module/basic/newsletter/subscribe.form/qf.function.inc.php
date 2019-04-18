<?php


/**
 *
 *
 * @param string $email
 * @param DB_TABLE
 *
 * @return boolean
 */
function qf_check_email($email, \Symbl\Db\Table\Cms\TdtaNewsletterUser $oTable)
{

    try {

        $oTable->loadFirstBy('email=?', $email);

        return true;

    } catch (\Exception $oEx) {
        \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__, $oTable->oDB->last_query);
    }
    return false;

}


/**
 *
 *
 * @param string $email
 * @param DB_TABLE
 *
 * @return boolean
 */
function qf_check_blacklist($email, \Symbl\Db\Table\Cms\TdtaNewsletterUser $oTable)
{

    try {
        return !$oTable->isOnBlacklist($email);
    } catch (\Exception $oEx) {
        \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__, $oTable->oDB->last_query);
    }
    return false;
}



