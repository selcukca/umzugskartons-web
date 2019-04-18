<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:17:02
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\company\preview.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1c9ee5e1a99_08423740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2f661d323793ab72fe54da4251be532ed69e168' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\company\\preview.index.tpl.html',
      1 => 1537392904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1c9ee5e1a99_08423740 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="card w-100">

  <div class="card-body">
        <div class="media">

            <?php echo Symbl\Cms\Smarty::symbl_image(array('class'=>"align-self-start mr-3",'media'=>$_smarty_tpl->tpl_vars['USER']->value->relocation->media,'size'=>"100x100x1"),$_smarty_tpl);?>


            <div class="media-body">
                <h4 class="media-heading"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['USER']->value->relocation->title)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['I18N']->value["company[preview][title]"] : $tmp);?>
</h4>
                <div><?php echo (($tmp = @$_smarty_tpl->tpl_vars['USER']->value->relocation->getFormattedContent())===null||$tmp==='' ? $_smarty_tpl->tpl_vars['I18N']->value["company[preview][content]"] : $tmp);?>
</div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['USER']->value->relocation->orders->has("premium")) {?>


            <div class="text-right">
                <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('class'=>"card-link",'linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["PROFILE_DATA"]->linkto));
$_block_repeat=true;
echo $_block_plugin2::symbl_link(array('class'=>"card-link",'linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["PROFILE_DATA"]->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['I18N']->value["btn_change_message"];
$_block_repeat=false;
echo $_block_plugin2::symbl_link(array('class'=>"card-link",'linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["PROFILE_DATA"]->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </div>

        <?php }?>
  </div>
</div>

<?php }
}
