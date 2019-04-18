<?php


/**
 * Überprüft, ob Login bereits vorhanden ist
 *
 * @param string $username
 * @param object $oAuth
 *
 * @return boolean
 */
function qf_check_user($username, $oAuth)
{
    if (!$oAuth->getStorage()->getDbTable()->loadByUsername($username)) {
        return true;
    }
    return false;
}


/**
 * Überprüft, ob E-Mail-Adresse bereits vorhanden ist
 *
 * @param string $email
 * @param DB_TABLE
 *
 * @return boolean
 */
function qf_check_email($email, $oAuth)
{
    if (!$oAuth->getStorage()->getDbTable()->loadByEmail($email)) {
        return true;
    }

    return false;
}

