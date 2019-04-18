<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:16:35
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\profile\orders.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1c9d3424143_35717479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd4a146081cb853be7f8528d4a9183e60f689ddd' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\profile\\orders.index.tpl.html',
      1 => 1538378192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1c9d3424143_35717479 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"scalan/umzugskartons/profile/overview",'file'=>"navigation"),$_smarty_tpl);?>


<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'symbl_php_module'))) {
throw new SmartyException('block tag \'symbl_php_module\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_php_module', array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"scalan/umzugskartons/order","scalan/umzugskartons/basket","form/abstract")));
$_block_repeat=true;
echo $_block_plugin2::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"scalan/umzugskartons/order","scalan/umzugskartons/basket","form/abstract")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>



    <?php $_smarty_tpl->_assignInScope('hasPremium', $_smarty_tpl->tpl_vars['USER']->value->relocation->orders->has('premium'));
?>


    <div class="table-responsive">
        <table class="table">
            <thead>
                <th><?php echo $_smarty_tpl->tpl_vars['I18N']->value["invoice.ident"];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['I18N']->value["activation.code"];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['I18N']->value["activation.package"];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['I18N']->value["activation.valid_from"];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['I18N']->value["activation.valid_until"];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['I18N']->value["activation.cnt_activations"];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['I18N']->value["activation.fk_status"];?>
</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderlist']->value, 'oActivation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oActivation']->value) {
?>
                <tr<?php if (isset($_smarty_tpl->tpl_vars['orders']->value,$_smarty_tpl->tpl_vars['orders']->value[$_smarty_tpl->tpl_vars['oActivation']->value->id])) {?> class="bg-light"<?php }?>>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['oActivation']->value->invoice->klarna_order_id) {?>
                            <a href="?details=<?php echo $_smarty_tpl->tpl_vars['oActivation']->value->invoice->ident;?>
">
                                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oActivation']->value->invoice->ident)===null||$tmp==='' ? "-" : $tmp);?>

                            </a>
                        <?php } else { ?>
                            -
                        <?php }?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['oActivation']->value->ident;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['oActivation']->value->invoice->package->lang->title;?>
</td>
                    <td><?php echo Symbl\Cms\Smarty::modifier_date($_smarty_tpl->tpl_vars['oActivation']->value->valid_from,$_smarty_tpl->tpl_vars['I18N']->value);?>
</td>
                    <td><?php echo Symbl\Cms\Smarty::modifier_date($_smarty_tpl->tpl_vars['oActivation']->value->valid_until,$_smarty_tpl->tpl_vars['I18N']->value);?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['hasPremium']->value && ($_smarty_tpl->tpl_vars['oActivation']->value->activation_cnt > 0)) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['STRUCTURE']->value[43]->linkto->getUrl();?>
?type=activation"><?php echo $_smarty_tpl->tpl_vars['oActivation']->value->activation_cnt;?>
</a>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['oActivation']->value->activation_cnt;?>

                        <?php }?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['I18N']->value->getStatus($_smarty_tpl->tpl_vars['oActivation']->value->fk_status,"activation.");?>

                    </td>
                    <td>
                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['WWW_HOME_DIR']->value;?>
