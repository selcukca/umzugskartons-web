<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | PHP version 5                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 2009 SCALAN Internet solutions                         |
// +----------------------------------------------------------------------+
// | !!! DO NOT CHANGE !!!                                                |
// +----------------------------------------------------------------------+
// | Author: Selçuk C. Alan, SCALAN <selcuk.alan@scalan.de>               |
// +----------------------------------------------------------------------+
//
// $Id$


// +----------------------------------------------------------------------+
// | SYSTEM                                                               |
// +----------------------------------------------------------------------+
define("WAMP", strstr(PHP_OS, "WIN")? true : false);



// +----------------------------------------------------------------------+
// | SCRIPT_FILENAME                                                      |
// +----------------------------------------------------------------------+
if ((isset($_SERVER["ORIG_SCRIPT_FILENAME"], $_SERVER["DOCUMENT_ROOT"])) && (strpos($_SERVER["ORIG_SCRIPT_FILENAME"], $_SERVER["DOCUMENT_ROOT"]) === 0)) {
    $SCRIPT_FILENAME = pathformat($_SERVER["ORIG_SCRIPT_FILENAME"]);
} else {
    $SCRIPT_FILENAME = pathformat($_SERVER["SCRIPT_FILENAME"]);
}


// +----------------------------------------------------------------------+
// | PROJECT_SCRIPT + PROJECT_NAME                                        |
// +----------------------------------------------------------------------+
// | .htaccess:                                                           |
// | ----------                                                           |
// | <Files xxx>                                                          |
// |     ForceType application/x-httpd-php                                |
// | </Files>                                                             |
// |                                                                      |
// | RewriteEngine On                                                     |
// | #Dateien die exisitieren werden weitergleitet                        |
// | RewriteCond %{REQUEST_FILENAME} !-f                                  |
// |                                                                      |
// | #alle anderen Urls  werden auf Skript "de" weitergeleitet            |
// | RewriteCond $1 !^de                                                  |
// | RewriteRule ^(.*?)$ de/$1 [L]                                        |
// +----------------------------------------------------------------------+
if (!defined("PROJECT_SCRIPT")) {
    define("PROJECT_SCRIPT", (!strpos($sScript=basename($SCRIPT_FILENAME), ".php"))? $sScript : false);
}

if (!defined("PROJECT_NAME")) {
    define("PROJECT_NAME", PROJECT_SCRIPT);
}

if (!defined("REWRITE_ENGINE")) {
    define("REWRITE_ENGINE", false);
}

// +----------------------------------------------------------------------+
// | BASIC DIRECTORY                                                      |
// +----------------------------------------------------------------------+
define("INC_ROOT_DIR", format_dir(pathformat($_SERVER["DOCUMENT_ROOT"])));
define("WWW_ROOT_DIR", "/");
if (!defined("DEF_HOME_DIR")) {
    define("DEF_HOME_DIR", unformat_dir(format_dir(str_replace(INC_ROOT_DIR, "", format_dir(dirname($SCRIPT_FILENAME))))));
}
define("INC_HOME_DIR", INC_ROOT_DIR . DEF_HOME_DIR);
define("WWW_HOME_DIR", WWW_ROOT_DIR . DEF_HOME_DIR);
if (PROJECT_SCRIPT) {
    define("INC_PROJECT_HOME_DIR", INC_HOME_DIR . PROJECT_NAME . "/");
    if (REWRITE_ENGINE) {
        define("WWW_PROJECT_HOME_DIR", WWW_HOME_DIR);
    } else {
        define("WWW_PROJECT_HOME_DIR", WWW_HOME_DIR . PROJECT_SCRIPT . "/");
    }
}



// +----------------------------------------------------------------------+
// | LOCAL Time                                                           |
// +----------------------------------------------------------------------+
setlocale(LC_TIME, "de_DE.ISO_8859-1");

// +----------------------------------------------------------------------+
// | HTTP_HOST                                                            |
// +----------------------------------------------------------------------+
if ((!empty($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] !== 'off')) || ($_SERVER['SERVER_PORT'] == 443)) {
    define("HTTP_SCHEME", "https");
} else {
    define("HTTP_SCHEME", "http");
}
define("HTTP_HOST",   HTTP_SCHEME . "://" . $_SERVER["HTTP_HOST"]);

