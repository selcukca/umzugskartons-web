<?php



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$columns   = array(
    "created"           => "statistic.column.date",
    "device_platform"   => "statistic.column.platform",
    "device_version"    => "statistic.column.version",
    "device_type"       => "statistic.column.type"
);


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$list = \Cnx\Db\Table::factory($DB, TB_REL_RELOCATION_COMPANY_SELECTION)
            ->getListIterator("WHERE fk_company=? AND fk_status<>? ORDER BY created", array($USER->relocation->id, STATUS_DELETED));


