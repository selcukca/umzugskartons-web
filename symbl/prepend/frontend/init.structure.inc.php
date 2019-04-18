<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$STRUCTURE->registerRouter("STRUCTURE_IDENT_PACKAGE", \Cnx\Db\Table::factory($DB, TB_FIX_RELOCATION_PACKAGE)->createHolder());
$STRUCTURE->registerRouter("STRUCTURE_IDENT_PARTNER", \Cnx\Db\Table::factory($DB, TB_RELOCATION_COMPANY));