// +----------------------------------------------------------------------+
// | PEAR                                                                 |
// +----------------------------------------------------------------------+
define("INC_PEAR_DIR", INC_HOME_DIR . "class/pear/");

// +----------------------------------------------------------------------+
// | INCLUDE_PATH                                                         |
// +----------------------------------------------------------------------+
ini_set("include_path", INC_PEAR_DIR . PATH_SEPARATOR . INC_HOME_DIR . "class/scalan/" . PATH_SEPARATOR . INC_HOME_DIR . "class/");

// +----------------------------------------------------------------------+
// | Smarty Template Engine                                               |
// +----------------------------------------------------------------------+
// | Kürzel    erstellt Unterverzeichnisse korrespondierend zum ...       |
// | #home#    ... INC_HOME_DIR                                           |
// | #script#  ... PHP-Skript                                             |
// | #project# ... Projekt                                                |
// | #tmp#     ... INC_TMP_DIR oder INC_HOME_DIR . 'tmp/'                 |
// +----------------------------------------------------------------------+
//if (!defined("SMARTY_DIR"))             { define("SMARTY_DIR",           INC_HOME_DIR . "class/smarty/");   }
if (!defined("SMARTY_EXTENSION"))       { define("SMARTY_EXTENSION",     ".tpl.html");                      }
if (!defined("SMARTY_TEMPLATE_DIR"))    { define("SMARTY_TEMPLATE_DIR",  INC_HOME_DIR . "symbl/template/");       }
if (!defined("SMARTY_CONFIG_DIR"))      { define("SMARTY_CONFIG_DIR",    "#smarty##script#/");              }
if (!defined("SMARTY_CACHE_DIR"))       { define("SMARTY_CACHE_DIR",     "#tmp#smarty/cache/#script#/");    }
if (!defined("SMARTY_COMPILE_DIR"))     { define("SMARTY_COMPILE_DIR",   "#tmp#smarty/compile/#script#/");  }


// +----------------------------------------------------------------------+
// | DIRECTORY                                                            |
// +----------------------------------------------------------------------+
$aDirectory =
    array(
        "PREPEND"   => "symbl/prepend/",
        "CONTENT"   => "symbl/content/",
        "IMAGE"     => "symbl/image/",
        "CLASS"     => "symbl/class/",
        "MEDIA"     => "symbl/media/",
        "JS"        => "symbl/js/",
        "CSS"       => "symbl/css/",
        "SHARED"    => "symbl/content/shared/",
        "TMP"       => "symbl/tmp/"
    );

foreach ($aDirectory as $sName => $sDirectory) {
    define("DEF_{$sName}_DIR", $sDirectory);
    define("INC_{$sName}_DIR", INC_HOME_DIR . constant("DEF_{$sName}_DIR"));
    define("WWW_{$sName}_DIR", WWW_HOME_DIR . constant("DEF_{$sName}_DIR"));
    if (PROJECT_SCRIPT) {
        define("INC_PROJECT_{$sName}_DIR", constant("INC_{$sName}_DIR") . PROJECT_NAME . "/");
        define("WWW_PROJECT_{$sName}_DIR", constant("WWW_{$sName}_DIR") . (($sDirectory == "CONTENT")? PROJECT_SCRIPT : PROJECT_NAME). "/");
    }
}

// +----------------------------------------------------------------------+
// | FILENAME                                                             |
// +----------------------------------------------------------------------+
define("FILENAME_CONTENT",         "content.inc.php");
define("FILENAME_INIT_PAGE",       "init.page.inc.php");
define("FILENAME_INIT_CONSTANT",   "init.constant.inc.php");
define("FILENAME_INIT_DB",         "init.db.inc.php");
define("FILENAME_INIT_STATUS",     "init.status.inc.php");
define("FILENAME_INIT_TABLE",      "init.table.inc.php");
define("FILENAME_INIT_FORM_ERROR", "init.form.error.inc.php");
define("FILENAME_INIT_MESSAGE",    "init.message.inc.php");
define("FILENAME_INIT_CLASS",      "init.class.inc.php");
define("FILENAME_INIT_DEBUGGER",   "init.debugger.inc.php");
define("FILENAME_INIT_OBJECT",     "init.object.inc.php");
define("FILENAME_INIT_MEDIAFILE",  "init.mediafile.inc.php");
define("FILENAME_INIT_PROJECT",    "init.project.inc.php");
define("FILENAME_INIT_SESSION",    "init.session.inc.php");
define("FILENAME_INIT_AUTH",       "init.auth.inc.php");
define("FILENAME_INIT_STRUCTURE",  "init.structure.inc.php");
define("FILENAME_INIT_URL",        "init.url.inc.php");
define("FILENAME_INIT_FILENAME",   "init.filename.inc.php");
define("FILENAME_INIT_LANGUAGE",   "init.language.inc.php");
define("FILENAME_INIT_CLEARCACHE", "init.clearcache.inc.php");


