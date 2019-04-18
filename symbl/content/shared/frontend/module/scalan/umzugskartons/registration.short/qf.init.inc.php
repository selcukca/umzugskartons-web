<?php


// +----------------------------------------------------------------------+
// | QuickForm - Initialisierung                                          |
// +----------------------------------------------------------------------+
//$oF->init("qF_reg", 'get', $STRUCTURE["REGISTRATION"]->linkto->getUrl(), '', null, true);
$oF->init("qF_reg", 'post', WWW_SCRIPT_DIR . WWW_ARGV . GET_QUERY, '', null, true);
