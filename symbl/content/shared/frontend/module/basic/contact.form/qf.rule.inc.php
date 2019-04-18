<?php

//$oF->addRule('firstname',           "fe_firstname_req", 'required');
//$oF->addRule('lastname',            "fe_lastname_req",  'required');
if (!$AUTH->getAuth()) {
    $oF->addRule('email',             "fe_email_req",     'required');
    $oF->addRule('email',             "fe_email_format",  'email');
}
$oF->addRule('title',                 "fe_title_req",     'required');
$oF->addRule('content',               "fe_content_req",   'required');