// +----------------------------------------------------------------------+
// | KONSTANTEN                                                           |
// +----------------------------------------------------------------------+
define("CRLF",                "\n");
define("CRTB",                "\t");
define("PROJECT_NAVTABLE",    "project.navtable");
define("PROJECT_CAPTCHA",     "project.captcha");
define("PROJECT_TIMESTAMP",   "project.ts");
define("IMG_CONVERT_FACTOR",  "11.2");
define("PROJECT_HASH_LENGTH", "6");
define("REGEX_LABEL",         "/^(\w|\s|-|[ä-ü]|[Ä-Ü])*$/");
define("REGEX_EURO",          "/^(-){0,1}([0-9])+(\.[0-9]{3})*(,[0-9]{1,2}){0,1}$/");
define("REGEX_CONSTANT",      "/^(([A-Z]+)(_?)([A-Z]+|[0-9]+))*$/");

// +----------------------------------------------------------------------+
// | URL - DEFINITION                                                     |
// +----------------------------------------------------------------------+
define("URL_SEPARATOR",       ",");
define("URL_EXTENSION",       ".html");
define("URL_PARAMETER_COUNT", 4);

// +----------------------------------------------------------------------+
// | ARGV + ARGC                                                          |
// +----------------------------------------------------------------------+
$ARGV = $_URL = array();
if (isset($_SERVER["PATH_INFO"])) {
    $pInfo = array_slice(explode("/", format_dir($_SERVER["PATH_INFO"])), 1, -1);
} elseif (isset($_SERVER["ORIG_PATH_INFO"])) {
    $pInfo = array_slice(explode("/", format_dir($_SERVER["ORIG_PATH_INFO"])), 1, -2);
} elseif (isset($_SERVER["REQUEST_URI"])) {
    $pInfo = array();
    //$pInfo = array_slice(explode("/", format_dir(str_replace(WWW_HOME_DIR, "", format_dir($_SERVER["REQUEST_URI"])))), 1, -1);
} else {
    $pInfo = array();
}


$sDir = (PROJECT_SCRIPT)? INC_PROJECT_CONTENT_DIR : INC_CONTENT_DIR;
$bIsDir = true;
foreach ($pInfo as $arg) {
    $sDir = format_dir($sDir);
    if ($bIsDir && (is_dir($sDir . $arg))) {
        $sDir .= $arg;
    } else {
        $bIsDir = false;
        $ARGV[] = $arg;
    }
}
if ($iCnt=count($ARGV)) {
    if (false !== $iP=strpos($ARGV[$iCnt-1], URL_EXTENSION)) {
        $_URL = (count($aTmp=explode(URL_SEPARATOR, substr($_last = array_pop($ARGV), 0, $iP))) == URL_PARAMETER_COUNT)? $aTmp : false;
        if (!$_URL) {
            $_URL = array();
            $ARGV[] = $_last;
        }
    }
}
$ARGC = count($ARGV);


define("WWW_ARGV",       ($ARGC? format_dir(implode("/",$ARGV)) : ""));
define("INC_SCRIPT_DIR", format_dir($sDir));
if (PROJECT_SCRIPT) {
    if (REWRITE_ENGINE) {
        define("WWW_SCRIPT_DIR", str_replace(INC_PROJECT_CONTENT_DIR, WWW_PROJECT_HOME_DIR , INC_SCRIPT_DIR));
    } else {
        define("WWW_SCRIPT_DIR", str_replace(INC_PROJECT_CONTENT_DIR, WWW_HOME_DIR . PROJECT_SCRIPT . "/", INC_SCRIPT_DIR));
    }
} else {
    define("WWW_SCRIPT_DIR", str_replace(INC_CONTENT_DIR, WWW_HOME_DIR, INC_SCRIPT_DIR));
}

