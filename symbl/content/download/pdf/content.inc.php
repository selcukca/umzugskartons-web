<?php


if ((isset($ARGV[0])) && (file_exists($file = \Cnx\MediaFile::$INC_MEDIA_DIR . "pdf/" . substr(WWW_ARGV, 0, -1)))) {


    if (($oAuth->getAuth()) && (is_array($filenames = $oAuth->getAuthData("fk_orders"))) && (in_array(basename($file), $filenames))) {


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
        $oDownload->setContentDisposition(\Cnx\File\Download::ATTACHMENT, "rechnung.pdf");
        $oDownload->send();


        // +----------------------------------------------------------------------+
        // | Abbruch                                                              |
        // +----------------------------------------------------------------------+
        exit;
    }

}

