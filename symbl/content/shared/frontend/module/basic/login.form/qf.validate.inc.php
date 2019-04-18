<?php

if ($oF->validate()) {

    $oF->getElement('password')->setValue('');
    $oF->setElementError('password', $I18N["form.error.login"]);


}