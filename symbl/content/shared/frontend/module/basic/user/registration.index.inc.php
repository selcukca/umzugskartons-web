<?php

// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$content = $smarty->getTemplateVars("content");
$AUTH    = $smarty->getTemplateVars(\Symbl\Cms\Smarty::AUTH);

$config  = $smarty->getTemplateVars("config");



// +----------------------------------------------------------------------+
// | \Cnx\Form                                                            |
// +----------------------------------------------------------------------+
$oF = new \Cnx\Form($paths = dirname(__FILE__) . "/registration.form/", $basepath = null);

foreach ($oF->getFilelist() as $file) {
    include($file);
}



if ($oF->isFrozen()) {

    header("Location: " . WWW_SCRIPT_DIR . WWW_ARGV . "?saved={$content->id}");
    exit;


} else {

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    \Cnx\Template::assignQuickForm($smarty, $oF, 'form');

}
