<?php

// +----------------------------------------------------------------------+
// | load config                                                          |
// +----------------------------------------------------------------------+
require_once(dirname(__FILE__) . "/prepend/config.inc.php");


// +----------------------------------------------------------------------+
// |  load cnx-class                                                      |
// +----------------------------------------------------------------------+
require_once(INC_CLASS_DIR . "Cnx.php");


// +----------------------------------------------------------------------+
// | Includer - Initialisierung                                           |
// +----------------------------------------------------------------------+
$oIncluder = new \Cnx\Includer( new \Cnx\Includer\FilePathIterator() );


// +----------------------------------------------------------------------+
// | Includer - Verzeichnisse                                             |
// +----------------------------------------------------------------------+
// | backend: REAL_PROJECT_NAME ist nicht definiert!                      |
// +----------------------------------------------------------------------+
$oIncluder->addPath(INC_PREPEND_DIR . "shared/");
@$oIncluder->addPath(INC_PREPEND_DIR . "shared/" . REAL_PROJECT_NAME . "/",  defined("REAL_PROJECT_NAME"));
$oIncluder->addPath(INC_PREPEND_DIR . "shared/" . PROJECT_NAME. "/",        PROJECT_NAME);
$oIncluder->addPath(INC_PREPEND_DIR);
@$oIncluder->addPath(INC_PROJECT_PREPEND_DIR,                            PROJECT_NAME);
@$oIncluder->addPath(INC_PROJECT_PREPEND_DIR . PROJECT_SCRIPT . "/",     (PROJECT_SCRIPT != PROJECT_NAME));
@$oIncluder->addPath(INC_PROJECT_PREPEND_DIR . REAL_PROJECT_NAME . "/",  defined("REAL_PROJECT_NAME"));


// +----------------------------------------------------------------------+
// | Includer - Dateien                                                   |
// +----------------------------------------------------------------------+
$oIncluder->addFile(FILENAME_INIT_PAGE);             // Page
$oIncluder->addFile(FILENAME_INIT_CONSTANT);         // Konstanten
$oIncluder->addFile(FILENAME_INIT_DB);               // Datenbank
$oIncluder->addFile(FILENAME_INIT_STATUS);           // Status-Konstanten
$oIncluder->addFile(FILENAME_INIT_TABLE);            // Datenbank-Tabellen-Konstanten
$oIncluder->addFile(FILENAME_INIT_CLASS);            // Klassen includieren
$oIncluder->addFile(FILENAME_INIT_DEBUGGER);         // Debugger includieren
$oIncluder->addFile(FILENAME_INIT_OBJECT);           // Objecte initialisieren
$oIncluder->addFile(FILENAME_INIT_MEDIAFILE);        // MediaFile initialisieren
$oIncluder->addFile(FILENAME_INIT_SESSION);          // Session initialisieren
$oIncluder->addFile(FILENAME_INIT_AUTH);             // Auth initialisieren
$oIncluder->addFile(FILENAME_INIT_LANGUAGE);         // Sprachen initialisieren
$oIncluder->addFile(FILENAME_INIT_STRUCTURE);        // Menu initialisieren
$oIncluder->addFile(FILENAME_INIT_URL);              // URL-Auswertung
$oIncluder->addFile(FILENAME_INIT_FILENAME);         // Datei-Namen
$oIncluder->addFile(FILENAME_INIT_PROJECT);          // Projekt initialisiern


// +----------------------------------------------------------------------+
// | Includer - Daten laden                                               |
// +----------------------------------------------------------------------+
foreach ($oIncluder->getFilelist() as $_file) {
    require_once($_file);
}

//vardump($oIncluder->debug(true));