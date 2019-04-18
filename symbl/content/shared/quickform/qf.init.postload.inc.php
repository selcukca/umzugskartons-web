<?php
return;
// +----------------------------------------------------------------------+
// | Registrierung der Rules                                              |
// +----------------------------------------------------------------------+
${$GLOBALS["QF_VAR"]}->registerRule('date',              null,  new \Cnx\Form\Rule\Date());
${$GLOBALS["QF_VAR"]}->registerRule('datecmp',           null,  new \Cnx\Form\Rule\DateCmp());

${$GLOBALS["QF_VAR"]}->registerRule('time',              null,  new \Cnx\Form\Rule\Time());
${$GLOBALS["QF_VAR"]}->registerRule('timecmp',           null,  new \Cnx\Form\Rule\TimeCmp());

${$GLOBALS["QF_VAR"]}->registerRule('number',            null,  new \Cnx\Form\Rule\Number());
${$GLOBALS["QF_VAR"]}->registerRule('numbercmp',         null,  new \Cnx\Form\Rule\NumberCmp());

${$GLOBALS["QF_VAR"]}->registerRule('eurocmp',           null,  new \Cnx\Form\Rule\NumberCmp());



${$GLOBALS["QF_VAR"]}->registerRule('textareamaxlength', null,  new \Cnx\Form\Rule\TextareaMaxLength());