// +----------------------------------------------------------------------+
// | URL                                                                  |
// +----------------------------------------------------------------------+
// | URL_*, URL_*_DEFAULT, URL_*_WCARD, URL_*_VALUE                       |
// | INFO: name, default-wert, typcasting, regular-expression             |
// +----------------------------------------------------------------------+
$maParameter =
    array(
        "parameter" =>
            array(
                "MENU"  => array("fk_menu", "0",   "int",    "^([0-9]*)$"),
                "EXTRA" => array("extra",   "0",   "string", null),
                "VIEW"  => array("view",    "0",   "int",    "^(0|1|2|3)$"),
                "PAGE"  => array("page",    "1",   "int",    "^([1-9]{1})([0-9]*)$"),
                "REF"   => array("ref",     false, "int",    "^([0-9]*)$"),
                "TK"    => array("tk",      "0",   "int",    "^(0|1|2)$")
            ),
        "url" =>
            array()
    );

foreach ($maParameter["parameter"] as $sConst => $aP) {
    define("URL_{$sConst}",         $aP[0]);
    define("URL_{$sConst}_DEFAULT", $aP[1]);

    $iP = array_search($sConst, $maParameter["url"]);

    $sQuery = ($iP !== false)? "__{$sConst}__" : constant("URL_{$sConst}") . "=";
    $sValue = ($iP !== false)? ((isset($_GET[constant("URL_{$sConst}")]))? $_GET[constant("URL_{$sConst}")] : ((isset($_URL[$iP]))? $_URL[$iP] : $aP[1])) : ((isset($_GET[constant("URL_{$sConst}")]))? $_GET[constant("URL_{$sConst}")] : $aP[1]);

    // regular expression
    if (isset($aP[3])) {
        if (!preg_match("/" . $aP[3] . "/i", $sValue)) {
        //if (@eregi($aP[3], $sValue) == false) {
            $sValue = $aP[1];
        }
    }
    // typumwandlung
    if (isset($aP[2])) {
        eval("\$sValue = ($aP[2])\$sValue;");
    }

    define("URL_{$sConst}_WCARD", $sQuery);
    define("URL_{$sConst}_VALUE", $sValue);
}

// +----------------------------------------------------------------------+
// | URL-QUERY                                                            |
// +----------------------------------------------------------------------+
$maQuery =
    array(

        "GET_QUERY"            => array(array(),                             array("REF", "TK", "VIEW")),
        "GET_QUERY_WITHOUT_PARAMS"            => array(array(),                             array()),
        "GET_QUERY_MENU"       => array(array("MENU"),                       array("REF", "TK")),
        "GET_QUERY_MENU_EXTRA" => array(array("MENU","EXTRA"),               array("REF", "TK")),
        "GET_QUERY_EXTRA"      => array(array("EXTRA"),                      array("REF", "TK")),
        "GET_QUERY_VIEW"       => array(array(),                             array("REF", "TK", "VIEW")),
        "GET_QUERY_PAGE"       => array(array("PAGE"),                       array("REF", "TK")),
        "GET_QUERY_BASE"       => array(array("MENU","EXTRA","PAGE","VIEW"), array("REF", "TK"))
    );

foreach ($maQuery as $query => $maV) {
    $aTmp0 = $aTmp1 = array();
    if (is_array($maV[0])) {
        foreach ($maParameter["url"] as $sC) {
            $aTmp0[] = (in_array($sC, $maV[0]))? constant("URL_{$sC}_WCARD") : constant("URL_{$sC}_VALUE");
        }
    }
    if (is_array($maV[1])) {
        foreach ($maV[1] as $sC) {
            if ((defined("URL_{$sC}")) && (constant("URL_{$sC}_VALUE"))) {
                $aTmp1[] = constant("URL_{$sC}") . "=" . constant("URL_{$sC}_VALUE");
            }
        }
    }
    define($query, ((count($aTmp0))? implode(URL_SEPARATOR, $aTmp0) . URL_EXTENSION : false) . ((count($aTmp1))? "?" . implode("&", $aTmp1) : false));
}

