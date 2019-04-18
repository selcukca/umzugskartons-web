<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:12
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\frontend.standard.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d010e7b243_27050720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcc15af1202d98d8578a0696562918d685dd96e8' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\frontend.standard.tpl.html',
      1 => 1536608748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d010e7b243_27050720 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"navbar"),$_smarty_tpl);?>



<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['content'];?>



<?php if (!$_smarty_tpl->tpl_vars['AUTH']->value->getAuth()) {?>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <?php echo '<script'; ?>
 type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a1af74bb7f74644"><?php echo '</script'; ?>
>
<?php }
}
}
