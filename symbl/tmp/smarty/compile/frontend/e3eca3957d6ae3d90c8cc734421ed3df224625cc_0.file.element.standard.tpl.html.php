<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:12
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\abstract\form\element.standard.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d010691384_55447179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3eca3957d6ae3d90c8cc734421ed3df224625cc' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\abstract\\form\\element.standard.tpl.html',
      1 => 1536617003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d010691384_55447179 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['error']);
}?>


<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['formGroupClass']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['formGroupClass']->value;
}
if ($_smarty_tpl->tpl_vars['error']->value) {?> is-invalid<?php }?>">

    <?php if (!empty($_smarty_tpl->tpl_vars['label']->value)) {?>
        <label for="<?php echo $_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
">

            <?php if ($_smarty_tpl->tpl_vars['label']->value === true) {?>
                <?php echo $_smarty_tpl->tpl_vars['I18N']->value[$_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['name']];?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['I18N']->value->get($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl->tpl_vars['label']->value);?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['required']) {?> <?php echo $_smarty_tpl->tpl_vars['I18N']->value['element.required'];
}?>

        </label>
    <?php }?>


    <?php if (isset($_smarty_tpl->tpl_vars['prefix']->value) || isset($_smarty_tpl->tpl_vars['suffix']->value)) {?>
        <div class="input-group">

            <?php if (isset($_smarty_tpl->tpl_vars['prefix']->value)) {?><span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
</span><?php }?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['error']->value) {
echo " is-invalid";
}
$_prefixVariable5=ob_get_clean();
echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>$_smarty_tpl->tpl_vars['element']->value,'class'=>"form-control".$_prefixVariable5,'attributes'=>(($tmp = @$_smarty_tpl->tpl_vars['attributes']->value)===null||$tmp==='' ? null : $tmp)),$_smarty_tpl);?>


            <?php if (isset($_smarty_tpl->tpl_vars['suffix']->value)) {?><span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['suffix']->value;?>
</span><?php }?>

        </div>
    <?php } else { ?>

        <?php ob_start();
if ($_smarty_tpl->tpl_vars['error']->value) {
echo " is-invalid";
}
$_prefixVariable6=ob_get_clean();
echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>$_smarty_tpl->tpl_vars['element']->value,'class'=>"form-control".$_prefixVariable6,'attributes'=>(($tmp = @$_smarty_tpl->tpl_vars['attributes']->value)===null||$tmp==='' ? null : $tmp)),$_smarty_tpl);?>


    <?php }?>



    <?php if (!empty($_smarty_tpl->tpl_vars['help']->value)) {?>
        <small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['help']->value;?>
</small>
    <?php }?>


    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['I18N']->value->get($_smarty_tpl->tpl_vars['error']->value,$_smarty_tpl->tpl_vars['error']->value);?>
</div>
    <?php }?>

</div>
<?php }
}
