<?php
/* Smarty version 3.1.31, created on 2018-09-06 11:49:41
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\new_age\module\basic\headline.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b90f8351af911_22677280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8cc6ee0380a775a556293a5d53175dbe1224225' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\new_age\\module\\basic\\headline.index.tpl.html',
      1 => 1526220074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b90f8351af911_22677280 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['holder']->value && $_smarty_tpl->tpl_vars['holder']->value->lang->is_active && $_smarty_tpl->tpl_vars['holder']->value->lang->title) {?>

    <?php if ((isset($_smarty_tpl->tpl_vars['parent']->value) && ($_smarty_tpl->tpl_vars['parent']->value->module->ident == 'basic/page/display'))) {?>
        <?php echo $_smarty_tpl->tpl_vars['holder']->value->data->setPlainValue('extra1',$_smarty_tpl->tpl_vars['holder']->value->data->extra1+1);?>

    <?php }?>


    <h<?php echo (($tmp = @$_smarty_tpl->tpl_vars['holder']->value->data->extra1)===null||$tmp==='' ? "1" : $tmp);
if ($_smarty_tpl->tpl_vars['holder']->value->data->extra2) {?> class="page-header"<?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->title;?>

        <?php if (!empty($_smarty_tpl->tpl_vars['holder']->value->lang->teaser)) {?>
            <small><?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->teaser;?>
</small>
        <?php }?>
    </h<?php echo (($tmp = @$_smarty_tpl->tpl_vars['holder']->value->data->extra1)===null||$tmp==='' ? "1" : $tmp);?>
>

<?php }
}
}
