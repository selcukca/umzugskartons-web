<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:15:48
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\page\redirect.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1c9a4eac842_24044154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fccf0b4819023ed031e64c315fe0f4d29c3b093' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\page\\redirect.index.tpl.html',
      1 => 1504003467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1c9a4eac842_24044154 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['STRUCTURE']->value[$_smarty_tpl->tpl_vars['content']->value->extra1])) {?>

    <?php echo Symbl\Cms\Smarty::symbl_redirect(array('linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value[$_smarty_tpl->tpl_vars['content']->value->extra1]->linkto,'type'=>(($tmp = @$_smarty_tpl->tpl_vars['content']->value->extra2)===null||$tmp==='' ? "meta" : $tmp),'seconds'=>(($tmp = @$_smarty_tpl->tpl_vars['content']->value->extra3)===null||$tmp==='' ? 10 : $tmp)),$_smarty_tpl);?>


<?php }
}
}
