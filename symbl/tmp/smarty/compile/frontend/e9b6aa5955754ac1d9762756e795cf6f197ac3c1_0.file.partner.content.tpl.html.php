<?php
/* Smarty version 3.1.31, created on 2018-09-15 22:58:11
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\partner.content.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b9d7263739a93_04355609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b6aa5955754ac1d9762756e795cf6f197ac3c1' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\partner.content.tpl.html',
      1 => 1536750541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9d7263739a93_04355609 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section >
    <div class="container">

        <h3><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.section.address"];?>
</h3>
        <?php if ($_smarty_tpl->tpl_vars['oPartner']->value->street) {
echo $_smarty_tpl->tpl_vars['oPartner']->value->street;?>
<br /><?php }?>
        <?php echo $_smarty_tpl->tpl_vars['oPartner']->value->zip;?>
 <?php echo $_smarty_tpl->tpl_vars['oPartner']->value->city;?>
, <?php echo $_smarty_tpl->tpl_vars['oPartner']->value->country->title;?>
<br />


        <h3 class="pt-5"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.section.contact"];?>
</h3>
        <?php if ($_smarty_tpl->tpl_vars['oPartner']->value->email) {
echo $_smarty_tpl->tpl_vars['oPartner']->value->email;?>
<br /><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['oPartner']->value->phone) {
echo $_smarty_tpl->tpl_vars['oPartner']->value->phone;?>
<br /><?php }?>


        <h3 class="pt-5"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.benefits"];?>
</h3>
        <?php echo $_smarty_tpl->tpl_vars['oPartner']->value->benefits;?>

    </div>
</section>

<section class="bg-primary text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">

                <h2 class="section-heading"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["app.installed.headline1"];?>
</h2>
                <h4 class="mb-4"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["app.installed.headline2"];?>
</h4>
                <a href="<?php echo $_smarty_tpl->tpl_vars['HTTP_HOST']->value;
echo $_smarty_tpl->tpl_vars['WWW_SCRIPT_DIR']->value;
echo $_smarty_tpl->tpl_vars['WWW_ARGV']->value;?>
" class="btn btn-secondary"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["app.installed.button"];?>
</a>
            </div>


        </div>
    </div>
</section>
<?php }
}
