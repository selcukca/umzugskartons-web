<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:32:39
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\package.basket.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cd976a5b54_03609019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '627e766a51846fa05e15f6a7f9a68467dba05b52' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\package.basket.tpl.html',
      1 => 1537450783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cd976a5b54_03609019 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="bg-tertiary text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">

                <h2 class="section-heading"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["package[title]"];?>
 <?php echo $_smarty_tpl->tpl_vars['oPackage']->value->lang->title;?>
</h2>
                <h4 class="mb-4">ab <?php echo $_smarty_tpl->tpl_vars['oPackage']->value->data->getFormattedPrice($_smarty_tpl->tpl_vars['USER']->value->relocation->country);?>
 <?php echo $_smarty_tpl->tpl_vars['I18N']->value->per_month;?>
</h4>

                <?php $_smarty_tpl->_assignInScope('query', "package=".((string)$_smarty_tpl->tpl_vars['oPackage']->value->data->id));
?>
                <?php echo $_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"]->data->setPlainValue("urlquery",$_smarty_tpl->tpl_vars['query']->value);?>

                <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('class'=>"btn btn-outline btn-xl",'linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"]->linkto));
$_block_repeat=true;
echo $_block_plugin2::symbl_link(array('class'=>"btn btn-outline btn-xl",'linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"]->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                    <?php echo $_smarty_tpl->tpl_vars['I18N']->value->btn_basket;?>

                <?php $_block_repeat=false;
echo $_block_plugin2::symbl_link(array('class'=>"btn btn-outline btn-xl",'linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"]->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </div>


        </div>
    </div>
</section><?php }
}
