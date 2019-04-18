<?php
/* Smarty version 3.1.31, created on 2018-09-15 22:58:11
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\partner.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b9d7263515e86_63463673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce238a40f76738730ec2b9844387402456f92796' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\partner.index.tpl.html',
      1 => 1536750083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9d7263515e86_63463673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('oPartner', $_smarty_tpl->tpl_vars['PAGE']->value['ROUTE']['info']['data']['partner']);
?>

<?php echo Symbl\Cms\Smarty::symbl_screen(array('load'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"scalan/umzugskartons/profile")),$_smarty_tpl);?>


<?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"scalan/umzugskartons/partner",'file'=>"header"),$_smarty_tpl);?>

<?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"scalan/umzugskartons/partner",'file'=>"content"),$_smarty_tpl);?>




<?php }
}
