<?php

// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$AUTH    = $smarty->getTemplateVars(\Symbl\Cms\Smarty::AUTH);
$oTable  = $smarty->getTemplateVars("table");



// +----------------------------------------------------------------------+
// | \Cnx\Db\Table - Initialisierung                                      |
// +----------------------------------------------------------------------+
try {
    $oComment = \Cnx\Db\Table::factory(\Cnx\Db::getInstance(), TB_COMMENT);
} catch (\Exception $oEx) {
    \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__);
}


// +----------------------------------------------------------------------+
// | \Cnx\Form                                                            |
// +----------------------------------------------------------------------+
$oF = new \Cnx\Form($paths = dirname(__FILE__) . "/comment.form/", $basepath = null);

foreach ($oF->getFilelist() as $file) {
    include($file);
}



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
\Cnx\Template::assignQuickForm($smarty, $oF, 'form');

