<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:32:39
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\bootstrap\newage\featurelist\feature.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cd975dd8c4_83661391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dced17214962b7aefe3529f87425385b66eb7ffc' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\bootstrap\\newage\\featurelist\\feature.index.tpl.html',
      1 => 1537427495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cd975dd8c4_83661391 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['holder']->value && $_smarty_tpl->tpl_vars['holder']->value->lang->is_active && $_smarty_tpl->tpl_vars['holder']->value->lang->title) {?>


    <div class="feature-item" <?php $_prefixVariable6 = $_smarty_tpl->tpl_vars['parent']->value->getConfig()->getCarouselId($_smarty_tpl->tpl_vars['holder']->value->data->extra2);
$_smarty_tpl->_assignInScope('carouselId', $_prefixVariable6);
if ($_prefixVariable6) {?> data-target="<?php echo $_smarty_tpl->tpl_vars['carouselId']->value;?>
" data-slide-to="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['holder']->value->data->extra2)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['idx']->value : $tmp);?>
"<?php }?>>
        <i class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['holder']->value->data->extra1)===null||$tmp==='' ? "icon-eye text-primary" : $tmp);?>
"></i>
        <h3><?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->title;?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->content;?>
</p>
    </div>

<?php }
}
}
