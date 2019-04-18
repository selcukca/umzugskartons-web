<?php
/* Smarty version 3.1.31, created on 2018-09-12 11:00:48
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\breadcrumb.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b98d5c00a5ca0_16724407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26c013289a8d1a336a5f81273d38aca93c13b4ac' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\breadcrumb.index.tpl.html',
      1 => 1536607027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b98d5c00a5ca0_16724407 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['content']->value->tb == "TB_DATA") {
if ($_smarty_tpl->tpl_vars['ROUTE']->value->datatype->data->ident != "startpage") {?>
<ol class="breadcrumb">


    <li class="breadcrumb-item">
        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value[4]->linkto));
$_block_repeat=true;
echo $_block_plugin1::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value[4]->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['STRUCTURE']->value[4]->lang->title;
$_block_repeat=false;
echo $_block_plugin1::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value[4]->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    </li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROUTE']->value->parents, 'oParent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oParent']->value) {
?>
        <li class="breadcrumb-item"><?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oParent']->value->linkto));
$_block_repeat=true;
echo $_block_plugin2::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oParent']->value->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['oParent']->value->lang->title;
$_block_repeat=false;
echo $_block_plugin2::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oParent']->value->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['ROUTE']->value->lang->title;?>
</li>
</ol>
<?php }
}
}
}
