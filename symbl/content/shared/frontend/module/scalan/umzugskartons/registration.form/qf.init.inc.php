<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$url = WWW_SCRIPT_DIR . WWW_ARGV . GET_QUERY;

if ((isset($_GET["identity"])) && ($USER->relocation->id > 0)) {
    $url = format_query($url) . "identity=" . $_GET["identity"];
}

// +----------------------------------------------------------------------+
// | QuickForm - Initialisierung                                          |
// +----------------------------------------------------------------------+
$oF->init("qF_reg", 'post', $url, '', null, true);