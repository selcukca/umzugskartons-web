<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:37:36
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\bootstrap\newage\header\cta.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cec053f5b0_97304776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd385e5948080215ce0ec437ea4597e4cc561ea1b' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\bootstrap\\newage\\header\\cta.index.tpl.html',
      1 => 1537387950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cec053f5b0_97304776 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['holder']->value && $_smarty_tpl->tpl_vars['holder']->value->lang->is_active && $_smarty_tpl->tpl_vars['holder']->value->lang->title) {?>

    <div class="header-content mx-auto">
        <h1 class="mb-3">
            <?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->title;?>

        </h1>
        <?php if ($_smarty_tpl->tpl_vars['holder']->value->lang->teaser) {?>
            <h5 class="mb-4"><?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->teaser;?>
</h5>
        <?php }?>


        <?php ob_start();
if ($_smarty_tpl->tpl_vars['holder']->value->data->linkto->isAnchor()) {
echo " js-scroll-trigger";
}
$_prefixVariable1=ob_get_clean();
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['holder']->value->data->linkto,'class'=>"btn btn-outline btn-xl".$_prefixVariable1));
$_block_repeat=true;
echo $_block_plugin1::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['holder']->value->data->linkto,'class'=>"btn btn-outline btn-xl".$_prefixVariable1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

            <?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->link_title;?>

        <?php $_block_repeat=false;
echo $_block_plugin1::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['holder']->value->data->linkto,'class'=>"btn btn-outline btn-xl".$_prefixVariable1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    </div>
<?php }
}
}
