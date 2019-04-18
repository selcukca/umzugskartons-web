<?php

$aF = $oF->exportValues();


$ignore = array("latitude", "longitude", "notice", "email", "fk_status","score", "rating_cnt", "rating_avg", "selection_cnt", "activation_cnt", "shares_cnt", "package");
if (!$USER->relocation->orders->has("premium")) {
    $ignore[] = "content";
}

$USER->relocation->toObject($aF["company"], true, $ignore);

$USER->relocation->save(USER_ID);

$oF->freeze();