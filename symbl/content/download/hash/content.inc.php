<?php

//$_SESSION[REAL_PROJECT_NAME]["HASHFILES"][$ARGV[0]] = array("file" => INC_MEDIA_DIR . "content.index.inc.php");
//vardump($_SESSION[REAL_PROJECT_NAME]["HASHFILES"]);

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (!$oAuth->getAuth()) {
   // return;
}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ((isset($ARGV[0], $_SESSION[REAL_PROJECT_NAME]["HASHFILES"][ $ARGV[0] ])) && (file_exists($file = $_SESSION[REAL_PROJECT_NAME]["HASHFILES"][ $ARGV[0] ]["file"]))) {


    // +----------------------------------------------------------------------+
    // | Log                                                                  |
    // +----------------------------------------------------------------------+
    try {
        \Cnx\Db\Table::factory($DB, TB_DOWNLOAD_LOG)->log($file, \Cnx\MediaFile::$INC_MEDIA_DIR, USER_ID, basename($file));
    } catch (\Exception $oEx) {
        \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__);
    }


    // +----------------------------------------------------------------------+
    // | Download                                                             |
    // +----------------------------------------------------------------------+
    $oDownload = new \Cnx\File\Download();
    $oDownload->setFile($file);
    $oDownload->setContentDisposition(\Cnx\File\Download::ATTACHMENT);
    $oDownload->send();


    // +----------------------------------------------------------------------+
    // | Abbruch                                                              |
    // +----------------------------------------------------------------------+
    exit;

}
