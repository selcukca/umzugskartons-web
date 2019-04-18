<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:11
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\basket.overview.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d00fd3def4_99897545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a55ce2d90e050914f2e4fbcca170f8ba592b347' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\basket.overview.tpl.html',
      1 => 1538377711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d00fd3def4_99897545 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'symbl_php_module'))) {
throw new SmartyException('block tag \'symbl_php_module\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_php_module', array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"scalan/umzugskartons/profile","form/abstract")));
$_block_repeat=true;
echo $_block_plugin1::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"scalan/umzugskartons/profile","form/abstract")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>






    <form<?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>



        <?php if ($_smarty_tpl->tpl_vars['form']->value['errors'] || $_smarty_tpl->tpl_vars['form']->value['error']) {?>
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $_smarty_tpl->tpl_vars['I18N']->value->f_error;?>

              <?php if ($_smarty_tpl->tpl_vars['form']->value['error']) {?>
                <br />
                <br />
                <div><?php echo $_smarty_tpl->tpl_vars['form']->value['error'];?>
</div>
              <?php }?>
            </div>
        <?php }?>

        <div class="row">
            <div class="col-md-9">
                <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"scalan/umzugskartons/country",'file'=>"selection",'elementId'=>"basket"),$_smarty_tpl);?>

            </div>
            <div class="col-md-3">
                <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'period','label'=>false,'chosen'=>false),$_smarty_tpl);?>

            </div>
        </div>



                <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['jquery'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['jquery'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'jquery'))) {
throw new SmartyException('block tag \'jquery\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jquery', array());
$_block_repeat=true;
echo $_block_plugin2::jquery(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                    var $period = $('select[name="period"]');
                    var onPeriod = function() {
                        $('#basket').css({ opacity: 0.5 });
                        $('#basket').load('<?php echo $_smarty_tpl->tpl_vars['WWW_SCRIPT_DIR']->value;
echo $_smarty_tpl->tpl_vars['WWW_ARGV']->value;?>
?fk_period=' + $(this).val() + " #basket", function(result) {
                            $('#basket').css({ opacity: 1 });

                        });
                    }
                    $period.on('change', onPeriod);
                <?php $_block_repeat=false;
echo $_block_plugin2::jquery(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


        <div id="basket">
            <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"scalan/umzugskartons/basket",'file'=>'table','showColgroup'=>true,'showElement'=>true),$_smarty_tpl);?>

        </div>


        <div class="clearfix">
            <div class="pull-right">
                <?php if ($_smarty_tpl->tpl_vars['USER']->value->relocation->country->fk_status == $_smarty_tpl->tpl_vars['STATUS_ONLINE']->value) {?>
                    <?php echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'btn_submit','class'=>"btn btn-lg btn-primary",'value'=>$_smarty_tpl->tpl_vars['I18N']->value->btn_submit),$_smarty_tpl);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.msg.btn_submit.unavailable"];?>

                <?php }?>
            </div>
        </div>

        <?php if (!$_smarty_tpl->tpl_vars['oPackage']->value->data->isFree($_smarty_tpl->tpl_vars['USER']->value->relocation->country)) {?>
        <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.coupon.desc"];?>

        <div class="form-row align-items-center">
            <div class="col-sm-3 my-1 ">
                <label class="sr-only" for="<?php echo $_smarty_tpl->tpl_vars['form']->value['coupon']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.coupon"];?>
</label>
                <?php ob_start();
if ($_smarty_tpl->tpl_vars['form']->value['coupon']['error']) {
echo " is-invalid";
}
$_prefixVariable2=ob_get_clean();
echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>"coupon",'class'=>"form-control".$_prefixVariable2),$_smarty_tpl);?>

            </div>
            <div class="col-auto my-1">
                <?php echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'btn_coupon','class'=>"btn btn-light",'value'=>$_smarty_tpl->tpl_vars['I18N']->value["basket.button.coupon"]),$_smarty_tpl);?>

            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['form']->value['coupon']['error']) {?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['coupon']['error'];?>

        <?php }?>

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

            $('input[name="coupon"').keypress(function (e) {

                if (e.which == 13) {
                    $('input[type="submit"][name="btn_coupon"]').trigger('click');
                    e.preventDefault();
                }
            });
        <?php $_block_repeat=false;
echo $_block_plugin3::jquery(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php }?>

    </form>


<?php $_block_repeat=false;
echo $_block_plugin1::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"scalan/umzugskartons/profile","form/abstract")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
