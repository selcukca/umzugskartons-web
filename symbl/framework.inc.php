<?php

// +----------------------------------------------------------------------+
// | template - initialize                                                |
// +----------------------------------------------------------------------+
$oTpl_frame = null;
$fTpl_frame = \Cnx\Template::create($oTpl_frame, PROJECT_NAME, true);


// +----------------------------------------------------------------------+
// | template - assign blocks, functions, ...                             |
// +----------------------------------------------------------------------+
\Symbl\Cms\Smarty::register($oTpl_frame);


// +----------------------------------------------------------------------+
// | template - debugging                                                 |
// +----------------------------------------------------------------------+
if (URL_TK_VALUE || DEBUG_MODE) {

    $oTpl_frame->force_compile = true;
    $oTpl_frame->compile_check = true;

} else {

    $oTpl_frame->compile_check = false;
    $oTpl_frame->loadFilter("output", "trimwhitespace");

}


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (file_exists($incFile = dirname(__FILE__) . "/framework." . PROJECT_NAME . ".inc.php")) {
    include($incFile);
}


// +----------------------------------------------------------------------+
// | template - assigns                                                   |
// +----------------------------------------------------------------------+


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oTpl_frame->assign("ARGV", $ARGV);
$oTpl_frame->assign("ARGC", $ARGC);


// +----------------------------------------------------------------------+
// | template - constants                                                 |
// +----------------------------------------------------------------------+
\Cnx\Template::assignConstants(
    $oTpl_frame,
    array(
        "STATUS_DRAFT", "STATUS_INACTIVE", "STATUS_ONLINE", "STATUS_BLOCKED", "STATUS_DELETED"
    )
);



// +----------------------------------------------------------------------+
// | template - assigns                                                   |
// +----------------------------------------------------------------------+
$oTpl_frame->assign(\Symbl\Cms\Smarty::STRUCTURE,   $STRUCTURE);
$oTpl_frame->assignByRef(\Symbl\Cms\Smarty::ROUTE,       $ROUTE);

$oTpl_frame->assignByRef(\Symbl\Cms\Smarty::PAGE,        $PAGE);

$oTpl_frame->assignByRef(\Symbl\Cms\Smarty::LANGUAGES,   $LANGUAGES);
$oTpl_frame->assignByRef(\Symbl\Cms\Smarty::LANGUAGE,    $LANGUAGE);

$oTpl_frame->assignByRef(\Symbl\Cms\Smarty::SETTING,     $SETTING);

$oTpl_frame->assignByRef(\Symbl\Cms\Smarty::AUTH,        $AUTH);
$oTpl_frame->assignByRef(\Symbl\Cms\Smarty::USER,        $USER);

$oTpl_frame->assignByRef(\Symbl\Cms\Smarty::I18N,        $I18N);

$oTpl_frame->assignByRef("BASKET",        $_SESSION[REAL_PROJECT_NAME]["BASKET"]);
$oTpl_frame->assignByRef("COUNTRIES",     $COUNTRIES);




// +----------------------------------------------------------------------+
// | CONTENT                                                              |
// +----------------------------------------------------------------------+
if (file_exists($incFile = INC_SCRIPT_DIR . FILENAME_CONTENT)) {
    include $incFile;
} else {
    include INC_PROJECT_CONTENT_DIR . FILENAME_CONTENT;
}




// +----------------------------------------------------------------------+
// | compress                                                             |
// +----------------------------------------------------------------------+
$PAGE["css"]       ->minify();
$PAGE["javascript"]->minify();
$PAGE["less"]      ->minify();


// +----------------------------------------------------------------------+
// | template - output                                                    |
// +----------------------------------------------------------------------+
echo $html = $oTpl_frame->fetch($fTpl_frame);



