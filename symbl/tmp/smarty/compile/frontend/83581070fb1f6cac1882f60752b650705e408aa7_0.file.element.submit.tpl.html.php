<?php
/* Smarty version 3.1.31, created on 2018-09-25 09:43:10
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\abstract\form\element.submit.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ba9e70edfd413_12224108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83581070fb1f6cac1882f60752b650705e408aa7' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\abstract\\form\\element.submit.tpl.html',
      1 => 1536579115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba9e70edfd413_12224108 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!empty($_smarty_tpl->tpl_vars['label']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['label']->value === true) {?>
        <?php $_smarty_tpl->_assignInScope('label', $_smarty_tpl->tpl_vars['I18N']->value[$_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['element']->value]['name']]);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('label', $_smarty_tpl->tpl_vars['I18N']->value->get($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl->tpl_vars['label']->value));
?>
    <?php }
}?>


<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? "btn btn-default" : $tmp);
$_prefixVariable10=ob_get_clean();
echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>$_smarty_tpl->tpl_vars['element']->value,'class'=>$_prefixVariable10,'value'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);
}
}
