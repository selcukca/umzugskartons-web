<?php



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$columns   = array(
    "created"           => "statistic.column.date",
    "code"              => "statistic.column.activation.code",
    "device_platform"   => "statistic.column.platform",
    "device_version"    => "statistic.column.version",
    "device_type"       => "statistic.column.type"
);

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$fk_activations = array(0);
foreach ($USER->relocation->orders as $order) {
    $fk_activations[] = $order->id;
}
$codes = $USER->relocation->orders->toAssoc("ident", "id");

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$list = \Cnx\Db\Table::factory($DB, TB_REL_ACTIVATION)
        ->getListIterator("WHERE fk_activation IN(" . implode(",", $fk_activations) . ") AND fk_status<>? ORDER BY created DESC", array(STATUS_DELETED));

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
foreach ($list as $obj) {
    $obj->registerAttribute("code", $codes[$obj->fk_activation]);
}
