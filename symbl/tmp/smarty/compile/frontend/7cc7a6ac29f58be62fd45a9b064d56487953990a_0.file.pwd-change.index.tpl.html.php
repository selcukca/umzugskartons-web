<?php
/* Smarty version 3.1.31, created on 2018-09-24 16:11:45
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\user\pwd-change.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ba8f0a197b584_60611261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cc7a6ac29f58be62fd45a9b064d56487953990a' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\user\\pwd-change.index.tpl.html',
      1 => 1537798014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba8f0a197b584_60611261 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\entwicklung\\xampp\\htdocs\\symbl\\cms.shared\\class\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
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




    <div id="pwdchange">

        <?php if ((isset($_GET['saved'])) && ($_GET['saved'] == $_smarty_tpl->tpl_vars['content']->value->id)) {?>

            
            <?php echo nl2br($_smarty_tpl->tpl_vars['I18N']->value["form.pwd-change.msg.success"]);?>






            <br />
            <br />
            <?php $_prefixVariable2 = $_smarty_tpl->tpl_vars['STRUCTURE']->value["LOGIN"];
$_smarty_tpl->_assignInScope('redirect', $_prefixVariable2);
if ($_prefixVariable2) {?>
                <?php $_smarty_tpl->_assignInScope('seconds', 20);
?>
                <?php echo Symbl\Cms\Smarty::symbl_redirect(array('structure'=>$_smarty_tpl->tpl_vars['redirect']->value,'type'=>"meta",'seconds'=>$_smarty_tpl->tpl_vars['seconds']->value),$_smarty_tpl);?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "link", null, null);
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['redirect']->value->linkto));
$_block_repeat=true;
echo $_block_plugin2::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['redirect']->value->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['redirect']->value->lang->title;
$_block_repeat=false;
echo $_block_plugin2::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['redirect']->value->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['I18N']->value["redirect.message"],array("#seconds#","#link#"),array($_smarty_tpl->tpl_vars['seconds']->value,$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'link')));?>

            <?php }?>




        <?php } else { ?>

            <?php if ($_smarty_tpl->tpl_vars['USER']->value->id > 0) {?>
                <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'file'=>"form"),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'file'=>"error"),$_smarty_tpl);?>

            <?php }?>

        <?php }?>

    </div>


<?php $_block_repeat=false;
echo $_block_plugin1::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array('form/abstract','scalan/umzugskartons/profile')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>





<?php }
}
