<?php


/**
 * Überprüft, ob Login bereits vorhanden ist
 *
 * @param string $username
 * @param object $oAuth
 *
 * @return boolean
 */
function qf_check_login_email($login_email, $oAuth)
{
    $value = strtoupper($login_email);

    if ($oAuth->getStorage()->getDbTable()->loadFirstBy("(UPPER(usr) = ? OR UPPER(email) = ?) AND fk_status=?", array($value, $value, STATUS_ONLINE))) {
        return true;
    }
    return false;
}


