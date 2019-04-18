<?php


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->addElement('text', 'title');

$oF->addElement('text', 'email');
$oF->addElement('text', 'identity');

$oF->removeChild($oF->getElement('ts'));