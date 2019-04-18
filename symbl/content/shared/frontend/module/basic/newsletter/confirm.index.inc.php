<?php

use \Cnx\Db as Db;


// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$content = $smarty->getTemplateVars("content");


// +----------------------------------------------------------------------+
// | \Cnx\Db\Table - Initialisierung                                      |
// +----------------------------------------------------------------------+
try {
    $oTable = Db\Table::factory(Db::getInstance(), TB_NEWSLETTER_USER);
} catch (\Exception $oEx) {
    \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__);
}


// +----------------------------------------------------------------------+
// | \Cnx\Form                                                            |
// +----------------------------------------------------------------------+
$oF = new \Cnx\Form($paths = dirname(__FILE__) . "/confirm.form/", $basepath = null);

foreach ($oF->getFilelist() as $file) {
    include($file);
}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
\Cnx\Template::assignQuickForm($smarty, $oF, 'form');

