<?php

// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$content = $smarty->getTemplateVars("content");
$AUTH    = $smarty->getTemplateVars(\Symbl\Cms\Smarty::AUTH);
$USER    = $smarty->getTemplateVars(\Symbl\Cms\Smarty::USER);
$I18N    = $smarty->getTemplateVars("I18N");
$config  = $smarty->getTemplateVars("config");
$STRUCTURE = $smarty->getTemplateVars("STRUCTURE");



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (isset($_GET["hash"])) {

    if (($USER->loadByUuid($_GET["hash"], $valid, $ts)) && $valid && ($USER->fk_status == STATUS_ONLINE)) {

        $maxDifference = 60 * 60 * 12; // 12 stunden

        if ((time() - $ts) >= $maxDifference) {
            $USER->reset();
        }


    } else {
        $USER->reset();
    }


}



// +----------------------------------------------------------------------+
// | \Cnx\Form                                                            |
// +----------------------------------------------------------------------+
$oF = new \Cnx\Form($paths = dirname(__FILE__) . "/pwd.change.form/", $basepath = null);

foreach ($oF->getFilelist() as $file) {
    include($file);
}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+


if ($oF->isFrozen()) {

    header("Location: " . WWW_SCRIPT_DIR . WWW_ARGV . "?saved={$content->id}");
    exit;


} else {

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    \Cnx\Template::assignQuickForm($smarty, $oF, 'form');

}
