<?php
/* Smarty version 3.1.31, created on 2018-09-24 15:53:57
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\user\pwd-change.form.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ba8ec756aa839_22882253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e6add5992827b9305f6669a5340034cc80ce710' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\user\\pwd-change.form.tpl.html',
      1 => 1536649583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba8ec756aa839_22882253 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form<?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>


    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'pwd1','label'=>"account.pwd1"),$_smarty_tpl);?>


    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'pwd2','label'=>"account.pwd2"),$_smarty_tpl);?>


    <?php echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'btn_submit','class'=>"btn btn-primary",'value'=>$_smarty_tpl->tpl_vars['I18N']->value->btn_submit),$_smarty_tpl);?>


</form>

<?php }
}
