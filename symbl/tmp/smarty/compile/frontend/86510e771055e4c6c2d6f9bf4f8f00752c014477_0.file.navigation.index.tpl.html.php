<?php
/* Smarty version 3.1.31, created on 2018-09-10 13:04:09
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\profile\navigation.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b964fa94321b7_61234880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86510e771055e4c6c2d6f9bf4f8f00752c014477' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\profile\\navigation.index.tpl.html',
      1 => 1536492117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b964fa94321b7_61234880 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Nav tabs -->
<ul class="nav nav-pills">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STRUCTURE']->value[27]->childs->getVisibles(), 'oStructure');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oStructure']->value) {
?>
    <li class="nav-item">

        <?php ob_start();
if (($_smarty_tpl->tpl_vars['oStructure']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oStructure']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {
echo " active";
}
$_prefixVariable2=ob_get_clean();
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto,'class'=>"nav-link".$_prefixVariable2));
$_block_repeat=true;
echo $_block_plugin3::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto,'class'=>"nav-link".$_prefixVariable2), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oStructure']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oStructure']->value->lang->title : $tmp);?>

        <?php $_block_repeat=false;
echo $_block_plugin3::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto,'class'=>"nav-link".$_prefixVariable2), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


    </li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</ul>

<br />
<br />
<?php echo Symbl\Cms\Smarty::symbl_screen(array('load'=>"scalan/umzugskartons/profile"),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['USER']->value->relocation->fk_status != $_smarty_tpl->tpl_vars['STATUS_ONLINE']->value) {?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            Ihr Unternehmen: <strong><?php echo $_smarty_tpl->tpl_vars['I18N']->value->getStatus($_smarty_tpl->tpl_vars['USER']->value->relocation->fk_status,"[relocation]");?>
</strong><br />
            <?php echo $_smarty_tpl->tpl_vars['I18N']->value->getStatus($_smarty_tpl->tpl_vars['USER']->value->relocation->fk_status,"[relocation][desc]");?>

        </div>


    <?php }
}
}
