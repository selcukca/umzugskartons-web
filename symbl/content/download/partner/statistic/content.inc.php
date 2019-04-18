<?php

/**
 *
 */
function prepareHeader($I18N, $columns)
{
    $result = array();

    foreach ($columns as $column => $i18n) {
        $result[$column] = strip_tags($I18N->get($i18n, $column));
    }
    return $result;
}

/**
 *
 */
function prepareData($table, $columns)
{
    $result = array();

    foreach ($columns as $column => $i18n) {
        $result[$column] = $table->{$column};
    }
    return $result;
}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ($USER->id > 0) {


    // +----------------------------------------------------------------------+
    // | language                                                             |
    // +----------------------------------------------------------------------+
    $I18N->append(
        \Cnx\Db\Table::factory($DB, TB_SCREEN)->getDataByIdent("scalan/umzugskartons/profile/statistics", LANG_ID)
    );

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    $delimiter = ";";
    $enclosure = '"';


    // +----------------------------------------------------------------------+
    // | script - choose                                                      |
    // +----------------------------------------------------------------------+
    if ((isset($ARGV[0])) && (file_exists($incFile = INC_SCRIPT_DIR . "content.{$ARGV[0]}.inc.php"))) {
        include($incFile);
    } else {
        include(INC_SCRIPT_DIR . "content.index.inc.php");
    }


    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    header( 'Content-Type: text/csv' );
    header( 'Content-Disposition: attachment;filename=' . $ARGV[0] . '.csv');



    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    $file = fopen('php://output', 'w');
    fwrite($file, pack("CCC",0xef,0xbb,0xbf));


    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    fputcsv($file, prepareHeader($I18N, $columns), $delimiter, $enclosure);
    foreach ($list as $relation) {
        fputcsv($file, prepareData($relation, $columns), $delimiter, $enclosure);
    }
    fclose($file);
    exit;



}


