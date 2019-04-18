<?php


// +----------------------------------------------------------------------+
// | take defaults                                                        |
// +----------------------------------------------------------------------+
if (!defined("DB_TYPE"))    { define("DB_TYPE",     DB_DEFAULT_TYPE); }
if (!defined("DB_HOST"))    { define("DB_HOST",     DB_DEFAULT_HOST); }
if (!defined("DB_USER"))    { define("DB_USER",     DB_DEFAULT_USER); }
if (!defined("DB_PASS"))    { define("DB_PASS",     DB_DEFAULT_PASS); }
if (!defined("DB_PORT"))    { define("DB_PORT",     DB_DEFAULT_PORT); }
if (!defined("DB_OPTIONS")) { define("DB_OPTIONS",  DB_DEFAULT_OPTIONS); }



// +----------------------------------------------------------------------+
// | Datenbank-Objekt erzeugen                                            |
// +----------------------------------------------------------------------+
try {

    $DB = \Cnx\Db::setInstance(
        \Cnx\Db::create(DB_TYPE, DB_NAME, DB_USER, DB_PASS, DB_HOST, DB_PORT, unserialize(DB_OPTIONS))
    );


} catch (\Exception $oEx) {

    \Cnx\Debugger::emerg($oEx, __FILE__, __LINE__);

}



