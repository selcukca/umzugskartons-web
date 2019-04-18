<?php



// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$content = $smarty->getTemplateVars("content");
$I18N    = $smarty->getTemplateVars("I18N");
$AUTH    = $smarty->getTemplateVars("AUTH");
$USER    = $smarty->getTemplateVars("USER");
$STRUCTURE  = $smarty->getTemplateVars("STRUCTURE");
$DB         = \Cnx\Db::getInstance();


// +----------------------------------------------------------------------+
// | \Cnx\Form                                                            |
// +----------------------------------------------------------------------+
$oF = new \Cnx\Form($paths = dirname(__FILE__) . "/account.form/", $basepath = null);

foreach ($oF->getFilelist() as $file) {
    include($file);
}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ($oF->isFrozen()) {

    header("Location:" . WWW_SCRIPT_DIR . WWW_ARGV . "?saved");
    exit;

} else {

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    \Cnx\Template::assignQuickForm($smarty, $oF, 'form');

}

