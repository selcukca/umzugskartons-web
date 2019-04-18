<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:12
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\headline.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d010960950_50892910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb2cf20521cc6cf1e55157081e294d57bed3cec5' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\headline.index.tpl.html',
      1 => 1536738742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d010960950_50892910 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['holder']->value && $_smarty_tpl->tpl_vars['holder']->value->lang->is_active && $_smarty_tpl->tpl_vars['holder']->value->lang->title) {?>


    <?php if ($_smarty_tpl->tpl_vars['holder']->value->data->extra2) {?><div class="section-heading text-center"><?php }?>

    <h<?php echo (($tmp = @$_smarty_tpl->tpl_vars['holder']->value->data->extra1)===null||$tmp==='' ? "1" : $tmp);?>
>
        <?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->title;?>

    </h<?php echo (($tmp = @$_smarty_tpl->tpl_vars['holder']->value->data->extra1)===null||$tmp==='' ? "1" : $tmp);?>
>
    <?php if (!empty($_smarty_tpl->tpl_vars['holder']->value->lang->teaser)) {?>
        <h4><?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->teaser;?>
</h4>
    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['holder']->value->data->extra3;?>


    <?php if ($_smarty_tpl->tpl_vars['holder']->value->data->extra2) {?></div><?php }?>



<?php }
}
}
