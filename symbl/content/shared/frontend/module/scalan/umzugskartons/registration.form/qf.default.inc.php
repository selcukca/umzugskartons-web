<?php

$defaults = array("company" => array());
if (isset($_GET["title"])) {
    $defaults["company"]["title"] = $_GET["title"];
}
if (isset($_GET["email"])) {
    $defaults["company"]["email"] = $_GET["email"];
}
$defaults["company"]["fk_country"] = $USER->relocation->country->id;

$oF->setDefaults($defaults);

if ($USER->relocation->id > 0) {
    $oF->setDefaults(
        array(
            "company" => $USER->relocation->toDefault(),
            "thumburl" => str_replace("#param#", "200x200x1", $USER->relocation->media->getThumbUrl())
        )
    );
}
