<?php
/* Smarty version 3.1.31, created on 2018-09-24 16:59:31
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\carousel.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ba8fbd30fb0a6_65940925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8e05b5d5fdfa7d013348fce9d2f086c2043c014' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\carousel.index.tpl.html',
      1 => 1536440905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba8fbd30fb0a6_65940925 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['content']->value->tb == "TB_DATA") {?>

</div>

<div class="hier <?php echo $_smarty_tpl->tpl_vars['content']->value->extra2;?>
">
    <div id="owl-<?php echo $_smarty_tpl->tpl_vars['content']->value->id;?>
" class="owl-carousel owl-theme">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value->subdata, 'subcontent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcontent']->value) {
?>

            <div class="shot">
                <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>((string)$_smarty_tpl->tpl_vars['content']->value->module->ident)."/".((string)$_smarty_tpl->tpl_vars['subcontent']->value->module->ident),'content'=>$_smarty_tpl->tpl_vars['subcontent']->value,'holder'=>$_smarty_tpl->tpl_vars['subcontent']->value->holder,'parent'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);?>

            </div>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


    </div>
</div>

<div class="container">


<?php echo Cnx\Smarty::pagedata_activate(array('group'=>"carousel"),$_smarty_tpl);?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['jquery'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['jquery'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'jquery'))) {
throw new SmartyException('block tag \'jquery\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jquery', array());
$_block_repeat=true;
echo $_block_plugin2::jquery(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    $('#owl-<?php echo $_smarty_tpl->tpl_vars['content']->value->id;?>
').owlCarousel(<?php echo $_smarty_tpl->tpl_vars['content']->value->extra1;?>
);
    $('#owl-<?php echo $_smarty_tpl->tpl_vars['content']->value->id;?>
 .fancybox').fancybox({
        openEffect	: 'elastic',
        closeEffect	: 'elastic',
        title : false
    });

<?php $_block_repeat=false;
echo $_block_plugin2::jquery(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php }
}
}
