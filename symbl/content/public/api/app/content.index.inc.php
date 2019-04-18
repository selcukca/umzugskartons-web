<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$filelist = new \Cnx\MediaFile\Filelist();


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
foreach ($LANGUAGES as $oLanguage) {

    $i18n = \Cnx\Db\Table::factory($DB, TB_SCREEN, false)->getDataByIdent(array("general"), $oLanguage->id);
vardump($i18n);
    file_put_contents($file = "{$dir}{$oLanguage->ident}.json", json_encode($i18n->toArray(), $JSON_OPTIONS));

exit;
    $filelist->add(
        $oMedia = new \Cnx\MediaFile(HTTP_HOST . WWW_HOME_DIR . "language/{$oLanguage->ident}.json", "language/{$oLanguage->ident}.json")
    );

}




$result["filelist"] = $filelist->toFilelist();