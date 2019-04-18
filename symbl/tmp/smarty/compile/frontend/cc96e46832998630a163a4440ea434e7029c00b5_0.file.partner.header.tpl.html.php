<?php
/* Smarty version 3.1.31, created on 2018-09-15 22:58:11
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\partner.header.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b9d7263614562_85445437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc96e46832998630a163a4440ea434e7029c00b5' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\partner.header.tpl.html',
      1 => 1536746424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9d7263614562_85445437 (Smarty_Internal_Template $_smarty_tpl) {
?>

<header class="masthead masthead-half">

    <div class="container h-100">

        <h1>
            <?php echo Symbl\Cms\Smarty::symbl_image(array('media'=>$_smarty_tpl->tpl_vars['oPartner']->value->media,'size'=>"50x50x0"),$_smarty_tpl);?>

            <?php echo $_smarty_tpl->tpl_vars['oPartner']->value->title;?>

            <?php if ($_smarty_tpl->tpl_vars['oPartner']->value->package) {?>
                <small class="float-right"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['oPartner']->value->package, 'UTF-8');?>
</small>
            <?php }?>
        </h1>

        <h4><?php echo $_smarty_tpl->tpl_vars['oPartner']->value->zip;?>
 <?php echo $_smarty_tpl->tpl_vars['oPartner']->value->city;?>
, <?php echo $_smarty_tpl->tpl_vars['oPartner']->value->country->title;?>
</h4>
    </div>

</header><?php }
}
