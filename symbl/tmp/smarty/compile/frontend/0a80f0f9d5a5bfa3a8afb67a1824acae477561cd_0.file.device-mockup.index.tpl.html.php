<?php
/* Smarty version 3.1.31, created on 2018-09-06 11:49:37
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\new_age\module\basic\device-mockup.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b90f831e925f5_36300307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a80f0f9d5a5bfa3a8afb67a1824acae477561cd' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\new_age\\module\\basic\\device-mockup.index.tpl.html',
      1 => 1504003468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b90f831e925f5_36300307 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\entwicklung\\xampp\\htdocs\\symbl\\cms.shared\\class\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
?>



<div class="device-wrapper">
    <div class="device" data-device="<?php echo $_smarty_tpl->tpl_vars['content']->value->getDevice()->getType();?>
" data-orientation="<?php echo $_smarty_tpl->tpl_vars['content']->value->getDevice()->getOrientation();?>
" data-color="<?php echo $_smarty_tpl->tpl_vars['content']->value->getDevice()->getColor();?>
">
        <div class="screen" style="background-image: url('<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['holder']->value->media->getThumbUrl(),"#param#","original");?>
')">
            <!-- PUT CONTENTS HERE -->
        </div>
        <div class="button">

        </div>
    </div>
</div><?php }
}
