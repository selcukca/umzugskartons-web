<?php



if ((!isset($_SESSION[REAL_PROJECT_NAME]["FORMNAME"])) || (empty($_SESSION[REAL_PROJECT_NAME]["FORMNAME"]))) {
    $_SESSION[REAL_PROJECT_NAME]["FORMNAME"] = 'qF' . md5(microtime());
}



// +----------------------------------------------------------------------+
// | QuickForm - Initialisierung                                          |
// +----------------------------------------------------------------------+
${$GLOBALS["QF_VAR"]}->init($_SESSION[REAL_PROJECT_NAME]["FORMNAME"], 'post', WWW_SCRIPT_DIR . WWW_ARGV . GET_QUERY, $target='', null, $tracksubmit = true);

