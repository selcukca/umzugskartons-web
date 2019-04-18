<?php

// +----------------------------------------------------------------------+
// | Navtable -> Session                                                  |
// +----------------------------------------------------------------------+
$_SESSION[PROJECT_NAVTABLE][${$GLOBALS["NAVTABLE_VAR"]}->getAlias()] = ${$GLOBALS["QF_VAR"]}->getSubmitValues();



