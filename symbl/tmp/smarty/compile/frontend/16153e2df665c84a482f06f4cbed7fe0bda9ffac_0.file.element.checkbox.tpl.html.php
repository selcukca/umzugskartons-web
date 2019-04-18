<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:17:09
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\abstract\form\element.checkbox.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1c9f569f934_99974612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16153e2df665c84a482f06f4cbed7fe0bda9ffac' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\abstract\\form\\element.checkbox.tpl.html',
      1 => 1536866205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1c9f569f934_99974612 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['error']);
}?>

<div class="form-group">

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

    <div class="custom-control custom-checkbox">
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['error']) {
echo " is-invalid";
}
$_prefixVariable20=ob_get_clean();
echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>$_smarty_tpl->tpl_vars['element']->value,'class'=>"custom-control-input".$_prefixVariable20),$_smarty_tpl);?>


        <?php if (!empty($_smarty_tpl->tpl_vars['value']->value)) {?>
            <label class="custom-control-label" for="<?php echo $_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['value']->value === true) {?>
                <?php echo $_smarty_tpl->tpl_vars['I18N']->value[$_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['name']];?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

            <?php }?>
            </label>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['help']->value)) {?>
            <div>
                <small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['help']->value;?>
</small>
            </div>
        <?php }?>


        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <div class="invalid-feedback"><?php echo $_smarty_tpl->tpl_vars['I18N']->value->get($_smarty_tpl->tpl_vars['error']->value,$_smarty_tpl->tpl_vars['error']->value);?>
</div>
        <?php }?>

    </div>



</div>
<?php }
}
