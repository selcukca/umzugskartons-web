<?php


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oTpl_frame->assign("oPackage", $oPackage = $routeInfo["data"]["package"]);


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
//$CONTENT_DATA_START_IDENT   = "PACKAGE";
//$CONTENT_DATA_START_ID      = $oPackage->id;
//$CONTENT_DATA_START_VERSION = 0;

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$PAGE["title"]      = $oPackage->title;
$ROUTE->lang->title = $oPackage->title;
$ROUTE->lang->url   = $oPackage->ident;


// +----------------------------------------------------------------------+
// | Inhalte                                                              |
// +----------------------------------------------------------------------+
include($INC_SCRIPT_DIR . "index.data.inc.php");
