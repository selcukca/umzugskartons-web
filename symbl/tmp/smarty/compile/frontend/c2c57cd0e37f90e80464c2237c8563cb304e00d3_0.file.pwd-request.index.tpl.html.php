<?php
/* Smarty version 3.1.31, created on 2018-09-24 15:55:23
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\user\pwd-request.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ba8eccbd428a0_00113335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c57cd0e37f90e80464c2237c8563cb304e00d3' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\user\\pwd-request.index.tpl.html',
      1 => 1537797154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba8eccbd428a0_00113335 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'symbl_php_module'))) {
throw new SmartyException('block tag \'symbl_php_module\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_php_module', array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array('form/abstract','scalan/umzugskartons/profile')));
$_block_repeat=true;
echo $_block_plugin1::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array('form/abstract','scalan/umzugskartons/profile')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>




    <div id="pwdrequest">

        <?php if ((isset($_GET['saved'])) && ($_GET['saved'] == $_smarty_tpl->tpl_vars['content']->value->id)) {?>

            
            <?php echo nl2br($_smarty_tpl->tpl_vars['I18N']->value["form.pwd-request.msg.success"]);?>


        <?php } else { ?>

            <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'file'=>"form"),$_smarty_tpl);?>


        <?php }?>

    </div>


<?php $_block_repeat=false;
echo $_block_plugin1::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array('form/abstract','scalan/umzugskartons/profile')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>





<?php }
}
