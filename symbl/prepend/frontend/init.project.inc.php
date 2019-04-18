<?php

use \Symbl\Db\Table\Scalan\Umzugskartons\Helper;


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$USER->registerObj( new Helper\User("relocation", $DB) );


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ($AUTH->getAuth()) {
    $AUTH->setAuthData("fk_orders", $a =$USER->relocation->orders->toSession());
    if ($USER->relocation->orders->has("premium")) {

        if (isset($STRUCTURE[43])) {
            $STRUCTURE[43]->data->visibletype = 1; //online, sichtbar
        }

    }
} else {


    // +----------------------------------------------------------------------+
    // | Aktuelle Sprache                                                     |
    // +----------------------------------------------------------------------+
    if (isset($_GET["fk_country"], $COUNTRIES[$_GET["fk_country"]])) {
        $_SESSION[REAL_PROJECT_NAME]["COUNTRY"] = $COUNTRIES[$_GET["fk_country"]];
    }
    $USER->relocation->country = $_SESSION[REAL_PROJECT_NAME]["COUNTRY"]->data;
}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$I18N["dateformat[date]"]       = "%d.%m.%Y";


// +----------------------------------------------------------------------+
// | Layout                                                               |
// +----------------------------------------------------------------------+
$PAGE["layout"]    = \Cnx\Db\Table::factory($DB, TB_DATA)         ->getDataIterator("TB_SETTING", 0)->reindex("ident");

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (isset($PAGE["layout"]["meta"])) {
    $PAGE["layout"]["meta"]->holder->toPage($PAGE);
}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ($AUTH->getAuth() || $_SESSION[REAL_PROJECT_NAME]["BASKET"]["PACKAGE"]) {
    $STRUCTURE["AGB_REDIRECT"]->data->visibletype = 3; //online, sichtbar, Weiterleitung
}




// +----------------------------------------------------------------------+
// | Sprache                                                              |
// +----------------------------------------------------------------------+
if (($LANGUAGES->count() > 1) && (LANG_IDENT != PROJECT_SCRIPT)) {


    $url = str_replace(WWW_PROJECT_HOME_DIR , WWW_HOME_DIR . LANG_IDENT . "/", WWW_SCRIPT_DIR) . WWW_ARGV;


    if (count($_GET)) {
        $url = format_query($url) . http_build_query($_GET, '', '&');
    }


    if (isset($_GET["redirect"])) {

        @list($fk_menu) = explode("|", $_GET["redirect"]);
        settype($fk_menu, "integer");

        if ($route = $STRUCTURE[$fk_menu]) {
            $url = $route->getLink()->getUrl($query=true, $host = false, $path = WWW_HOME_DIR . LANG_IDENT . "/");
        }

        // +----------------------------------------------------------------------+
        // |                                                                      |
        // +----------------------------------------------------------------------+
        if (isset($_GET["argv"])) {
            $url = format_dir(format_dir($url) . $_GET["argv"]);
        }

        // +----------------------------------------------------------------------+
        // |                                                                      |
        // +----------------------------------------------------------------------+
        if (isset($_GET["type"])) {

            // +----------------------------------------------------------------------+
            // |                                                                      |
            // +----------------------------------------------------------------------+
            //if (($_GET["type"] == "category") && (isset($_GET["category"], $_SESSION[PROJECT_NAME]["CATEGORY"][$_GET["category"]]))) {
            //
            //    $url = format_dir(format_dir($url) . $_SESSION[PROJECT_NAME]["CATEGORY"][$_GET["category"]]["url"]);
            //
            //}



        }

    }



    header('HTTP/1.1 301 Moved Permanently');
    header("Location: " . $url);
    exit;

}

