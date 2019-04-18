<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:12
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\abstract\form\element.select.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d010258081_96383228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2cd87e27dd06cf7dce1c4cb02c56796278202b3' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\abstract\\form\\element.select.tpl.html',
      1 => 1537714629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d010258081_96383228 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['chosen']->value) || ($_smarty_tpl->tpl_vars['chosen']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('class', "chosen-select form-control");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('class', "form-control");
}?>

<?php if ($_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['error']) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." is-invalid");
}?>

<?php if (!isset($_smarty_tpl->tpl_vars['attributes']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('attributes', array());
}
$_tmp_array = isset($_smarty_tpl->tpl_vars['attributes']) ? $_smarty_tpl->tpl_vars['attributes']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['class'] = $_smarty_tpl->tpl_vars['class']->value;
$_smarty_tpl->_assignInScope('attributes', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['attributes']) ? $_smarty_tpl->tpl_vars['attributes']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-placeholder'] = (($tmp = @$_smarty_tpl->tpl_vars['placeholder']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['I18N']->value["selectbox.option.choose"] : $tmp);
$_smarty_tpl->_assignInScope('attributes', $_tmp_array);
?>


<?php echo Symbl\Cms\Smarty::symbl_include(array('load'=>"abstract/form/element",'file'=>"standard",'attributes'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);
}
}
