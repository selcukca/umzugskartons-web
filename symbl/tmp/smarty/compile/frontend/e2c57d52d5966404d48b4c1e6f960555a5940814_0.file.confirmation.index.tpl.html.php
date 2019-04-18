<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:15:49
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\order\confirmation.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1c9a5304548_80711532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2c57d52d5966404d48b4c1e6f960555a5940814' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\order\\confirmation.index.tpl.html',
      1 => 1536446733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1c9a5304548_80711532 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['content']->value->tb == "TB_DATA") {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'symbl_php_module'))) {
throw new SmartyException('block tag \'symbl_php_module\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_php_module', array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"scalan/umzugskartons/profile","form/abstract"),'create'=>true));
$_block_repeat=true;
echo $_block_plugin1::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"scalan/umzugskartons/profile","form/abstract"),'create'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


    <?php if (isset($_smarty_tpl->tpl_vars['klarna']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['klarna']->value['html_snippet'];?>

    <?php } else { ?>
        not
    <?php }?>

<?php $_block_repeat=false;
echo $_block_plugin1::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"scalan/umzugskartons/profile","form/abstract"),'create'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }?>


<?php }
}
