<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:32:38
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\package.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cd9630d2b6_07638060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbd8f37f5b2076f004e7c8feeafc149824a0c30d' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\package.index.tpl.html',
      1 => 1537450693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cd9630d2b6_07638060 (Smarty_Internal_Template $_smarty_tpl) {
echo Symbl\Cms\Smarty::symbl_module(array('load'=>"scalan/umzugskartons/package",'file'=>'header'),$_smarty_tpl);?>



<a id="features"></a>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value->getModuleList($_smarty_tpl->tpl_vars['oPackage']->value->data->id), 'subcontent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcontent']->value) {
?>

    <?php if (($_smarty_tpl->tpl_vars['subcontent']->value->module->ident == "basic/page/display") && ($_smarty_tpl->tpl_vars['subcontent']->value->extra2 == 12)) {?>
        <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"scalan/umzugskartons/package",'file'=>'basket'),$_smarty_tpl);?>

    <?php }?>
    <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['subcontent']->value->module->ident,'content'=>$_smarty_tpl->tpl_vars['subcontent']->value,'holder'=>$_smarty_tpl->tpl_vars['subcontent']->value->holder,'parent'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);?>


<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>



<?php }
}
