<?php

/**
 *
 */
function json_errorHandler($oEvent)
{

    if ($oEvent->getOriginal() instanceof \Cnx\Db\StatementException) {
        $result = array("error" => "the administrator is informed.");
    } else {
        $result = array("error" => $oEvent->getMessage());
    }

    header("HTTP/1.1 400 BadRequest");
    echo json_encode($result);
    exit;

}


// +----------------------------------------------------------------------+
// | Debugger: Callback(s)                                                |
// +----------------------------------------------------------------------+
// | EMERG -> Programmabbruch                                             |
// +----------------------------------------------------------------------+
\Cnx\Debugger::setCallback(\Cnx\Debugger::EMERG, 'json_errorHandler');
\Cnx\Debugger::setCallback(\Cnx\Debugger::ERR,   'json_errorHandler');



// +----------------------------------------------------------------------+
// | result                                                               |
// +----------------------------------------------------------------------+
$result = array();



// +----------------------------------------------------------------------+
// | Preload                                                              |
// +----------------------------------------------------------------------+
if (file_exists($incFile = INC_SCRIPT_DIR . "preload.inc.php")) {
    include($incFile);
}


// +----------------------------------------------------------------------+
// | Skript - Auswahl                                                     |
// +----------------------------------------------------------------------+
if ((isset($ARGV[0])) && (file_exists($incFile = INC_SCRIPT_DIR . "content.{$ARGV[0]}.inc.php"))) {
    include($incFile);
} elseif ((isset($ARGV[0])) && ($ARGV[0] == "ajax")) {
    include(__DIR__ . "/content.ajax.inc.php");
} elseif (file_exists($incFile = INC_SCRIPT_DIR . "content.index.inc.php")) {
    include($incFile);
}



// +----------------------------------------------------------------------+
// | Postload                                                             |
// +----------------------------------------------------------------------+
if (file_exists($incFile = INC_SCRIPT_DIR . "postload.inc.php")) {
    include($incFile);
}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (isset($_GET["debug"])) {
    vardump($result);
} else {
    header("Content-Type: application/json", true);

    if (isset($_GET['callback'])) {
        echo $_GET['callback'] . "(" . json_encode($result) . ")";
    } else {
        echo json_encode($result);
    }
}

