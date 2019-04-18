<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:41:40
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\login.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cfb495feb7_93592843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf881392cf5de71cc214cb1d9a906a93dd214518' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\login.index.tpl.html',
      1 => 1537798646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cfb495feb7_93592843 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'symbl_php_module'))) {
throw new SmartyException('block tag \'symbl_php_module\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_php_module', array('load'=>"basic/login",'screen'=>array("basic/login","form/abstract")));
$_block_repeat=true;
echo $_block_plugin2::symbl_php_module(array('load'=>"basic/login",'screen'=>array("basic/login","form/abstract")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


    <?php if (isset($_GET['logout'])) {?>

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $_smarty_tpl->tpl_vars['I18N']->value->msg_success_logout;?>

        </div>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['USER']->value->id) {?>

        <?php echo nl2br($_smarty_tpl->tpl_vars['I18N']->value["form.login.msg.success"]);?>


        <?php if ($_smarty_tpl->tpl_vars['BASKET']->value['PACKAGE'] && $_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"]) {?>

            <?php echo Symbl\Cms\Smarty::symbl_redirect(array('structure'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"],'type'=>"meta",'seconds'=>0),$_smarty_tpl);?>


        <?php } else { ?>
            <?php echo Symbl\Cms\Smarty::symbl_redirect(array('linkto'=>$_smarty_tpl->tpl_vars['holder']->value->data->linkto,'type'=>"meta",'seconds'=>"0"),$_smarty_tpl);?>

        <?php }?>



    <?php } else { ?>

        <form<?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>


            <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'username','label'=>true),$_smarty_tpl);?>

            <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'password','label'=>true),$_smarty_tpl);?>



            <div class="clearfix">
                <div class="pull-right">
                    <?php echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'btn_submit','class'=>"btn btn-primary",'value'=>$_smarty_tpl->tpl_vars['I18N']->value->btn_submit),$_smarty_tpl);?>

                </div>
            </div>

        </form>

        <?php if ($_smarty_tpl->tpl_vars['STRUCTURE']->value["REQUEST_PWDCHANGE"]) {?>
            <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["REQUEST_PWDCHANGE"]->linkto));
$_block_repeat=true;
echo $_block_plugin3::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["REQUEST_PWDCHANGE"]->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                <?php echo $_smarty_tpl->tpl_vars['STRUCTURE']->value["REQUEST_PWDCHANGE"]->lang->title;?>

            <?php $_block_repeat=false;
echo $_block_plugin3::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["REQUEST_PWDCHANGE"]->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php }?>
    <?php }?>


<?php $_block_repeat=false;
echo $_block_plugin2::symbl_php_module(array('load'=>"basic/login",'screen'=>array("basic/login","form/abstract")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
