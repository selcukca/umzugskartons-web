<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:17:10
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\abstract\form\element.file.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1c9f6021125_28405296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4119cacfc953e3b06630e38ee4f48af9a31dbf4' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\abstract\\form\\element.file.tpl.html',
      1 => 1536617090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1c9f6021125_28405296 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['error']);
}?>



<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['formGroupClass']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['formGroupClass']->value;
}
if ($_smarty_tpl->tpl_vars['error']->value) {?> has-error<?php }?>">

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


    <span class="btn btn-success btn-sm fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span><?php echo $_smarty_tpl->tpl_vars['I18N']->value->btn_select_file;?>
</span>

        <?php echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>$_smarty_tpl->tpl_vars['element']->value,'class'=>"fileupload",'data-url'=>((string)$_smarty_tpl->tpl_vars['url']->value)),$_smarty_tpl);?>


    </span>



    <?php if (!empty($_smarty_tpl->tpl_vars['help']->value)) {?>
        <div><small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['help']->value;?>
</small></div>
    <?php }?>


    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <span class="help-block error"><?php echo $_smarty_tpl->tpl_vars['I18N']->value->get($_smarty_tpl->tpl_vars['error']->value,$_smarty_tpl->tpl_vars['error']->value);?>
</span>
    <?php }?>

</div>



<?php }
}
