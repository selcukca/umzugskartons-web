<?php



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oHolder = new \Symbl\Db\Table\Cms\TdtaNewsblog\Holder($DB);



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ($oHolder->loadFirstBy("CONCAT(ident, '/') = ?", array(WWW_ARGV))) {

    $CONTENT_DATA_START_IDENT   = "NEWSBLOG_CONTENT";
    $CONTENT_DATA_START_ID      = $oHolder->data->id;
    $CONTENT_DATA_START_VERSION = 0;

    $PAGE["langredirect"] = "&argv={$oHolder->data->ident}";
}


// +----------------------------------------------------------------------+
// | standard                                                             |
// +----------------------------------------------------------------------+
include(dirname(__FILE__) . "/standard.preload.inc.php");

