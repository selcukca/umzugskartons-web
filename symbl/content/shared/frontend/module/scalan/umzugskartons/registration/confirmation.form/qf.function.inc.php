<?php


/**
 *
 *
 * @param string $email
 * @param DB_TABLE
 *
 * @return boolean
 */
function qf_check_confirmation($email_hash, \Cnx\Db\Table $oTable)
{

    try {
        return $oTable->loadFirstBy("email = ? AND CONCAT(id, IFNULL(hashval, '')) = ?", $email_hash);

    } catch (Exception $oEx) {
        \Cnx\Debugger::err($oEx, __FILE__, __LINE__, $oTable->getDb()->last_query);
    }
    return false;
}


