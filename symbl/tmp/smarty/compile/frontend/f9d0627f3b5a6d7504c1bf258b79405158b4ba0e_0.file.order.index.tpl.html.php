<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:41:40
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\order.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cfb47ac7e6_14204612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9d0627f3b5a6d7504c1bf258b79405158b4ba0e' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\order.index.tpl.html',
      1 => 1537539066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cfb47ac7e6_14204612 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!$_smarty_tpl->tpl_vars['BASKET']->value['PACKAGE']) {?>

    <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.msg.empty"];?>


<?php } elseif ($_smarty_tpl->tpl_vars['USER']->value->relocation->country->fk_status != $_smarty_tpl->tpl_vars['STATUS_ONLINE']->value) {?>

    <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.msg.country_not_implemented"];?>


<?php } elseif ($_smarty_tpl->tpl_vars['USER']->value->relocation->id == 0) {?>

    <?php echo Symbl\Cms\Smarty::symbl_screen(array('load'=>"scalan/umzugskartons/order"),$_smarty_tpl);?>

    <div class="row">
        <div class="col-md-5">

            <h3 class="page-header"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["order.section.login"];?>
</h3>
            <br />
            <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"basic/login"),$_smarty_tpl);?>


        </div>
        <div class="col-md-5 offset-md-2">

            <h3 class="page-header"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["order.section.registration"];?>
</h3>
            <br />
            <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"scalan/umzugskartons/registration",'file'=>"short"),$_smarty_tpl);?>


        </div>
    </div>


<?php } else { ?>

    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'symbl_php_module'))) {
throw new SmartyException('block tag \'symbl_php_module\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_php_module', array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"form/abstract","scalan/umzugskartons/basket","scalan/umzugskartons/profile","scalan/umzugskartons/registration")));
$_block_repeat=true;
echo $_block_plugin1::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"form/abstract","scalan/umzugskartons/basket","scalan/umzugskartons/profile","scalan/umzugskartons/registration")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


        <?php if (isset($_smarty_tpl->tpl_vars['klarna']->value)) {?>
            <?php echo $_smarty_tpl->tpl_vars['klarna']->value['html_snippet'];?>

        <?php } else { ?>
        -
        <?php }?>


    <?php $_block_repeat=false;
echo $_block_plugin1::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"form/abstract","scalan/umzugskartons/basket","scalan/umzugskartons/profile","scalan/umzugskartons/registration")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>





<?php }?>

<?php }
}
