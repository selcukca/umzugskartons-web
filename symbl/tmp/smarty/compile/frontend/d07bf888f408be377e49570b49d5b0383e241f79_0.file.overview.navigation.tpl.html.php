<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:17:08
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\profile\overview.navigation.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1c9f46dcd10_28411100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd07bf888f408be377e49570b49d5b0383e241f79' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\profile\\overview.navigation.tpl.html',
      1 => 1537869623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1c9f46dcd10_28411100 (Smarty_Internal_Template $_smarty_tpl) {
echo Symbl\Cms\Smarty::symbl_screen(array('load'=>"scalan/umzugskartons/profile"),$_smarty_tpl);?>






<?php if (($_smarty_tpl->tpl_vars['USER']->value->fk_status != $_smarty_tpl->tpl_vars['STATUS_ONLINE']->value) || ($_smarty_tpl->tpl_vars['USER']->value->relocation->fk_status != $_smarty_tpl->tpl_vars['STATUS_ONLINE']->value)) {?>


    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <?php if ($_smarty_tpl->tpl_vars['USER']->value->fk_status != $_smarty_tpl->tpl_vars['STATUS_ONLINE']->value) {?>
            <div class="pb-3">
                <?php echo $_smarty_tpl->tpl_vars['I18N']->value["user.status"];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['I18N']->value->getStatus($_smarty_tpl->tpl_vars['USER']->value->fk_status,"user.");?>
</strong><br />
                <?php echo $_smarty_tpl->tpl_vars['I18N']->value->getStatus($_smarty_tpl->tpl_vars['USER']->value->relocation->fk_status,"user.desc.");?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['USER']->value->relocation->fk_status != $_smarty_tpl->tpl_vars['STATUS_ONLINE']->value) {?>
            <div>
                <?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.status"];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['I18N']->value->getStatus($_smarty_tpl->tpl_vars['USER']->value->relocation->fk_status,"company.");?>
</strong><br />
                <?php echo $_smarty_tpl->tpl_vars['I18N']->value->getStatus($_smarty_tpl->tpl_vars['USER']->value->relocation->fk_status,"company.message.");?>

            </div>
        <?php }?>

    </div>

<?php }?>







<?php if (isset($_GET['saved'])) {?>
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <?php echo $_smarty_tpl->tpl_vars['I18N']->value["partner.profile.message.saved"];?>


    </div>

<?php }
}
}
