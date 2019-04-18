<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:41:40
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\auth-container.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cfb46ae9f7_85175247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '222b03738df26918bb5865db38c2fd85674e597b' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\auth-container.index.tpl.html',
      1 => 1536613220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cfb46ae9f7_85175247 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ((($_smarty_tpl->tpl_vars['content']->value->extra1 == 0) || (($_smarty_tpl->tpl_vars['content']->value->extra1 == 1) && ($_smarty_tpl->tpl_vars['USER']->value->id)) || (($_smarty_tpl->tpl_vars['content']->value->extra1 == -1) && (!$_smarty_tpl->tpl_vars['USER']->value->id)))) {?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value->subdata, 'subcontent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcontent']->value) {
?>

        <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['subcontent']->value->module->ident,'content'=>$_smarty_tpl->tpl_vars['subcontent']->value,'holder'=>$_smarty_tpl->tpl_vars['subcontent']->value->holder),$_smarty_tpl);?>


    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


<?php }?>


<?php }
}
