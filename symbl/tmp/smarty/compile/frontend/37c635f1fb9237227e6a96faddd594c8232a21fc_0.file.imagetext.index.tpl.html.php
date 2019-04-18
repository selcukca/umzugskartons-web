<?php
/* Smarty version 3.1.31, created on 2018-09-13 09:09:52
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\imagetext.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b9a0d40a61bd1_44982643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37c635f1fb9237227e6a96faddd594c8232a21fc' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\imagetext.index.tpl.html',
      1 => 1536444408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a0d40a61bd1_44982643 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['content']->value->tb == "TB_DATA") {
if ($_smarty_tpl->tpl_vars['holder']->value && $_smarty_tpl->tpl_vars['holder']->value->lang->is_active) {?>

<div class="mod">
    <div class="row">

        <?php if ($_smarty_tpl->tpl_vars['holder']->value->data->extra1 == "left") {?>

            <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'file'=>"image"),$_smarty_tpl);?>

            <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'file'=>"text"),$_smarty_tpl);?>



        <?php } else { ?>

            <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'file'=>"text"),$_smarty_tpl);?>

            <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'file'=>"image"),$_smarty_tpl);?>



        <?php }?>

    </div>
</div>

<?php }
}
}
}
