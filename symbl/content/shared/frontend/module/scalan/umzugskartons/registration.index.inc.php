<?php

// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$content   = $smarty->getTemplateVars("content");
$I18N      = $smarty->getTemplateVars("I18N");
$USER      = $smarty->getTemplateVars("USER");
$STRUCTURE = $smarty->getTemplateVars("STRUCTURE");
$DB        = \Cnx\Db::getInstance();
$AUTH    = $smarty->getTemplateVars(\Symbl\Cms\Smarty::AUTH);


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (isset($_GET["identity"])) {

    if ($USER->relocation->loadByIdentity($_GET["identity"])) {

        //vardump("HIER", $USER->relocation->toArray());

    } else {

    }



}

// +----------------------------------------------------------------------+
// | \Cnx\Form                                                            |
// +----------------------------------------------------------------------+
$oF = new \Cnx\Form($paths = dirname(__FILE__) . "/registration.form/", $basepath = null);

foreach ($oF->getFilelist() as $file) {
    include($file);
}



if ($oF->isFrozen()) {

    header("Location: " . $STRUCTURE["ORDER"]->linkto->getUrl());
    //header("Location: " . $STRUCTURE["REGISTRATION_MAIL"]->linkto->getUrl());
    exit;

} else {

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    \Cnx\Template::assignQuickForm($smarty, $oF, 'form');

}

