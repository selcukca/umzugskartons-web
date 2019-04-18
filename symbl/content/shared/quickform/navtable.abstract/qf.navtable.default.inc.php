<?php

if (!isset($_SESSION[PROJECT_NAVTABLE][${$GLOBALS["NAVTABLE_VAR"]}->getAlias()])) {

    // +----------------------------------------------------------------------+
    // | Default-Werte aus Navtable-Definition                                |
    // +----------------------------------------------------------------------+
    $defaults = ${$GLOBALS["NAVTABLE_FORM_VAR"]}->getDefaults(${$GLOBALS["NAVTABLE_VAR"]});

} else {

    // +----------------------------------------------------------------------+
    // | Default-Werte aus der SESSION                                        |
    // +----------------------------------------------------------------------+
    $defaults = $_SESSION[PROJECT_NAVTABLE][${$GLOBALS["NAVTABLE_VAR"]}->getAlias()];

}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (isset($_GET["navtable"])) {

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    if (isset($_GET["navtable"]["reset"])) {
        $defaults = ${$GLOBALS["NAVTABLE_FORM_VAR"]}->getDefaults(${$GLOBALS["NAVTABLE_VAR"]});
    }

    // +----------------------------------------------------------------------+
    // | Visibility                                                           |
    // +----------------------------------------------------------------------+
    if ((isset($_GET["navtable"]["visibility"])) && (is_array($_GET["navtable"]["visibility"]))) {

        foreach ($_GET["navtable"]["visibility"] as $column => $value) {

            unset($defaults[ "navtable[visibility][{$column}]" ]);
            $defaults["navtable"]["visibility"][$column] = (int)$value;
        }

    }
    // +----------------------------------------------------------------------+
    // | Filter                                                               |
    // +----------------------------------------------------------------------+
    if (isset($_GET["navtable"]["filter"])) {

        $defaults["navtable"]["filter"] = array();
        foreach ($defaults as $key => $value) {
            if (strpos($key, "navtable[filter]") === 0) {
                unset($defaults[$key]);
            }
        }

        $defaults["navtable"]["filter"] = $_GET["navtable"]["filter"];

    }

    // +----------------------------------------------------------------------+
    // | Limit                                                                |
    // +----------------------------------------------------------------------+
    if (isset($_GET["navtable"]["limit"])) {

        if (isset($_GET["navtable"]["limit"]["page"])) {
            unset($defaults["navtable[limit][page]"]);
            $defaults["navtable"]["limit"]["page"] = (int)$_GET["navtable"]["limit"]["page"];
        }

        if (isset($_GET["navtable"]["limit"]["entry"])) {
            unset($defaults["navtable[limit][entry]"]);
            $defaults["navtable"]["limit"]["entry"] = (int)$_GET["navtable"]["limit"]["entry"];
        }


    }


}




${$GLOBALS["QF_VAR"]}->setDefaults($defaults);