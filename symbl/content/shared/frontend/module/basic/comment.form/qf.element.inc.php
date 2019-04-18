<?php

$oF->addElement('textarea', 'content');

if (!$AUTH->getAuth()) {

    $oF->addElement('text', 'fullname');
    $oF->addElement('text', 'email');

    $oF->addElement('text', 'captcha');

}
