<?php
/* Smarty version 3.1.31, created on 2018-09-09 00:05:43
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\imagetext.text.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b9447b7bfbcd0_01763911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '623ccd00a36451c128ec4976beced0060227d578' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\imagetext.text.tpl.html',
      1 => 1504003467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9447b7bfbcd0_01763911 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-md-<?php if ($_smarty_tpl->tpl_vars['holder']->value->data->extra3 == "small") {?>9<?php } elseif ($_smarty_tpl->tpl_vars['holder']->value->data->extra3 == "medium") {?>8<?php } else { ?>6<?php }?>">
    <?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->content;?>

</div>
<?php }
}
