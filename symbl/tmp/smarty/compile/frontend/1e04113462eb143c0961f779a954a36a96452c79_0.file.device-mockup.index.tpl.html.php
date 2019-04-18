<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:37:36
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\device-mockup.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cec07997f7_35137710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e04113462eb143c0961f779a954a36a96452c79' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\device-mockup.index.tpl.html',
      1 => 1538379014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cec07997f7_35137710 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\entwicklung\\xampp\\htdocs\\symbl\\cms.shared\\class\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
?>

<?php $_smarty_tpl->_assignInScope('carouselId', (($tmp = @$_smarty_tpl->tpl_vars['content']->value->ident)===null||$tmp==='' ? "carousel-".((string)$_smarty_tpl->tpl_vars['content']->value->id) : $tmp));
?>


<div class="device-wrapper<?php $_prefixVariable2 = $_smarty_tpl->tpl_vars['content']->value->getDevice()->getClass();
$_smarty_tpl->_assignInScope('classname', $_prefixVariable2);
if ($_prefixVariable2) {?> <?php echo $_smarty_tpl->tpl_vars['classname']->value;
}?>">
    <div class="device" data-device="<?php echo $_smarty_tpl->tpl_vars['content']->value->getDevice()->getType();?>
" data-orientation="<?php echo $_smarty_tpl->tpl_vars['content']->value->getDevice()->getOrientation();?>
" data-color="<?php echo $_smarty_tpl->tpl_vars['content']->value->getDevice()->getColor();?>
">
        <div class="screen">
            <!-- PUT CONTENTS HERE -->

            <?php $_smarty_tpl->_assignInScope('gallery', $_smarty_tpl->tpl_vars['content']->value->subdata->getWithMedia());
?>
            <div id="<?php echo $_smarty_tpl->tpl_vars['carouselId']->value;?>
" class="carousel slide" data-ride="carousel">
                <?php if ($_smarty_tpl->tpl_vars['gallery']->value->count()) {?>
                <ol class="carousel-indicators">
                    <li data-target="#<?php echo $_smarty_tpl->tpl_vars['carouselId']->value;?>
" data-slide-to="0" class="active"></li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gallery']->value->reindex(false), 'subcontent', false, 'idx');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['idx']->value => $_smarty_tpl->tpl_vars['subcontent']->value) {
?>
                        <li data-target="#<?php echo $_smarty_tpl->tpl_vars['carouselId']->value;?>
" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['idx']->value+1;?>
"></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </ol>
                <?php }?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['holder']->value->media->getThumbUrl(),"#param#","original");?>
" alt="">
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gallery']->value, 'subcontent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcontent']->value) {
?>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['subcontent']->value->holder->media->getThumbUrl(),"#param#","original");?>
" alt="">
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </div>
            </div>

        </div>
        <div class="button">

        </div>
    </div>
</div><?php }
}