download/flyer/<?php echo $_smarty_tpl->tpl_vars['oActivation']->value->ident;?>
/"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["activation.button.flyer"];?>
</a>
                        <?php if (!$_smarty_tpl->tpl_vars['oActivation']->value->invoice->package->isFree($_smarty_tpl->tpl_vars['USER']->value->relocation->country)) {?>
                            
                        <?php }?>
                    </td>
                </tr>
                <?php if (isset($_smarty_tpl->tpl_vars['orders']->value,$_smarty_tpl->tpl_vars['orders']->value[$_smarty_tpl->tpl_vars['oActivation']->value->id])) {?>
                    <tr>
                        <td colspan="8" class="p-5">

                            <?php $_smarty_tpl->_assignInScope('klarna', $_smarty_tpl->tpl_vars['orders']->value[$_smarty_tpl->tpl_vars['oActivation']->value->id]);
?>
                            <strong><?php echo $_smarty_tpl->tpl_vars['I18N']->value["klarna.klarna_reference"];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['klarna']->value['klarna_reference'];?>
<br />
                            <br />

                            <strong><?php echo $_smarty_tpl->tpl_vars['I18N']->value["klarna.billing_address"];?>
</strong><br />
                            <?php echo $_smarty_tpl->tpl_vars['klarna']->value['billing_address']['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['klarna']->value['billing_address']['given_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['klarna']->value['billing_address']['family_name'];?>
<br />
                            <?php echo $_smarty_tpl->tpl_vars['klarna']->value['billing_address']['street_address'];?>
<br />
                            <?php echo $_smarty_tpl->tpl_vars['klarna']->value['billing_address']['street_address2'];?>
<br />
                            <?php echo $_smarty_tpl->tpl_vars['klarna']->value['billing_address']['postal_code'];?>
 <?php echo $_smarty_tpl->tpl_vars['klarna']->value['billing_address']['city'];?>
, <?php echo $_smarty_tpl->tpl_vars['klarna']->value['billing_address']['country'];?>
  <br />
                            <br />
                            <strong><?php echo $_smarty_tpl->tpl_vars['I18N']->value["klarna.order_lines"];?>
</strong><br />
                            <table>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['klarna']->value['order_lines'], 'line');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['line']->value['name'];?>
</td>
                                        <td class="text-right"><?php echo Cnx\Smarty::modifier_currency(($_smarty_tpl->tpl_vars['line']->value['quantity']*$_smarty_tpl->tpl_vars['line']->value['unit_price']/100));?>
 <?php echo $_smarty_tpl->tpl_vars['klarna']->value['purchase_currency'];?>
</td>
                                    </tr>

                                    <?php if ($_smarty_tpl->tpl_vars['line']->value['total_discount_amount']) {?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.discount"];?>
</td>
                                        <td class="text-right">-<?php echo Cnx\Smarty::modifier_currency(($_smarty_tpl->tpl_vars['line']->value['total_discount_amount']/100));?>
 <?php echo $_smarty_tpl->tpl_vars['klarna']->value['purchase_currency'];?>
</td>
                                    </tr>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>
                                            <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.amount.total.full"];?>

                                        </th>
                                        <th class="text-right"><?php echo Cnx\Smarty::modifier_currency(($_smarty_tpl->tpl_vars['klarna']->value['original_order_amount']/100));?>
 <?php echo $_smarty_tpl->tpl_vars['klarna']->value['purchase_currency'];?>
</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <small><?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.tax.included"];?>
</small>
                                        </td>
                                        <td class="text-right">
                                            <small><?php echo Cnx\Smarty::modifier_currency(($_smarty_tpl->tpl_vars['line']->value['total_tax_amount']/100));?>
 <?php echo $_smarty_tpl->tpl_vars['klarna']->value['purchase_currency'];?>
</small>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <br />


                            <br />

                            <strong><?php echo $_smarty_tpl->tpl_vars['I18N']->value["klarna.initial_payment_method"];?>
</strong>
                            <?php echo $_smarty_tpl->tpl_vars['klarna']->value['initial_payment_method']['type'];?>
, <?php echo $_smarty_tpl->tpl_vars['klarna']->value['initial_payment_method']['description'];?>


                            
                        </td>
                    </tr>
                <?php }?>
                <?php
}
} else {
?>

                    <tr>
                        <td colspan="8"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["partner.profile.orders.empty"];?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


            </tbody>
        </table>
    </div>


<?php $_block_repeat=false;
echo $_block_plugin2::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"scalan/umzugskartons/order","scalan/umzugskartons/basket","form/abstract")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
