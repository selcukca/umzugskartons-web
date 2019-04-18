<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:32:39
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\bootstrap\newage\featurelist.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cd97196780_40414240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f9585023df5ed834636376ac5f0d934e1401bb3' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\bootstrap\\newage\\featurelist.index.tpl.html',
      1 => 1537426463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cd97196780_40414240 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-fluid">


    <?php $_smarty_tpl->_assignInScope('idx', 0);
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value->subdata->getWithHolder()->filter("data","id",">",0)->chunk($_smarty_tpl->tpl_vars['content']->value->getConfig()->getCols()), 'chunks');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['chunks']->value) {
?>

        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chunks']->value, 'subcontent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcontent']->value) {
?>
                <div class="<?php echo $_smarty_tpl->tpl_vars['content']->value->getConfig()->getColClass();?>
">
                    <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['subcontent']->value->module->ident,'content'=>$_smarty_tpl->tpl_vars['subcontent']->value,'holder'=>$_smarty_tpl->tpl_vars['subcontent']->value->holder,'parent'=>$_smarty_tpl->tpl_vars['content']->value,'idx'=>$_smarty_tpl->tpl_vars['idx']->value),$_smarty_tpl);?>

                </div>
                <?php $_smarty_tpl->_assignInScope('idx', $_smarty_tpl->tpl_vars['idx']->value+1);
?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>


    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>



</div>
<?php }
}
