<?php
/* Smarty version 3.1.31, created on 2018-09-06 11:49:41
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\new_age\module\footer.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b90f8359e6047_90272998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a306db61a052c10ff88bd08330fa75f9683549fb' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\new_age\\module\\footer.index.tpl.html',
      1 => 1511105094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b90f8359e6047_90272998 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['URL_VIEW_VALUE']->value == 0) {?>
<hr>

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-4">
            <p><?php echo $_smarty_tpl->tpl_vars['SETTING']->value['PAGE_FOOTER'];?>
</p>
        </div>
        <div class="col-lg-8">

            <ul class="nav navbar-nav navbar-right">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STRUCTURE']->value["META_NAVIGATION"]->childs->getVisibles(), 'oStructure');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oStructure']->value) {
?>


                <li<?php if (($_smarty_tpl->tpl_vars['oStructure']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oStructure']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?> class="active"<?php }?>>

                    <?php $_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto));
$_block_repeat=true;
echo $_block_plugin40::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oStructure']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oStructure']->value->lang->title : $tmp);?>

                    <?php $_block_repeat=false;
echo $_block_plugin40::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
    </div>
</footer>

<?php }
}
}
