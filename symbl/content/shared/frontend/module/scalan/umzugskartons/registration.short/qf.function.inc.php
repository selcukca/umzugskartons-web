<?php

function qf_check_identity($value, $oUser)
{

    if (empty($value)) {
        return true;
    } else if ($oUser->relocation->loadByIdentity($value)) {
        return true;
    }
    $oUser->relocation->reset();
    return false;
}