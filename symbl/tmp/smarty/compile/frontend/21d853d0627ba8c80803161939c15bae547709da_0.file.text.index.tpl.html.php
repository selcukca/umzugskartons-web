<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:12
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\text.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d010bca526_08439590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21d853d0627ba8c80803161939c15bae547709da' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\text.index.tpl.html',
      1 => 1537709262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d010bca526_08439590 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['holder']->value && $_smarty_tpl->tpl_vars['holder']->value->lang->is_active && $_smarty_tpl->tpl_vars['holder']->value->lang->content) {?>

    <?php if ($_smarty_tpl->tpl_vars['holder']->value->data->extra1) {?>
        <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['holder']->value->lang->content, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->content;?>

    <?php }?>

<?php }
}
}
