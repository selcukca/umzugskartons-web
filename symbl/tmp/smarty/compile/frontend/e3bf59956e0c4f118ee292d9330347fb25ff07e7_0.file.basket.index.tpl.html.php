<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:11
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\basket.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d00fcaf105_00994104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3bf59956e0c4f118ee292d9330347fb25ff07e7' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\basket.index.tpl.html',
      1 => 1537524434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d00fcaf105_00994104 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['oPackage']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['USER']->value->relocation->country->fk_status != $_smarty_tpl->tpl_vars['STATUS_ONLINE']->value) {?>
        <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.msg.country_not_implemented"];?>

    <?php }?>

    <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"scalan/umzugskartons/basket",'file'=>"overview"),$_smarty_tpl);?>



<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.msg.empty"];?>

<?php }?>



<?php }
}
