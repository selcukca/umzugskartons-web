<?php

$oF->setDefaults(
    array(
        "company"  => $USER->relocation->toDefault(),
        "thumburl" => str_replace("#param#", "200x200x1", $USER->relocation->media->getThumbUrl())
    )
);
