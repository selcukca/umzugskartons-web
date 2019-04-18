<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:11
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\frontend\standard.content.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d00f84bde0_43300194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a54720d2dd06c4e91e1bd741dbaa5a3ce1246ea3' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\frontend\\standard.content.tpl.html',
      1 => 1536437711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d00f84bde0_43300194 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PAGE']->value['module'], 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
?>

    <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'content'=>$_smarty_tpl->tpl_vars['content']->value,'holder'=>$_smarty_tpl->tpl_vars['content']->value->holder),$_smarty_tpl);?>


<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>





<?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"footer"),$_smarty_tpl);?>


<?php }
}
