<?php

// +----------------------------------------------------------------------+
// | Memory Limit                                                         |
// +----------------------------------------------------------------------+
ini_set("memory_limit", "256M");


// +----------------------------------------------------------------------+
// | PROJECT_SCRIPT                                                       |
// +----------------------------------------------------------------------+
define("PROJECT_SCRIPT", "compress");


// +----------------------------------------------------------------------+
// | Konfigurationsdatei laden                                            |
// +----------------------------------------------------------------------+
require_once(dirname(__FILE__) . "/prepend/config.inc.php");



// +----------------------------------------------------------------------+
// |  Includer - Klasse                                                   |
// +----------------------------------------------------------------------+
require_once(INC_CLASS_DIR . "Cnx.cls.php");



// +----------------------------------------------------------------------+
// | Includer - Initialisierung                                           |
// +----------------------------------------------------------------------+
$oIncluder = new \Cnx\Includer( new \Cnx\Includer\FilePathIterator() );

$oIncluder->addPath(INC_PREPEND_DIR . "shared/");
$oIncluder->addPath(INC_PROJECT_PREPEND_DIR);

$oIncluder->addFile(FILENAME_INIT_CONSTANT);        // MediaFile initialisieren
$oIncluder->addFile(FILENAME_INIT_PROJECT);         // Projekt initialisiern

foreach ($oIncluder->getFilelist() as $_file) {
    require_once($_file);
}




// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
require MINIFY_MIN_DIR . "/Minify/Loader.php";
Minify_Loader::register();

Minify::$uploaderHoursBehind = $min_uploaderHoursBehind;
Minify::setCache(
    isset($min_cachePath) ? $min_cachePath : ''
    ,$min_cacheFileLocking
);

if ($min_documentRoot) {
    $_SERVER['DOCUMENT_ROOT'] = $min_documentRoot;
    Minify::$isDocRootSet = true;
}

$min_serveOptions['minifierOptions']['text/css']['symlinks'] = $min_symlinks;
// auto-add targets to allowDirs
foreach ($min_symlinks as $uri => $target) {
    $min_serveOptions['minApp']['allowDirs'][] = $target;
}

if ($min_allowDebugFlag) {
    $min_serveOptions['debug'] = Minify_DebugDetector::shouldDebugRequest($_COOKIE, $_GET, $_SERVER['REQUEST_URI']);
}

if ($min_errorLogger) {
    if (true === $min_errorLogger) {
        $min_errorLogger = FirePHP::getInstance(true);
    }
    Minify_Logger::setLogger($min_errorLogger);
}

// check for URI versioning
if (preg_match('/&\\d/', $_SERVER['QUERY_STRING'])) {
    $min_serveOptions['maxAge'] = 31536000;
}
if (isset($_GET['g'])) {
    // well need groups config
    $min_serveOptions['minApp']['groups'] = (require MINIFY_MIN_DIR . '/groupsConfig.php');
}
if (isset($_GET['f']) || isset($_GET['g'])) {
    // serve!

    if (! isset($min_serveController)) {
        $min_serveController = new Minify_Controller_MinApp();
    }
//    vardump($min_serveController);
//    vardump($min_serveOptions);exit;
    Minify::serve($min_serveController, $min_serveOptions);

} elseif ($min_enableBuilder) {
    header('Location: builder/');
    exit();
} else {
    header("Location: /");
    exit();
}