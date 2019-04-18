<?php
/* Smarty version 3.1.31, created on 2018-09-25 09:23:56
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\registration\confirm.form.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ba9e28c82c447_95626843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6180131d88153b93f955655c45a94e146781cd9' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\registration\\confirm.form.tpl.html',
      1 => 1504003468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba9e28c82c447_95626843 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form<?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>


    <div class="row">
        <div class="col-md-8">
            <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'email','label'=>true),$_smarty_tpl);?>

        </div>
        <div class="col-md-4">
            <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'hash','label'=>true),$_smarty_tpl);?>

        </div>
    </div>



    <div class="clearfix">
        <div class="pull-right">
            <?php echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'btn_submit','class'=>"btn btn-lg btn-primary",'value'=>$_smarty_tpl->tpl_vars['I18N']->value->btn_submit),$_smarty_tpl);?>

        </div>
    </div>



</form>

<?php }
}
