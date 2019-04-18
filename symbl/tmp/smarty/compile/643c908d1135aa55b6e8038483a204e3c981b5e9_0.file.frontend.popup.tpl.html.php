<?php
/* Smarty version 3.1.31, created on 2018-09-24 17:12:01
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\frontend.popup.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ba8fec1b2e678_12925275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '643c908d1135aa55b6e8038483a204e3c981b5e9' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\frontend.popup.tpl.html',
      1 => 1504003467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba8fec1b2e678_12925275 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['PAGE']->value['carousel'])) {?>
    <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['PAGE']->value['carousel']->module->ident,'content'=>$_smarty_tpl->tpl_vars['PAGE']->value['carousel'],'holder'=>$_smarty_tpl->tpl_vars['PAGE']->value['carousel']->holder),$_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['content'];?>

<?php }
}
