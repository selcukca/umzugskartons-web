<?php
/* Smarty version 3.1.31, created on 2018-09-25 09:43:10
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\profile\account.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ba9e70e4f7ff6_62000938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f077106678e0c91663b9a32aabe143cc15b58ef' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\profile\\account.index.tpl.html',
      1 => 1536646971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba9e70e4f7ff6_62000938 (Smarty_Internal_Template $_smarty_tpl) {
echo Symbl\Cms\Smarty::symbl_module(array('load'=>"scalan/umzugskartons/profile/overview",'file'=>"navigation"),$_smarty_tpl);?>



<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'symbl_php_module'))) {
throw new SmartyException('block tag \'symbl_php_module\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_php_module', array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"scalan/umzugskartons/order","form/abstract")));
$_block_repeat=true;
echo $_block_plugin2::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"scalan/umzugskartons/order","form/abstract")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>




     <form<?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>


            <?php if ($_smarty_tpl->tpl_vars['form']->value['errors'] || $_smarty_tpl->tpl_vars['form']->value['error']) {?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <?php echo $_smarty_tpl->tpl_vars['I18N']->value->f_error;?>

                  <?php if ($_smarty_tpl->tpl_vars['form']->value['error']) {?>
                    <br />
                    <br />
                    <div><?php echo $_smarty_tpl->tpl_vars['form']->value['error'];?>
</div>
                  <?php }?>
                </div>
            <?php }?>

            <h3 class="page-header"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["partner.profile.account.section.user"];?>
</h3>
            <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'usr','label'=>"account.usr",'help'=>$_smarty_tpl->tpl_vars['I18N']->value["account.help.usr"]),$_smarty_tpl);?>

            <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'email','label'=>"account.email",'help'=>$_smarty_tpl->tpl_vars['I18N']->value["account.help.email"]),$_smarty_tpl);?>


            <h3 class="pt-5"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["partner.profile.account.section.pwd"];?>
</h3>
            <div class="row">
                <div class="col-md-6">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'pwd1','label'=>"account.pwd1",'help'=>$_smarty_tpl->tpl_vars['I18N']->value["account.help.pwd1"]),$_smarty_tpl);?>

                </div>
                <div class="col-md-6">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'pwd2','label'=>"account.pwd2"),$_smarty_tpl);?>

                </div>
            </div>

            <div class="clearfix">
                <div class="pull-right">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'btn_submit','class'=>"btn btn-lg btn-primary",'label'=>"account.button.save"),$_smarty_tpl);?>

                </div>
            </div>



        </form>

<?php $_block_repeat=false;
echo $_block_plugin2::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"scalan/umzugskartons/order","form/abstract")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
