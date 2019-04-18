<?php

if ((!isset($_SESSION[PROJECT_NAME]["LAST_LANGUAGE_IDENT"])) || ($_SESSION[PROJECT_NAME]["LAST_LANGUAGE_IDENT"] != LANG_IDENT)) {
    $_SESSION[PROJECT_NAME]["LAST_LANGUAGE_IDENT"] = LANG_IDENT;
    unset($_SESSION[PROJECT_NAME]["SETTING"]);
    unset($_SESSION[REAL_PROJECT_NAME]["COUNTRIES"]);
}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
\Symbl\Cms\Screen::setTemplate("status", "__suffix__status.__status__");


// +----------------------------------------------------------------------+
// | Countries                                                            |
// +----------------------------------------------------------------------+
if ((!isset($_SESSION[REAL_PROJECT_NAME]["COUNTRIES"])) || (URL_TK_VALUE == 1)) {
    $_SESSION[REAL_PROJECT_NAME]["COUNTRIES"] = \Cnx\Db\Table::factory($DB, TB_FIX_COUNTRY)->createHolder()->getList();
}
$COUNTRIES = $_SESSION[REAL_PROJECT_NAME]["COUNTRIES"];


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (!isset($_SESSION[REAL_PROJECT_NAME]["COUNTRY"])) {
    $_SESSION[REAL_PROJECT_NAME]["COUNTRY"] = $COUNTRIES->guess($LANGUAGE);
}