<?php
/* Smarty version 3.1.31, created on 2018-09-05 10:41:18
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\abstract\form\element.radio.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b8f96aee0a7c6_90092063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74b45781a2a12f8cd86308b1cfd66b5cc68b566e' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\abstract\\form\\element.radio.tpl.html',
      1 => 1504003467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8f96aee0a7c6_90092063 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="radio">
    <label>
        <?php echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>$_smarty_tpl->tpl_vars['element']->value),$_smarty_tpl);?>

        <?php if (!empty($_smarty_tpl->tpl_vars['value']->value)) {?>

            <?php if ($_smarty_tpl->tpl_vars['value']->value === true) {?>
                <?php echo $_smarty_tpl->tpl_vars['I18N']->value[$_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['name']];?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

            <?php }?>

        <?php }?>
    </label>
</div><?php }
}
