<?php



// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$content = $smarty->getTemplateVars("content");
$I18N    = $smarty->getTemplateVars("I18N");
$AUTH    = $smarty->getTemplateVars("AUTH");
$USER    = $smarty->getTemplateVars("USER");
$STRUCTURE  = $smarty->getTemplateVars("STRUCTURE");
$DB         = \Cnx\Db::getInstance();


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$statistic = array();

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$smarty->assign("type", $statistic["type"] = (isset($_GET["type"]))? $_GET["type"] : "");


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+

if ($statistic["type"] == "shares") {

    $list = \Cnx\Db\Table::factory($DB, TB_REL_RELOCATION_COMPANY_SHARES)
            ->getListIterator("WHERE fk_company=? AND fk_status<>? ORDER BY created DESC LIMIT 20", array($USER->relocation->id, STATUS_DELETED));

    $statistic["list"] = $list;


} else if ($statistic["type"] == "selection") {

    $list = \Cnx\Db\Table::factory($DB, TB_REL_RELOCATION_COMPANY_SELECTION)
            ->getListIterator("WHERE fk_company=? AND fk_status<>? ORDER BY created DESC LIMIT 20", array($USER->relocation->id, STATUS_DELETED));

    $statistic["list"] = $list;

} else if ($statistic["type"] == "rating") {

    $list = \Cnx\Db\Table::factory($DB, TB_REL_RELOCATION_COMPANY_RATING)
            ->getListIterator("WHERE fk_company=? AND fk_status<>? ORDER BY created DESC LIMIT 20", array($USER->relocation->id, STATUS_DELETED));

    $statistic["list"] = $list;

} else if ($statistic["type"] == "activation") {

    $fk_activations = array(0);
    foreach ($USER->relocation->orders as $order) {
        $fk_activations[] = $order->id;

    }
    $codes = $USER->relocation->orders->toAssoc("ident", "id");

    $list = \Cnx\Db\Table::factory($DB, TB_REL_ACTIVATION)
            ->getListIterator("WHERE fk_activation IN(" . implode(",", $fk_activations) . ") AND fk_status<>? ORDER BY created DESC LIMIT 20", array(STATUS_DELETED));
    foreach ($list as $obj) {
        $obj->registerAttribute("code", $codes[$obj->fk_activation]);
    }
    $statistic["list"] = $list;

}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$smarty->assign("statistic", $statistic);