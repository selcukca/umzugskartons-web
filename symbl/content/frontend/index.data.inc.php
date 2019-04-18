<?php


// +----------------------------------------------------------------------+
// | Content                                                              |
// +----------------------------------------------------------------------+
if ((!isset($CONTENT_DATA_START_IDENT)) || (!isset($CONTENT_DATA_START_ID))) {
    $CONTENT_DATA_START_IDENT   = "TB_STRUCTURE";
    $CONTENT_DATA_START_ID      = $ROUTE->getId();
    $CONTENT_DATA_START_VERSION = 0;
}


// +----------------------------------------------------------------------+
// | Container                                                            |
// +----------------------------------------------------------------------+
if ((!isset($CONTAINER_DATA_START_IDENT)) || (!isset($CONTAINER_DATA_START_ID))) {
    $CONTAINER_DATA_START_IDENT = "TB_STRUCTURE";
    $CONTAINER_DATA_START_ID    = $ROUTE->getId();

}
//$CONTAINER_DATA_START_ID    = 54;




// +----------------------------------------------------------------------+
// | Seiten-Elemente laden                                                |
// +----------------------------------------------------------------------+
try {

    $PAGE["module"]    = \Cnx\Db\Table::factory($DB, TB_DATA)         ->getDataIterator($CONTENT_DATA_START_IDENT,   $CONTENT_DATA_START_ID, "score", array( array("version" => $CONTENT_DATA_START_VERSION)));
    $PAGE["container"] = \Cnx\Db\Table::factory($DB, TB_REL_CONTAINER)->getDataIterator($CONTAINER_DATA_START_IDENT, $CONTAINER_DATA_START_ID);


    $js  = array_merge($PAGE["module"]->getJavaScript("module/"), $PAGE["container"]->getJavaScript("container/"));
    $css = array_merge($PAGE["module"]->getCss("module/"), $PAGE["container"]->getCss("container/") );


} catch (\Exception $oEx) {
    \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__, $DB->last_query);
}


// +----------------------------------------------------------------------+
// | JavaScript                                                           |
// +----------------------------------------------------------------------+
foreach (array_unique($js) as $file) {
    if (file_exists(INC_PROJECT_JS_DIR . $file)) {
        $PAGE["javascript"][] = WWW_PROJECT_JS_DIR . $file;
    }
}

// +----------------------------------------------------------------------+
// | CSS                                                                  |
// +----------------------------------------------------------------------+
foreach (array_unique($css) as $file) {
    if (file_exists(INC_PROJECT_CSS_DIR . $file)) {
        $PAGE["css"][] = WWW_PROJECT_CSS_DIR . $file;
    }
}




// +----------------------------------------------------------------------+
// | Template - Initialisierung                                           |
// +----------------------------------------------------------------------+
$oTpl = clone($oTpl_frame);
$fTpl = \Cnx\Template::assignMethods($oTpl, __FILE__, false);



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
try {

    if (file_exists($tplFile = dirname($fTpl) . "/{$ROUTE->datatype->data->ident}.content.tpl.html")) {
        $fTpl = $tplFile;
    } else {
        $fTpl = dirname($fTpl) . "/standard.content.tpl.html";
    }

    if (file_exists($incFile = $INC_SCRIPT_DIR . "{$ROUTE->datatype->data->ident}.content.inc.php")) {
        include($incFile);
    }

} catch (\Exception $oEx) {
    \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__, $DB->last_query);
}



// +----------------------------------------------------------------------+
// | Template - Ausgabe                                                   |
// +----------------------------------------------------------------------+
$PAGE["content"] .= $oTpl->fetch($fTpl);

