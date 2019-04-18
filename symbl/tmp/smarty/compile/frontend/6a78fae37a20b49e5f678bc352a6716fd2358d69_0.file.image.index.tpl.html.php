<?php
/* Smarty version 3.1.31, created on 2018-09-06 11:49:41
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\new_age\module\basic\image.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b90f8359104e3_34531179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a78fae37a20b49e5f678bc352a6716fd2358d69' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\new_age\\module\\basic\\image.index.tpl.html',
      1 => 1510942560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b90f8359104e3_34531179 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['holder']->value && $_smarty_tpl->tpl_vars['holder']->value->hasMedia()) {?>


    <div class="mod mod-image media">

        <?php if ($_smarty_tpl->tpl_vars['holder']->value->data->linkto->isLink()) {?>

            <?php $_block_plugin38 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin38, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['holder']->value->data->linkto));
$_block_repeat=true;
echo $_block_plugin38::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['holder']->value->data->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                <?php echo Symbl\Cms\Smarty::symbl_image(array('class'=>"img-responsive",'media'=>$_smarty_tpl->tpl_vars['holder']->value->media,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['holder']->value->data->extra3)===null||$tmp==='' ? "original" : $tmp)),$_smarty_tpl);?>

            <?php $_block_repeat=false;
echo $_block_plugin38::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['holder']->value->data->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


        <?php } else { ?>

            <?php $_block_plugin39 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin39, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('media'=>$_smarty_tpl->tpl_vars['holder']->value->media,'class'=>"mediafile"));
$_block_repeat=true;
echo $_block_plugin39::symbl_link(array('media'=>$_smarty_tpl->tpl_vars['holder']->value->media,'class'=>"mediafile"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                <?php echo Symbl\Cms\Smarty::symbl_image(array('class'=>"img-responsive",'media'=>$_smarty_tpl->tpl_vars['holder']->value->media,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['holder']->value->data->extra3)===null||$tmp==='' ? "original" : $tmp)),$_smarty_tpl);?>

            <?php $_block_repeat=false;
echo $_block_plugin39::symbl_link(array('media'=>$_smarty_tpl->tpl_vars['holder']->value->media,'class'=>"mediafile"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['content']->value->module->config->isField('lang[mediafile_legend]')) {?>
        <div class="mediainfo">
            <?php if ($_smarty_tpl->tpl_vars['holder']->value->lang->mediafile_legend) {?>
                <?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->mediafile_legend;?>
<br />
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['holder']->value->data->mediafile_copyright;?>

        </div>
        <?php }?>

    </div>

<?php }
}
}
