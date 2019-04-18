<?php

// +----------------------------------------------------------------------+
// | Formular -> Navtable                                                 |
// +----------------------------------------------------------------------+
${$GLOBALS["NAVTABLE_FORM_VAR"]}->export(${$GLOBALS["NAVTABLE_VAR"]}, ${$GLOBALS["QF_VAR"]});


return;
// +----------------------------------------------------------------------+
// | Konfiguration speichern                                              |
// +----------------------------------------------------------------------+
// | BEI LIVEGANG -> RAUS !!!                                             |
// +----------------------------------------------------------------------+

if (isset($_GET["navtable"])) {
    $config = "";
    $config .= "Navtable: {$oNavtable->getTitle()} / {$oNavtable->getAs()}  [" . INC_SCRIPT_DIR. "]" . "\n\n";

    /* durchlaufe alle Tabellen */
    foreach ($oNavtable->getDefinedTables() as $oTable) {

        $tb = $oTable->getAs();

        $config .= '// ' . $oTable->getTitle() . '' . "\n";

        /* durchlaufe alle Felder */
        foreach ($oTable->getDefinedFields() as $oField) {

            $field = $oField->getTitle();
            $width = $oField->getWidth();

            $config .= "\$oNavtable['table:{$tb}']['field:{$field}']->setWidth('{$width}');\n";


            /* nur die so definierte Felder werden als Element dargestellt */
            if ($oField->getVisibility() !== null) {
                $config .= "\$oNavtable['table:{$tb}']['field:{$field}']->setVisibility(" . ($oField->isVisible()? 'true' : 'false') . ");\n";

            }
        }

    }

    $config .= "\n\n//Sortierung\n";
    foreach ($oNavtable->getDefinedOrders() as $position => $aR) {

        if ($oField = $oNavtable->getField($aR[0])) {

            $config .= '$oNavtable->setOrder(' . $position . ', "' . $oField->getIdent() . '", "' . $aR[1]. '");' . "\n";

        }
    }

    $config .= "\n\n//Spalten\n";
    $config .= '$oNavtable->setColumns("' . implode('","', $oNavtable->getColumns()->getArrayCopy()) . '");' . "\n";




    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    require_once 'HTTP/Download.php';

    $oDownload = new HTTP_Download();
    $oDownload->setData($config);
    $oDownload->setContentDisposition(HTTP_DOWNLOAD_ATTACHMENT, 'navtable.txt');
    $oDownload->send();

}
