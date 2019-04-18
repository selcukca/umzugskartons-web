<?php

// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$content = $smarty->getTemplateVars("content");
$AUTH    = $smarty->getTemplateVars(\Symbl\Cms\Smarty::AUTH);



// +----------------------------------------------------------------------+
// | \Cnx\Form                                                            |
// +----------------------------------------------------------------------+
$oF = new \Cnx\Form($paths = dirname(__FILE__) . "/contact.form/", $basepath = null);

foreach ($oF->getFilelist() as $file) {
    include($file);
}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
\Cnx\Template::assignQuickForm($smarty, $oF, 'form');

