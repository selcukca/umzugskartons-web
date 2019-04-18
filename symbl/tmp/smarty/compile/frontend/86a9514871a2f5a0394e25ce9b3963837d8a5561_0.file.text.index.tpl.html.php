<?php
/* Smarty version 3.1.31, created on 2018-09-06 11:49:41
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\new_age\module\basic\text.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b90f83540cfa8_19322857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a9514871a2f5a0394e25ce9b3963837d8a5561' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\new_age\\module\\basic\\text.index.tpl.html',
      1 => 1504003467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b90f83540cfa8_19322857 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['holder']->value && $_smarty_tpl->tpl_vars['holder']->value->lang->is_active && $_smarty_tpl->tpl_vars['holder']->value->lang->content) {?>

    <div>
        <?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->content;?>

    </div>

<?php }
}
}
