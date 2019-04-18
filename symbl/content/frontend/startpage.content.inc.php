<?php


// +----------------------------------------------------------------------+
// | Carousel                                                             |
// +----------------------------------------------------------------------+
if ($carousel = $PAGE["module"]->filter("module", "ident", "==", "basic/carousel")->getFirst()) {

    $PAGE["carousel"] = $carousel;
    $PAGE["module"]   = $PAGE["module"]->filter("module", "ident", "!=", "basic/carousel");

}



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
include(dirname(__FILE__) . "/standard.content.inc.php");