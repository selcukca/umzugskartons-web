<?php
/* Smarty version 3.1.31, created on 2018-09-24 15:50:19
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\user\pwd-request.form.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ba8eb9b75ed63_63246915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '984b6c4d0fa86df0bb8f991a20e859ebfec8ff9c' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\user\\pwd-request.form.tpl.html',
      1 => 1537796893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba8eb9b75ed63_63246915 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form<?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>


    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'login_email','label'=>"account.login"),$_smarty_tpl);?>



    <?php echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'btn_submit','class'=>"btn btn-primary",'value'=>$_smarty_tpl->tpl_vars['I18N']->value["user.button.requestPwdLink"]),$_smarty_tpl);?>


</form>

<?php }
}
