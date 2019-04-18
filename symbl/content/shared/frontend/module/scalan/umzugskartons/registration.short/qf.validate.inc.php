<?php


// +----------------------------------------------------------------------+
// | Quickform - Validierung                                              |
// +----------------------------------------------------------------------+
if ($oF->validate()) {

    $aF = $oF->exportValues();


    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    $url = format_query($STRUCTURE["REGISTRATION"]->linkto->getUrl());
    if ($USER->relocation->id > 0) {
        $url .= "identity=" . $aF["identity"];
    } else {
        $url .= "title=" . $aF["title"] . "&email=" . $aF["email"];
    }
    header("Location: {$url}");
    exit;
}

