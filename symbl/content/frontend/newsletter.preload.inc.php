<?php

// +----------------------------------------------------------------------+
// | Minify                                                               |
// +----------------------------------------------------------------------+
$PAGE->setMinify(false);


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oNewsletter = new \Symbl\Db\Table\Cms\TdtaNewsletter($DB);


if ((isset($_GET["nl"])) && ($oNewsletter->load($_GET["nl"]))) {

    // +----------------------------------------------------------------------+
    // | Content                                                              |
    // +----------------------------------------------------------------------+
    $CONTENT_DATA_START_IDENT   = "NEWSLETTER_CONTENT";
    $CONTENT_DATA_START_ID      = $oNewsletter->id;
    $CONTENT_DATA_START_VERSION = 0;

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    $fTpl_frame = "newsletter.tpl.html";


    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    $oTpl_frame->assign("oNewsletter", $oNewsletter);

} else {

    $ROUTE->datatype->data->ident = "standard";

}


// +----------------------------------------------------------------------+
// | Inhalte                                                              |
// +----------------------------------------------------------------------+
include($INC_SCRIPT_DIR . "index.data.inc.php");


