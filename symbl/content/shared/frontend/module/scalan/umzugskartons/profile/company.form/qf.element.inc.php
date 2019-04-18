<?php



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->addElement('text',         'company[title]');

$oF->addElement('file',         'upload');
$oF->addElement('text',         'thumburl');

$oF->addElement('hidden',       'company[mediafile]');
$oF->addElement('hidden',       'company[mediafile_title]');
$oF->addElement('hidden',       'company[mediafile_type]');


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->addElement('text', 'company[phone]');
$oF->addElement('text', 'company[email]');//->setReadonly(true);
$oF->addElement('text', 'company[web]');
$oF->addElement('text', 'company[fax]');

$oF->addElement('advcheckbox', 'company[has_public_profile]');
$oF->addModifier( new \Cnx\Form\Modifier\IntModifier('company[has_public_profile]', 0));

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->addElement('select', 'company[person_gender]', '', $options["gender"]);
$oF->addElement('text',   'company[person_firstname]');
$oF->addElement('text',   'company[person_lastname]');
$oF->addElement('text',   'company[person_phone]');
$oF->addElement('text',   'company[person_email]');


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oF->addElement('text',   'company[street]');
$oF->addElement('text',   'company[zip]');
$oF->addElement('text',   'company[city]');
$oF->addElement('select', 'company[fk_country]', '', $options["country"]->toAssoc("lang.title", "data.id"));


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if ($USER->relocation->orders->has("premium")) {
    $oF->addElement('textarea', 'company[content]', '', array("rows" => 10));
}
$oF->addElement('textarea', 'company[benefits]', '', array("rows" => 10));