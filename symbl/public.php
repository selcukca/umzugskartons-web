<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
ob_start("ob_gzhandler");


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("HTTP/1.1 200 OK");
    exit;
}



// +----------------------------------------------------------------------+
// | REAL_PROJECT_NAME                                                    |
// +----------------------------------------------------------------------+
// | which frontend?                                                      |
// +----------------------------------------------------------------------+
require_once("init.project.inc.php");


// +----------------------------------------------------------------------+
// | session handling                                                     |
// +----------------------------------------------------------------------+
require_once("session.start.inc.php");


// +----------------------------------------------------------------------+
// | load configuration                                                   |
// +----------------------------------------------------------------------+
require_once("init.inc.php");


// +----------------------------------------------------------------------+
// | CONTENT                                                              |
// +----------------------------------------------------------------------+
if (file_exists($incFile = INC_SCRIPT_DIR . FILENAME_CONTENT)) {
    include $incFile;
} else {
    include INC_PROJECT_CONTENT_DIR . FILENAME_CONTENT;
}

