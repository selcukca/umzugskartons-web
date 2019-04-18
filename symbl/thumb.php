<?php

// +----------------------------------------------------------------------+
// | PROJECT_SCRIPT                                                       |
// +----------------------------------------------------------------------+
define("PROJECT_SCRIPT", "thumb");

// +----------------------------------------------------------------------+
// | Memory Limit                                                         |
// +----------------------------------------------------------------------+
ini_set("memory_limit", "256M");


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
$oIncluder->addPath(INC_PREPEND_DIR);

$oIncluder->addFile(FILENAME_INIT_MEDIAFILE);        // MediaFile initialisieren

foreach ($oIncluder->getFilelist() as $_file) {
    require_once($_file);
}


// +----------------------------------------------------------------------+
// | CONTENT                                                              |
// +----------------------------------------------------------------------+
if (file_exists($incFile = INC_SCRIPT_DIR . FILENAME_CONTENT)) {
    include $incFile;
} else {
    include INC_PROJECT_CONTENT_DIR . FILENAME_CONTENT;
}


// +----------------------------------------------------------------------+
// | URL - Auswertung                                                     |
// +----------------------------------------------------------------------+
if ((isset($_GET["src"])) && (file_exists($file = \Cnx\MediaFile::$INC_MEDIA_DIR . $_GET["src"]))) {

    $oFile = new \Cnx\MediaFile($file, null, \Cnx\MediaFile::getMimeType($file));


} else {

    $oFile = new \Cnx\MediaFile($file = \Cnx\MediaFile::$INC_ICON_DIR . "default.png", null, \Cnx\MediaFile::getMimeType($file));

}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (!$oFile->isImage()) {

    if (!file_exists($file = \Cnx\MediaFile::$INC_ICON_DIR . $oFile->getExtension() . ".png")) {
        $file = \Cnx\MediaFile::$INC_ICON_DIR . "default.png";
    }

    $oFile = new \Cnx\MediaFile($file, null, \Cnx\MediaFile::getMimeType($file));

}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$cachefile = \Cnx\File\Cache::generate(INC_TMP_DIR . "thumbnails/", $file, $_GET, array("src", "tk"));

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$b_cache = (defined("URL_TK_VALUE"))? ((URL_TK_VALUE)? false : true) : true;


if ($b_cache && (file_exists($cachefile))) {

    $last_modified = filemtime($cachefile);
    $etag          = md5_file($cachefile);


    header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified) . " GMT");
    header("Etag: {$etag}");

    if ((@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_modified) || (isset($_SERVER['HTTP_IF_NONE_MATCH']) && (trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag))) {
        header("HTTP/1.1 304 Not Modified");
        exit;
    }

    header("Content-type: {$oFile->getMediaType()}");
    echo file_get_contents($cachefile);
    exit;

} else {

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    $oThumb = new \Imagick($file);


    // +----------------------------------------------------------------------+
    // | Thumbnail - Größe                                                    |
    // +----------------------------------------------------------------------+
    if (isset($_GET["wh"])) {
        @list($w, $h) = explode("|", $_GET["wh"]);

        settype($w, "integer");
        settype($h, "integer");

        $h = ($h>0)? $h : $w;

        $oThumb->cropThumbnailImage($w, $h);

    } elseif (isset($_GET["w"], $_GET["h"])) {

        $oThumb->resize((int)$_GET['w'], (int)$_GET['h']);

    } elseif (isset($_GET["w"])) {

        //$oThumb->adaptiveResizeImage((int)$_GET['w'], 0, false);
        $oThumb->scaleImage((int)$_GET['w'], 0, false);

    } elseif (isset($_GET["h"])) {

        //$oThumb->adaptiveResizeImage(0, (int)$_GET['h'], false);
        $oThumb->scaleImage(0, (int)$_GET['h'], false);

    } elseif (isset($_GET["percent"])) {

        $oThumb->resizePercent((int)$_GET["percent"]);
    }

    if (isset($_GET["whm"])) {
        @list($w, $h, $color) = explode("|", $_GET["whm"]);

        settype($w, "integer");
        settype($h, "integer");

        $h = ($h>0)? $h : $w;

        //$oThumb->setBackgroundColor(new ImagickPixel('transparent'));
        $oThumb->thumbnailImage($w, $h, true, true);


    }


    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    $oThumb->transformImageColorspace(Imagick::COLORSPACE_RGB);


    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    header("Content-Type: {$oThumb->getImageMimeType()}");
    $oThumb->writeImage($cachefile);
    echo $oThumb->getImageBlob();
    exit;

}



