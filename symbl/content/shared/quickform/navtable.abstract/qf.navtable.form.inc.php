<?php


// +----------------------------------------------------------------------+
// | Navtable -> Formular                                                 |
// +----------------------------------------------------------------------+
${$GLOBALS["NAVTABLE_FORM_VAR"]} = \Cnx\Navtable::form_factory(${$GLOBALS["QF_VAR"]}, array("order", "width", "fieldscore"));    // , "wrap","width","fieldscore","entry",


//${$GLOBALS["NAVTABLE_FORM_VAR"]}->register('page',     'select',   'onchange="Symbl.Navtable.submit(\'' . ${$NAVTABLE_VAR}->getId() . '\');"', $e_option=null);
${$GLOBALS["NAVTABLE_FORM_VAR"]}->register('page',     'hidden');

//${$GLOBALS["NAVTABLE_FORM_VAR"]}->register('entry',    'select',   'onchange="Symbl.Navtable.submit(\'' . ${$NAVTABLE_VAR}->getId() . '\');"', $e_option=null);
${$GLOBALS["NAVTABLE_FORM_VAR"]}->register('entry',    'hidden');



$obj = ${$GLOBALS["NAVTABLE_FORM_VAR"]}->register("visibility",   "checkbox",     '')->setLabel("");


${$GLOBALS["NAVTABLE_FORM_VAR"]}->register("filter");
