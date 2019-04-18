<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:32:38
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\package.header.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cd96392210_45988617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c6be52e2ea221594eaa7c71148745de44704900' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\package.header.tpl.html',
      1 => 1537450762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cd96392210_45988617 (Smarty_Internal_Template $_smarty_tpl) {
?>

<header class="masthead ">

    <div class="container h-100">

        <div class="row h-100">
            <div class="col-lg-12 my-auto">
                <div class="header-content mx-auto">
                    <h1 class="mb-3">
                        <?php echo $_smarty_tpl->tpl_vars['I18N']->value["package[title]"];?>
 <?php echo $_smarty_tpl->tpl_vars['oPackage']->value->lang->title;?>

                    </h1>
                    <h5 class="mb-4"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['oPackage']->value->lang->subtitle)===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</h5>

                    <a href="#features" class="btn btn-outline btn-xl js-scroll-trigger">Features</a>

                    <?php $_smarty_tpl->_assignInScope('query', "package=".((string)$_smarty_tpl->tpl_vars['oPackage']->value->data->id));
?>
                    <?php echo $_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"]->data->setPlainValue("urlquery",$_smarty_tpl->tpl_vars['query']->value);?>

                    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('class'=>"btn btn-outline btn-xl",'linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"]->linkto));
$_block_repeat=true;
echo $_block_plugin1::symbl_link(array('class'=>"btn btn-outline btn-xl",'linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"]->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                        <?php echo $_smarty_tpl->tpl_vars['I18N']->value->btn_basket;?>

                    <?php $_block_repeat=false;
echo $_block_plugin1::symbl_link(array('class'=>"btn btn-outline btn-xl",'linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"]->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>



                </div>
            </div>

        </div>


    </div>


</header><?php }
}
