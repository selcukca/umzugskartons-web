<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:17:08
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\profile\header.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1c9f4151550_99622033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3b73cda79cf25ba46b8dba0fee7513a3f5dc0b0' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\profile\\header.index.tpl.html',
      1 => 1536606781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1c9f4151550_99622033 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row h-75">

    <div class="col">
        <h1><?php echo $_smarty_tpl->tpl_vars['USER']->value->relocation->title;?>
</h1>
        <h4><?php echo $_smarty_tpl->tpl_vars['ROUTE']->value->lang->title;?>
</h4>
    </div>

</div>

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php echo $_smarty_tpl->tpl_vars['STRUCTURE']->value[27]->lang->title;?>
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STRUCTURE']->value[27]->childs->getVisibles(), 'oStructure');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oStructure']->value) {
?>
            <li class="nav-item<?php if (($_smarty_tpl->tpl_vars['oStructure']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oStructure']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?> active<?php }?>">

                <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto,'class'=>"nav-link"));
$_block_repeat=true;
echo $_block_plugin1::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto,'class'=>"nav-link"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oStructure']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oStructure']->value->lang->title : $tmp);?>

                <?php $_block_repeat=false;
echo $_block_plugin1::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto,'class'=>"nav-link"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </ul>
    </div>
</nav>




<?php }
}
