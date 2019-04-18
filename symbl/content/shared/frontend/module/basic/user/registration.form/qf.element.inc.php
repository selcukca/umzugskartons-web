<?php

// +----------------------------------------------------------------------+
// | Basic                                                                |
// +----------------------------------------------------------------------+
$oF->addElement('text',     'usr');
$oF->addElement('password', 'pwd1');
$oF->addElement('password', 'pwd2');
$oF->addElement('text',     'email');


// +----------------------------------------------------------------------+
// | Vor- und Nachname                                                    |
// +----------------------------------------------------------------------+
$oF->addElement('text', 'firstname');
$oF->addElement('text', 'lastname');

// +----------------------------------------------------------------------+
// | Adresse                                                               |
// +----------------------------------------------------------------------+
$oF->addElement('text', 'street1');
$oF->addElement('text', 'street2');
$oF->addElement('text', 'zip');
$oF->addElement('text', 'city');


