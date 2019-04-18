<?php

die("HH");

// +----------------------------------------------------------------------+
// | Template Vars                                                        |
// +----------------------------------------------------------------------+
$vars = $this->get_template_vars();


// +----------------------------------------------------------------------+
// | INC_WORKING_DIR                                                      |
// +----------------------------------------------------------------------+
if (!isset($vars["INC_WORKING_DIR"])) {
    $this->assign("INC_WORKING_DIR", $INC_WORKING_DIR = $this->template_dir);
} else {
    $INC_WORKING_DIR  = $vars["INC_WORKING_DIR"];
}


// +----------------------------------------------------------------------+
// | navtable_id                                                          |
// +----------------------------------------------------------------------+
if (!isset($vars["navtable_id"])) {
    $this->assign("navtable_id", $navtable_id = "nt-" . rand(100000,999999));
} else {
    $navtable_id = $vars["navtable_id"];
}

$this->assign("navtable_id", $navtable_id);

// +----------------------------------------------------------------------+
// | prefix                                                               |
// +----------------------------------------------------------------------+
if (!isset($vars["prefix"])) {
    $this->assign("prefix", "");
}

// +----------------------------------------------------------------------+
// | sortable                                                             |
// +----------------------------------------------------------------------+
if (!isset($vars["sortable"])) {
    $this->assign("sortable", false);
}

// +----------------------------------------------------------------------+
// | pk.data                                                              |
// +----------------------------------------------------------------------+
if (!isset($vars["pkcolumn"])) {
    $this->assign("pkcolumn", "id");
}
if (!isset($vars["pkselected"])) {
    $this->assign("pkselected", false);
}


// +----------------------------------------------------------------------+
// | order.position                                                       |
// +----------------------------------------------------------------------+
if (!isset($vars["order_position"])) {
    $this->assign("order_position", 0);
}


// +----------------------------------------------------------------------+
// | show.                                                                |
// +----------------------------------------------------------------------+
if (!isset($vars["show_filter"]))       { $this->assign("show_filter",      false); }
if (!isset($vars["show_label"]))        { $this->assign("show_label",       true); }
if (!isset($vars["show_width"]))        { $this->assign("show_width",       false); }
if (!isset($vars["show_visibility"]))   { $this->assign("show_visibility",  false); }



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (!isset($vars["attr_name"])) {
    $this->assign("attr_name", false);
}


// +----------------------------------------------------------------------+
// | colwidth                                                             |
// +----------------------------------------------------------------------+
if (!isset($vars["colwidth"])) {
    $this->assign("colwidth", true);
}



// +----------------------------------------------------------------------+
// | entryinfo                                                            |
// +----------------------------------------------------------------------+
if (!isset($vars["entryinfo"])) {
    $this->assign("entryinfo", true);
}


// +----------------------------------------------------------------------+
// | pager.top                                                            |
// +----------------------------------------------------------------------+
if (!isset($vars["pager_top"])) {
    $this->assign("pager_top", true);
}


// +----------------------------------------------------------------------+
// | Config                                                               |
// +----------------------------------------------------------------------+
$this->config_load(TPL_DIR_NAVTABLE . "lang.conf", (defined("BACKEND_LANG_IDENT")? BACKEND_LANG_IDENT : "de"));


if (file_exists( $configFile = $INC_WORKING_DIR . "column.conf" )) {
    $this->config_load($configFile, (defined("BACKEND_LANG_IDENT")? BACKEND_LANG_IDENT : "de"));
    $this->assign("exists_column_config", true);

} else {
    $this->assign("exists_column_config", false);
}


if (defined("REAL_PROJECT_NAME")) {

    if (file_exists( $configFile = $INC_WORKING_DIR . "column." . REAL_PROJECT_NAME . ".conf" )) {
        $this->config_load($configFile, (defined("BACKEND_LANG_IDENT")? BACKEND_LANG_IDENT : "de"));
        $this->assign("exists_column_config", true);
    } else {
    //    $this->assign("exists_column_config", false);
    }
}



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$config = $this->get_config_vars();


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+

$formularname = $vars["form"]["formularname"];
$jsondata     = json_encode($vars["maQuery"]["jsdata"]);
$maPage       =& $vars["maPage"];


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
//$maPage["jquery"][] = "Navtable.Init('{$navtable_id}', '{$formularname}', {$jsondata});";


$maPage["jquery_"][] = "Navtable.Init('{$navtable_id}', '{$formularname}', {$jsondata},
            {
                'dialog' : {
                    'title'   : '" . $config["columnconfig"] . "',
                    'buttons' : {
                        'ok'     : '" . $config["btn_navtable_dialog_ok"] . "',
                        'cancel' : '" . $config["btn_navtable_dialog_cancel"] . "'
                    }
                 }
            }
        );";

?>