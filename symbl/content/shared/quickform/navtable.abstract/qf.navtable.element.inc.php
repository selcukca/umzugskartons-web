<?php

// +----------------------------------------------------------------------+
// | Navtable -> Formular                                                 |
// +----------------------------------------------------------------------+
//${$GLOBALS["QF_VAR"]}           ->addElement('submit', 'btn_submit', '#name#', array("onclick" => "Navtable.submitForm(this.form);"));
${$GLOBALS["NAVTABLE_FORM_VAR"]}->addElements(${$GLOBALS["NAVTABLE_VAR"]}, ${$GLOBALS["QF_VAR"]});

