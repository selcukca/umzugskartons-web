<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$list = \Cnx\Db\Table::factory($DB, TB_RELOCATION_COMPANY)
        ->getListIterator("WHERE fk_status<>? AND (latitude <> 0 AND longitude <> 0)", STATUS_DELETED);


$result = $list->toMap();


