<?php
/* Smarty version 3.1.31, created on 2018-09-06 11:49:40
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\new_age\module\basic\carousel\basic\image.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b90f834c11858_67957593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af383d9f9b33ceb03cf6ee5e3969861f091fd30e' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\new_age\\module\\basic\\carousel\\basic\\image.index.tpl.html',
      1 => 1504003467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b90f834c11858_67957593 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['holder']->value && ($_smarty_tpl->tpl_vars['holder']->value->data->media->isFile() || $_smarty_tpl->tpl_vars['holder']->value->lang->media->isFile())) {?>


    <?php if ($_smarty_tpl->tpl_vars['holder']->value->lang->media->isFile()) {?>
        <?php $_block_plugin32 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin32, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('media'=>$_smarty_tpl->tpl_vars['holder']->value->lang->media,'class'=>"fancybox",'rel'=>"gallery-".((string)$_smarty_tpl->tpl_vars['parent']->value->id)));
$_block_repeat=true;
echo $_block_plugin32::symbl_link(array('media'=>$_smarty_tpl->tpl_vars['holder']->value->lang->media,'class'=>"fancybox",'rel'=>"gallery-".((string)$_smarty_tpl->tpl_vars['parent']->value->id)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

            <?php echo Symbl\Cms\Smarty::symbl_image(array('media'=>$_smarty_tpl->tpl_vars['holder']->value->lang->media,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['holder']->value->data->extra3)===null||$tmp==='' ? "original" : $tmp)),$_smarty_tpl);?>

        <?php $_block_repeat=false;
echo $_block_plugin32::symbl_link(array('media'=>$_smarty_tpl->tpl_vars['holder']->value->lang->media,'class'=>"fancybox",'rel'=>"gallery-".((string)$_smarty_tpl->tpl_vars['parent']->value->id)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php } else { ?>
        <?php $_block_plugin33 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin33, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('media'=>$_smarty_tpl->tpl_vars['holder']->value->data->media,'rel'=>"gallery-".((string)$_smarty_tpl->tpl_vars['parent']->value->id),'class'=>"fancybox img-thumbnail"));
$_block_repeat=true;
echo $_block_plugin33::symbl_link(array('media'=>$_smarty_tpl->tpl_vars['holder']->value->data->media,'rel'=>"gallery-".((string)$_smarty_tpl->tpl_vars['parent']->value->id),'class'=>"fancybox img-thumbnail"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

            <?php echo Symbl\Cms\Smarty::symbl_image(array('media'=>$_smarty_tpl->tpl_vars['holder']->value->data->media,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['holder']->value->data->extra3)===null||$tmp==='' ? "original" : $tmp)),$_smarty_tpl);?>

        <?php $_block_repeat=false;
echo $_block_plugin33::symbl_link(array('media'=>$_smarty_tpl->tpl_vars['holder']->value->data->media,'rel'=>"gallery-".((string)$_smarty_tpl->tpl_vars['parent']->value->id),'class'=>"fancybox img-thumbnail"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php }?>


<?php }
}
}
