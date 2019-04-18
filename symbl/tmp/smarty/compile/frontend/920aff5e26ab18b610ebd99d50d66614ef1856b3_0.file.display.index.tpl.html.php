<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:32:39
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\page\display.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cd9775f1f5_37670547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '920aff5e26ab18b610ebd99d50d66614ef1856b3' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\page\\display.index.tpl.html',
      1 => 1536492819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cd9775f1f5_37670547 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['content']->value->extra1) {?>
    <a id="<?php echo $_smarty_tpl->tpl_vars['content']->value->extra1;?>
"></a>
<?php }?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value->subdata, 'subcontent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcontent']->value) {
?>

    <?php if ($_smarty_tpl->tpl_vars['subcontent']->value->module->ident != 'bootstrap/newage/header') {?>
        <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['subcontent']->value->module->ident,'content'=>$_smarty_tpl->tpl_vars['subcontent']->value,'holder'=>$_smarty_tpl->tpl_vars['subcontent']->value->holder,'parent'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);?>

    <?php }?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


<?php }
}