// +----------------------------------------------------------------------+
// | Funktionen                                                           |
// +----------------------------------------------------------------------+
function pathformat($dir)
{
    return (WAMP)? str_replace("\\", "/", realpath($dir)) : $dir;
}

function format_dir($sDir)
{
    return (substr($sDir, strlen($sDir)-1) != "/")? $sDir . "/" : $sDir;
}

function unformat_dir($sDir)
{
    return (substr($sDir, 0, 1) == "/")? substr($sDir, 1) : $sDir;
}

function format_query($sQuery)
{
    if (false !== $iP=strpos($sQuery, "?")) {
        $iLast = strlen($sQuery) - 1;
        if (($iP != $iLast) && ((substr($sQuery, $iLast)) != "&")) {
            $sQuery .= "&";
        }
    } else {
        $sQuery .= "?";
    }
    return $sQuery;
}

function vardump($variabel)
{

    $args = func_get_args();
    call_user_func_array( array( 'Kint', 'dump' ), $args );

}

function getConstant_template()
{
    return
        array(
            "GET_QUERY","GET_QUERY_BASE","GET_QUERY_EXTRA","GET_QUERY_MENU",
            "GET_QUERY_MENU_EXTRA","GET_QUERY_PAGE","GET_QUERY_VIEW","HTTP_HOST",
            "INC_CLASS_DIR","INC_CONTENT_DIR","INC_CSS_DIR","INC_FCKEDITOR_DIR",
            "INC_HOME_DIR","INC_IMAGE_DIR","INC_JS_DIR","INC_MEDIA_DIR",
            "INC_PREPEND_DIR","INC_PROJECT_CLASS_DIR","INC_PROJECT_CONTENT_DIR","INC_PROJECT_CSS_DIR",
            "INC_PROJECT_FCKEDITOR_DIR","INC_PROJECT_HOME_DIR","INC_PROJECT_IMAGE_DIR","INC_PROJECT_JS_DIR",
            "INC_PROJECT_MEDIA_DIR","INC_PROJECT_PREPEND_DIR","INC_PROJECT_SHARED_DIR","INC_PROJECT_TMP_DIR",
            "INC_ROOT_DIR","INC_SCRIPT_DIR","INC_SHARED_DIR","INC_TMP_DIR",
            "PROJECT_NAME","PROJECT_SCRIPT","URL_EXTRA","URL_EXTRA_DEFAULT",
            "URL_EXTRA_VALUE","URL_EXTRA_WCARD","URL_MENU","URL_MENU_DEFAULT",
            "URL_MENU_VALUE","URL_MENU_WCARD","URL_PAGE","URL_PAGE_DEFAULT",
            "URL_PAGE_VALUE","URL_PAGE_WCARD","URL_REF","URL_REF_DEFAULT",
            "URL_REF_VALUE","URL_REF_WCARD","URL_VIEW","URL_VIEW_DEFAULT",
            "URL_VIEW_VALUE","URL_VIEW_WCARD","WWW_ARGV","WWW_CLASS_DIR",
            "WWW_CONTENT_DIR","WWW_CSS_DIR","WWW_FCKEDITOR_DIR","WWW_HOME_DIR",
            "WWW_IMAGE_DIR","WWW_JS_DIR","WWW_MEDIA_DIR","WWW_PREPEND_DIR",
            "WWW_PROJECT_CLASS_DIR","WWW_PROJECT_CONTENT_DIR","WWW_PROJECT_CSS_DIR","WWW_PROJECT_FCKEDITOR_DIR",
            "WWW_PROJECT_HOME_DIR","WWW_PROJECT_IMAGE_DIR","WWW_PROJECT_JS_DIR","WWW_PROJECT_MEDIA_DIR",
            "WWW_PROJECT_PREPEND_DIR","WWW_PROJECT_SHARED_DIR","WWW_PROJECT_TMP_DIR","WWW_ROOT_DIR",
            "WWW_SCRIPT_DIR","WWW_SHARED_DIR","WWW_TMP_DIR",

            "URL_TK","URL_TK_DEFAULT", "URL_TK_VALUE","URL_TK_WCARD"
        );
}
?>