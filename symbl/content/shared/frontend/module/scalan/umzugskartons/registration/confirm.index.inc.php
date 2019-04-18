<?php

// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$content = $smarty->getTemplateVars("content");
$AUTH    = $smarty->getTemplateVars(\Symbl\Cms\Smarty::AUTH);
$I18N    = $smarty->getTemplateVars(\Symbl\Cms\Smarty::I18N);
$STRUCTURE = $smarty->getTemplateVars("STRUCTURE");


// +----------------------------------------------------------------------+
// | \Cnx\Db\Table - Initialisierung                                      |
// +----------------------------------------------------------------------+
$oTable = $AUTH->getStorage()->getDbTable();


// +----------------------------------------------------------------------+
// | \Cnx\Form                                                            |
// +----------------------------------------------------------------------+
$oF = new \Cnx\Form($paths = dirname(__FILE__) . "/confirmation.form/", $basepath = null);

foreach ($oF->getFilelist() as $file) {

    include($file);
}



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
\Cnx\Template::assignQuickForm($smarty, $oF, 'form');



