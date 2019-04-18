<?php

$oF->addRule('content',         'fe_content_req',      'required');

if (!$AUTH->getAuth()) {

    $oF->addRule('fullname',    'fe_fullname_req',     'required');

    $oF->addRule('email',       'fe_email_req',        'required');
    $oF->addRule('email',       'fe_email_format',     'email');

    //$oF->addRule('captcha',     'fe_captcha_req',      'required');
    //$oF->addRule('captcha',     'fe_captcha_wrong',    'regex', '/^(' . $_SESSION[PROJECT_CAPTCHA]["comment"] . ')$/');


}

