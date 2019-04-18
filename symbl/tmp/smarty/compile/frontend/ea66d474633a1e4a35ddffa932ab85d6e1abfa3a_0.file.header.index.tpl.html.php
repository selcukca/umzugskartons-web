<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:11
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\bootstrap\newage\header.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d00f8e9bd0_07964439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea66d474633a1e4a35ddffa932ab85d6e1abfa3a' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\bootstrap\\newage\\header.index.tpl.html',
      1 => 1537386740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d00f8e9bd0_07964439 (Smarty_Internal_Template $_smarty_tpl) {
?>

<header class="masthead<?php if (!$_smarty_tpl->tpl_vars['content']->value->getConfig()->isFullscreen()) {?> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value->getConfig()->getClass())===null||$tmp==='' ? "masthead-half" : $tmp);
}?>">


    <?php if ($_smarty_tpl->tpl_vars['content']->value->getConfig()->hasContainer()) {?>
        <div class="container h-100">
    <?php }?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value->subdata, 'subcontent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcontent']->value) {
?>

        <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['subcontent']->value->module->ident,'content'=>$_smarty_tpl->tpl_vars['subcontent']->value,'holder'=>$_smarty_tpl->tpl_vars['subcontent']->value->holder,'parent'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);?>


    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>



    <?php if ($_smarty_tpl->tpl_vars['content']->value->getConfig()->hasContainer()) {?>
        </div>
    <?php }?>


</header><?php }
}
