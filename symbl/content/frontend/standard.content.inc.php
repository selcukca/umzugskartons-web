<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ($meta = $PAGE["module"]->filter("module", "ident", "==", "basic/meta")->getFirst()) {

    $meta->holder->toPage($PAGE);

    $PAGE["module"]     = $PAGE["module"]->filter("module", "ident", "!=", "basic/meta");

}



// +----------------------------------------------------------------------+
// | background                                                           |
// +----------------------------------------------------------------------+
if ($background = $PAGE["module"]->filter("module", "ident", "==", "basic/page/background")->getFirst()) {

    //$PAGE["background"] = $background->holder->data->media;
    $PAGE["module"]     = $PAGE["module"]->filter("module", "ident", "!=", "basic/page/background");

} else {
    //$PAGE["background"] = new \Cnx\MediaFile("background/default2.jpg", "default.jpg", "image/jpg");
}


