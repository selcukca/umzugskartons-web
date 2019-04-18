<?php



// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$content = $smarty->getTemplateVars("content");
$I18N    = $smarty->getTemplateVars("I18N");
$USER    = $smarty->getTemplateVars("USER");
$STRUCTURE  = $smarty->getTemplateVars("STRUCTURE");




// +----------------------------------------------------------------------+
// | \Cnx\Form                                                            |
// +----------------------------------------------------------------------+
$oF = new \Cnx\Form($paths = dirname(__FILE__) . "/registration.short/", $basepath = null);

foreach ($oF->getFilelist() as $file) {
    include($file);
}




// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
\Cnx\Template::assignQuickForm($smarty, $oF, 'form');

