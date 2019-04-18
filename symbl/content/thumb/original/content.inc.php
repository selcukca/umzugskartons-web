<?php


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (count($ARGV) > 0) {
    $_GET["src"] = implode("/", $ARGV);
}

if (file_exists($file = \Cnx\MediaFile::$INC_MEDIA_DIR . $_GET["src"])) {

    header("Location: " . WWW_MEDIA_DIR . $_GET["src"]);
    exit;
}