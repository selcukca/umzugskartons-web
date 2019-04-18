<?php

// +----------------------------------------------------------------------+
// | Quickform - Validierung                                              |
// +----------------------------------------------------------------------+
if (${$GLOBALS["QF_VAR"]}->validate()) {


    // Formular-Daten
    //$aF = ${$GLOBALS["QF_VAR"]}->exportValues();



    // +----------------------------------------------------------------------+
    // | QuickForm - Navtable - Process                                       |
    // +----------------------------------------------------------------------+
    foreach (${$GLOBALS["QF_VAR"]}->getPaths() AS $_qfpath) {
        if (file_exists($incFile = $_qfpath . "qf.navtable.process.inc.php")) {
            include($incFile);
            break;
        }
    }


    if ($ts = $oF->getSubmitValue("ts")) {

        if (!in_array($ts, $_SESSION[PROJECT_TIMESTAMP])) {

            // +----------------------------------------------------------------------+
            // | QuickForm - Processing                                               |
            // +----------------------------------------------------------------------+
            foreach (${$GLOBALS["QF_VAR"]}->getPaths() AS $_qfpath) {

                if (file_exists($incFile = $_qfpath . "qf.process.inc.php")) {
                    include($incFile);
                    break;
                }
            }


        } else {
            // ts bereits vorhanden
            ${$GLOBALS["QF_VAR"]}->freeze();
        }

    } else {
        // ts ist nicht definiert

    }

} else {

    // +----------------------------------------------------------------------+
    // | QuickForm - Fehlermarkierungen                                       |
    // +----------------------------------------------------------------------+
    $_qffile = false;

    foreach (${$GLOBALS["QF_VAR"]}->getPaths() AS $_qfpath) {
        if (file_exists($incFile = $_qfpath . "qf.error.inc.php")) {
            $_qffile = $incFile;
            break;
        }
    }
    if ($_qffile) {
        include($_qffile);
    } else {
        include(dirname(__FILE__) . "/qf.error.inc.php");
    }


}
