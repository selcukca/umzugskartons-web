<?php
/* Smarty version 3.1.31, created on 2017-11-17 20:44:58
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\abstract\form\element.ckeditor.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a0f3c3abd8234_95584922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69031ad8be290e810cd17e39fe45a1bd9d34bf16' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\abstract\\form\\element.ckeditor.tpl.html',
      1 => 1504003467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0f3c3abd8234_95584922 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="form-group<?php if ($_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['error']) {?> has-error<?php }?>">

    <?php if (!empty($_smarty_tpl->tpl_vars['label']->value)) {?>
        <label>
            <?php if ($_smarty_tpl->tpl_vars['label']->value === true) {?>
                <?php echo $_smarty_tpl->tpl_vars['I18N']->value[$_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['name']];?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['label']->value;?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['required']) {?> <?php echo $_smarty_tpl->tpl_vars['I18N']->value->required;
}?>
        </label>
    <?php }?>



    <?php echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>$_smarty_tpl->tpl_vars['element']->value,'class'=>"form-control",'attributes'=>(($tmp = @$_smarty_tpl->tpl_vars['attributes']->value)===null||$tmp==='' ? null : $tmp)),$_smarty_tpl);?>



    <?php if ($_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['error']) {?>
        <span class="help-block error"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['I18N']->value[$_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['error']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['error'] : $tmp);?>
</span>
    <?php }?>

</div>
<?php }
}
