<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:12
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\bootstrap\newage\section.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d010799080_92921910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8be971df3443bdfce77e2f6957ba85f3fec9189' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\bootstrap\\newage\\section.index.tpl.html',
      1 => 1536528649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d010799080_92921910 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section<?php $_prefixVariable7 = $_smarty_tpl->tpl_vars['content']->value->getConfig()->getId();
$_smarty_tpl->_assignInScope('_id', $_prefixVariable7);
if ($_prefixVariable7) {?> id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"<?php }?> class="<?php echo $_smarty_tpl->tpl_vars['content']->value->getConfig()->getClass();?>
">

    <?php if ($_smarty_tpl->tpl_vars['content']->value->getConfig()->hasContainer()) {?>
        <div class="container">
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

</section><?php }
}
