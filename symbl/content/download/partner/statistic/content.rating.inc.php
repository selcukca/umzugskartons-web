<?php



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$columns   = array(
    "created"           => "statistic.column.date",
    "stars"             => "statistic.column.rating.stars",
    "message"           => "statistic.column.rating.message",
    "device_platform"   => "statistic.column.platform",
    "device_version"    => "statistic.column.version",
    "device_type"       => "statistic.column.type"
);


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$list = \Cnx\Db\Table::factory($DB, TB_REL_RELOCATION_COMPANY_RATING)
            ->getListIterator("WHERE fk_company=? AND fk_status<>? ORDER BY created", array($USER->relocation->id, STATUS_DELETED));


