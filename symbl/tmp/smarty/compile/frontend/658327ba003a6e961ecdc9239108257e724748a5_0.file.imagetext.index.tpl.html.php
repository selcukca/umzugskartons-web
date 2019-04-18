<?php
/* Smarty version 3.1.31, created on 2018-09-06 11:49:35
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\new_age\module\basic\carousel\basic\imagetext.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b90f82f3d62b7_64718928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '658327ba003a6e961ecdc9239108257e724748a5' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\new_age\\module\\basic\\carousel\\basic\\imagetext.index.tpl.html',
      1 => 1504003467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b90f82f3d62b7_64718928 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['holder']->value && ($_smarty_tpl->tpl_vars['holder']->value->data->media->isFile() || $_smarty_tpl->tpl_vars['holder']->value->lang->media->isFile())) {?>


    <?php if ($_smarty_tpl->tpl_vars['holder']->value->lang->media->isFile()) {?>
        
            <?php echo Symbl\Cms\Smarty::symbl_image(array('media'=>$_smarty_tpl->tpl_vars['holder']->value->lang->media,'size'=>"original"),$_smarty_tpl);?>

        
    <?php } else { ?>
        
            <?php echo Symbl\Cms\Smarty::symbl_image(array('media'=>$_smarty_tpl->tpl_vars['holder']->value->data->media,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['holder']->value->data->extra3)===null||$tmp==='' ? "original" : $tmp)),$_smarty_tpl);?>

        
    <?php }?>


    <div class="carousel-caption">
        <?php if ($_smarty_tpl->tpl_vars['holder']->value->lang->title) {?><h3><?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->title;?>
</h3><?php }?>

        <div><?php echo $_smarty_tpl->tpl_vars['holder']->value->lang->content;?>
</div>

    </div>

<?php }
}
}
