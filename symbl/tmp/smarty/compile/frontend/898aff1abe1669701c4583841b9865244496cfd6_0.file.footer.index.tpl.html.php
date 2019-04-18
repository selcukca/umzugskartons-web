<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:12
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\footer.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d010c60519_11284704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '898aff1abe1669701c4583841b9865244496cfd6' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\footer.index.tpl.html',
      1 => 1536436214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d010c60519_11284704 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['URL_VIEW_VALUE']->value == 0) {?>


    <footer>
      <div class="container">
        <p><?php echo $_smarty_tpl->tpl_vars['SETTING']->value['PAGE_FOOTER'];?>
</p>
        <ul class="list-inline">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STRUCTURE']->value["META_NAVIGATION"]->childs->getVisibles(), 'oStructure');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oStructure']->value) {
?>


                <li class="list-inline-item<?php if (($_smarty_tpl->tpl_vars['oStructure']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oStructure']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?> active<?php }?>">

                    <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto));
$_block_repeat=true;
echo $_block_plugin6::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oStructure']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oStructure']->value->lang->title : $tmp);?>

                    <?php $_block_repeat=false;
echo $_block_plugin6::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
    </footer>

<?php }
}
}
