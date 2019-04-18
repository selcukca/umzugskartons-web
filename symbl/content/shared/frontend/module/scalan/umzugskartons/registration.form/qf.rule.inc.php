<?php


// +----------------------------------------------------------------------+
// | Ident                                                                |
// +----------------------------------------------------------------------+
$oF->addRule('company[title]',         $I18N['element.error.req'],        'required');

$oF->addRule('company[email]',         $I18N['element.error.req'],        'required');
$oF->addRule('company[email]',         $I18N['element.error.email'],      'email');
$oF->addRule('company[email]',         $I18N['element.error.exists'],     'unique', array($USER, "email"));
$oF->addRule('company[email]',         $I18N['element.error.exists'],     'unique', array($USER, "usr"));
$oF->addRule('company[email]',         $I18N['element.error.exists'],     'unique', array($USER->relocation, "email"));


$oF->addRule('company[phone]',         $I18N['element.error.req'],        'required');
//$oF->addRule('company[web]',           $I18N->fe_format,     'url');

$oF->addRule('company[street]',        $I18N['element.error.req'],        'required');
$oF->addRule('company[zip]',           $I18N['element.error.req'],        'required');
$oF->addRule('company[city]',          $I18N['element.error.req'],        'required');


$oF->addRule('company[person_gener]',           $I18N['element.error.req'],        'required');
$oF->addRule('company[person_firstname]',       $I18N['element.error.req'],        'required');
$oF->addRule('company[person_lastname]',        $I18N['element.error.req'],        'required');
$oF->addRule('company[person_email]',           $I18N['element.error.email'],      'email');


$oF->addRule('accept[agb]',            $I18N['element.error.req'],        'required');

