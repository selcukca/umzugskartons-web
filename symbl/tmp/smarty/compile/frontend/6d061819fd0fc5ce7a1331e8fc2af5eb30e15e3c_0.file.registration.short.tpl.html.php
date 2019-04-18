<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:41:40
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\registration.short.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cfb4f33ae5_93896448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d061819fd0fc5ce7a1331e8fc2af5eb30e15e3c' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\registration.short.tpl.html',
      1 => 1536750861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cfb4f33ae5_93896448 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'symbl_php_module'))) {
throw new SmartyException('block tag \'symbl_php_module\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_php_module', array('load'=>"scalan/umzugskartons/registration",'file'=>"short",'screen'=>array("scalan/umzugskartons/profile")));
$_block_repeat=true;
echo $_block_plugin4::symbl_php_module(array('load'=>"scalan/umzugskartons/registration",'file'=>"short",'screen'=>array("scalan/umzugskartons/profile")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


    <form<?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>


        <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'title','label'=>"company.title"),$_smarty_tpl);?>


        <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'email','label'=>"company.email"),$_smarty_tpl);?>


        <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'identity','label'=>"company.identity",'help'=>$_smarty_tpl->tpl_vars['I18N']->value["company.help.identity"]),$_smarty_tpl);?>



        <div class="clearfix">
            <div class="pull-right">
                <?php echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'btn_submit','class'=>"btn btn-primary",'value'=>$_smarty_tpl->tpl_vars['I18N']->value->btn_next),$_smarty_tpl);?>

            </div>
        </div>
    </form>



<?php $_block_repeat=false;
echo $_block_plugin4::symbl_php_module(array('load'=>"scalan/umzugskartons/registration",'file'=>"short",'screen'=>array("scalan/umzugskartons/profile")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
