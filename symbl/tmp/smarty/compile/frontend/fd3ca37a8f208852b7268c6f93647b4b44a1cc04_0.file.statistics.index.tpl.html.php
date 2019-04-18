<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:16:50
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\profile\statistics.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1c9e21f6ac0_70382087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd3ca37a8f208852b7268c6f93647b4b44a1cc04' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\profile\\statistics.index.tpl.html',
      1 => 1536839227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1c9e21f6ac0_70382087 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"scalan/umzugskartons/profile/overview",'file'=>"navigation"),$_smarty_tpl);?>





<?php if ($_smarty_tpl->tpl_vars['USER']->value->relocation->orders->has('premium')) {?>

    <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'symbl_php_module'))) {
throw new SmartyException('block tag \'symbl_php_module\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_php_module', array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"form/abstract")));
$_block_repeat=true;
echo $_block_plugin2::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"form/abstract")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <div class="table-responsive">
        <table class="table">
            <colgroup>
                <col  />
                <col width="350" />
                <col width="150" />
            </colgroup>

            <tbody>
                <tr<?php if ($_smarty_tpl->tpl_vars['statistic']->value['type'] == "activation") {?> class="bg-light"<?php }?>>
                    <th>
                        <?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.activation_cnt"];?>

                        <div class="text-muted"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.help.activation_cnt"];?>
</div>
                    </th>
                    <td><?php echo $_smarty_tpl->tpl_vars['USER']->value->relocation->activation_cnt;?>
</td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WWW_SCRIPT_DIR']->value;
echo $_smarty_tpl->tpl_vars['WWW_ARGV']->value;?>
?type=activation"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.button.statistics.details"];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WWW_HOME_DIR']->value;?>
download/partner/statistic/activation/"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.button.statistics.download"];?>
</a>
                    </td>
                </tr>
                <?php echo Symbl\Cms\Smarty::symbl_module(array('type'=>"activation",'load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'file'=>"details"),$_smarty_tpl);?>


                <tr data-type="selection"<?php if ($_smarty_tpl->tpl_vars['statistic']->value['type'] == "selection") {?> class="bg-light"<?php }?>>
                    <th>
                        <?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.selection_cnt"];?>

                        <div class="text-muted"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.help.selection_cnt"];?>
</div>
                    </th>
                    <td><?php echo $_smarty_tpl->tpl_vars['USER']->value->relocation->selection_cnt;?>
</td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WWW_SCRIPT_DIR']->value;
echo $_smarty_tpl->tpl_vars['WWW_ARGV']->value;?>
?type=selection"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.button.statistics.details"];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WWW_HOME_DIR']->value;?>
download/partner/statistic/selection/"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.button.statistics.download"];?>
</a>
                    </td>
                </tr>
                <?php echo Symbl\Cms\Smarty::symbl_module(array('type'=>"selection",'load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'file'=>"details"),$_smarty_tpl);?>


                <tr data-type="shares"<?php if ($_smarty_tpl->tpl_vars['statistic']->value['type'] == "shares") {?> class="bg-light"<?php }?>>
                    <th>
                        <?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.shares_cnt"];?>

                        <div class="text-muted"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.help.shares_cnt"];?>
</div>
                    </th>
                    <td><?php echo $_smarty_tpl->tpl_vars['USER']->value->relocation->shares_cnt;?>
</td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WWW_SCRIPT_DIR']->value;
echo $_smarty_tpl->tpl_vars['WWW_ARGV']->value;?>
?type=shares"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.button.statistics.details"];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WWW_HOME_DIR']->value;?>
download/partner/statistic/shares/"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.button.statistics.download"];?>
</a>
                    </td>
                </tr>
                <?php echo Symbl\Cms\Smarty::symbl_module(array('type'=>"shares",'load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'file'=>"details"),$_smarty_tpl);?>


                <tr<?php if ($_smarty_tpl->tpl_vars['statistic']->value['type'] == "rating") {?> class="bg-light"<?php }?>>
                    <th>
                        <?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.rating.overview"];?>

                        <div class="text-muted"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.help.rating"];?>
</div>
                    </th>
                    <td><?php echo $_smarty_tpl->tpl_vars['USER']->value->relocation->rating_cnt;?>
 / <?php echo $_smarty_tpl->tpl_vars['USER']->value->relocation->rating_avg;?>
 <?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.rating.stars"];?>
</td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WWW_SCRIPT_DIR']->value;
echo $_smarty_tpl->tpl_vars['WWW_ARGV']->value;?>
?type=rating"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.button.statistics.details"];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WWW_HOME_DIR']->value;?>
download/partner/statistic/rating/"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.button.statistics.download"];?>
</a>
                    </td>
                </tr>
                <?php echo Symbl\Cms\Smarty::symbl_module(array('type'=>"rating",'load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'file'=>"details"),$_smarty_tpl);?>



            </tbody>
        </table>

    </div>

    <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['jquery'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['jquery'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'jquery'))) {
throw new SmartyException('block tag \'jquery\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jquery', array());
$_block_repeat=true;
echo $_block_plugin3::jquery(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

        <?php if (!empty($_smarty_tpl->tpl_vars['statistic']->value['type'])) {?>
            $('html, body').animate({
              scrollTop: ($('#<?php echo $_smarty_tpl->tpl_vars['statistic']->value['type'];?>
').offset().top - 48 - 130)
            }, 1000, "easeInOutExpo");
        <?php }?>
    <?php $_block_repeat=false;
echo $_block_plugin3::jquery(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


    

    <?php $_block_repeat=false;
echo $_block_plugin2::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"form/abstract")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['I18N']->value["page.error.perm"];?>

<?php }
}
}
