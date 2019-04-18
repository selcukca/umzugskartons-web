<?php



// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$content = $smarty->getTemplateVars("content");
$I18N    = $smarty->getTemplateVars("I18N");
$USER    = $smarty->getTemplateVars("USER");
$STRUCTURE  = $smarty->getTemplateVars("STRUCTURE");
$DB         = \Cnx\Db::getInstance();


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$BASKET     = $_SESSION[REAL_PROJECT_NAME]["BASKET"];
$PACKAGE    = $BASKET["PACKAGE"];
$COUPON     = $BASKET["COUPON"];
$PERIOD     = $BASKET["PERIOD"];
$PERIODLIST = \Cnx\Db\Table::factory($DB, TB_FIX_RELOCATION_PACKAGE_PERIOD)->getListIterator("WHERE fk_status=3 ORDER BY score");

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ((isset($_GET["fk_period"])) && (isset($PERIODLIST[$_GET["fk_period"]]))) {
    $_SESSION[REAL_PROJECT_NAME]["BASKET"]["PERIOD"] = $PERIOD = $PERIODLIST[$_GET["fk_period"]];
}
if (is_null($PERIOD)) {
    $_SESSION[REAL_PROJECT_NAME]["BASKET"]["PERIOD"] = $PERIOD = $PERIODLIST->getFirst();
}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oCoupon = \Cnx\Db\Table::factory($DB, TB_BASKET_COUPON, false);


// +----------------------------------------------------------------------+
// | \Cnx\Form                                                            |
// +----------------------------------------------------------------------+
$oF = new \Cnx\Form($paths = dirname(__FILE__) . "/basket.form/", $basepath = null);

foreach ($oF->getFilelist() as $file) {
    include($file);
}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ($oF->isFrozen()) {

    if (\Cnx\Form::isClicked($_POST, "btn_submit")) {
        $url = $STRUCTURE["ORDER"]->linkto->getUrl();
    } else {
        $url = WWW_SCRIPT_DIR . WWW_ARGV;
    }


    header("Location: {$url}");
    exit;

} else {


    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    \Cnx\Template::assignQuickForm($smarty, $oF, 'form');

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    $smarty->assign("basket", $calculation = $PACKAGE->data->calculate($USER->relocation->country, $PERIOD, $COUPON));

    //vardump("calculation", $calculation);

}