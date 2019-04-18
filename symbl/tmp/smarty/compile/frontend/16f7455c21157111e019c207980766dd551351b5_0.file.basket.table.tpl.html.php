<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:12
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\basket.table.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d010418b08_40486604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16f7455c21157111e019c207980766dd551351b5' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\basket.table.tpl.html',
      1 => 1538379790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d010418b08_40486604 (Smarty_Internal_Template $_smarty_tpl) {
?>

<table class="table">
    <?php if ($_smarty_tpl->tpl_vars['showColgroup']->value) {?>
    <colgroup>
        <col />
        <col width="200" />
        <col width="200" />
        <col width="200" />
    </colgroup>
    <?php }?>
    <thead>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.product"];?>
</th>
            <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.quantity"];?>
</th>
            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.price.unit"];?>
 (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['USER']->value->relocation->country->currency)===null||$tmp==='' ? "EUR" : $tmp);?>
)</th>
            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.price.total"];?>
 (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['USER']->value->relocation->country->currency)===null||$tmp==='' ? "EUR" : $tmp);?>
)</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>
                <strong><?php echo $_smarty_tpl->tpl_vars['oPackage']->value->lang->title;?>
 <?php echo $_smarty_tpl->tpl_vars['I18N']->value["package.title"];?>
</strong><br />
                <?php if ($_smarty_tpl->tpl_vars['basket']->value['unit']['additional'] && !$_smarty_tpl->tpl_vars['oPackage']->value->data->isFree($_smarty_tpl->tpl_vars['USER']->value->relocation->country)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.additional"];?>
 <?php echo $_smarty_tpl->tpl_vars['basket']->value['unit']['additional'];?>
% <?php echo $_smarty_tpl->tpl_vars['I18N']->value->per_month;?>
<br/
                <?php }?>
            </td>
            <td class="text-center">
                <?php echo $_smarty_tpl->tpl_vars['basket']->value['quantity'];?>

            </td>
            <td class="text-right">
                <?php echo Cnx\Smarty::modifier_currency(($_smarty_tpl->tpl_vars['basket']->value['unit']['netto']/100));?>

            </td>
            <td class="text-right">
                <?php echo Cnx\Smarty::modifier_currency(($_smarty_tpl->tpl_vars['basket']->value['amount']['netto']/100));?>


            </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['showElement']->value) {?>
        <tr>
            <td colspan="4">
                <div class="alert alert-warning clearfix" role="alert">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'code','label'=>$_smarty_tpl->tpl_vars['I18N']->value["package[code]"],'help'=>$_smarty_tpl->tpl_vars['I18N']->value["package[code][desc]"]),$_smarty_tpl);?>

                    <div class="pull-right">
                        <?php echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'btn_code','class'=>"btn btn-secondary",'value'=>$_smarty_tpl->tpl_vars['I18N']->value["basket.button.code"]),$_smarty_tpl);?>

                    </div>
                </div>

            </td>
        </tr>
        <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['jquery'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['jquery'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'jquery'))) {
throw new SmartyException('block tag \'jquery\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jquery', array());
$_block_repeat=true;
echo $_block_plugin5::jquery(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

            $('input[name="code"').keypress(function (e) {

                if (e.which == 13) {
                    $('input[type="submit"][name="btn_code"]').trigger('click');
                    e.preventDefault();
                }
            });
        <?php $_block_repeat=false;
echo $_block_plugin5::jquery(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['basket']->value['free_months']) {?>
        <tr>
            <td><strong><?php echo $_smarty_tpl->tpl_vars['oPackage']->value->lang->title;?>
 <?php echo $_smarty_tpl->tpl_vars['I18N']->value["package.title"];?>
</strong>, <?php echo $_smarty_tpl->tpl_vars['I18N']->value->free_months;?>
</td>
            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['basket']->value['free_months'];?>
</td>
            <td class="text-right" ><?php echo Cnx\Smarty::modifier_currency("0");?>
</td>
            <td class="text-right" ><?php echo Cnx\Smarty::modifier_currency("0");?>
</td>
        </tr>
        <?php }?>
    </tbody>

    <tfoot>


        <?php if ($_smarty_tpl->tpl_vars['USER']->value->relocation->country->tax > 0) {?>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <th class="text-right"><?php echo Cnx\Smarty::modifier_currency($_smarty_tpl->tpl_vars['USER']->value->relocation->country->tax);?>
 <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket[mwst]"];?>
</th>
            <th class="text-right"><?php echo Cnx\Smarty::modifier_currency(($_smarty_tpl->tpl_vars['basket']->value['amount']['tax']/100));?>
</th>
        </tr>
        <?php }?>

        <tr style="font-size:100%">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <th class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['basket']->value['discount']['unit']) {?>
                    <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.amount.total.sum"];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.amount.total.full"];?>

                <?php }?>

                <br /><small>
                <?php if ($_smarty_tpl->tpl_vars['USER']->value->relocation->country->tax > 0) {?>
                    <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.tax.included"];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.tax.excluded"];?>

                <?php }?>
                </small>
            </th>
            <th class="text-right"><?php echo Cnx\Smarty::modifier_currency(($_smarty_tpl->tpl_vars['basket']->value['amount']['brutto']/100));?>
</th>
        </tr>

        <?php if ($_smarty_tpl->tpl_vars['basket']->value['discount']['unit']) {?>
            <tr>
                <td>
                    <strong><?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.discount"];?>
</strong>,
                    <?php if ($_smarty_tpl->tpl_vars['BASKET']->value['COUPON']->discount_type == "percent") {?>
                        <?php echo Cnx\Smarty::modifier_currency($_smarty_tpl->tpl_vars['BASKET']->value['COUPON']->discount);?>
 % <?php echo $_smarty_tpl->tpl_vars['I18N']->value["per_month"];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['BASKET']->value['COUPON']->discount_type == "fixed") {?>
                        <?php echo Cnx\Smarty::modifier_currency(($_smarty_tpl->tpl_vars['basket']->value['discount']['total']/100));?>

                    <?php }?>
                </td>
                <td class="text-center">&nbsp;</td>
                <td class="text-right" >&nbsp;</td>
                <td class="text-right" >-<?php echo Cnx\Smarty::modifier_currency(($_smarty_tpl->tpl_vars['basket']->value['discount']['total']/100));?>
</td>
            </tr>


            <tr style="font-size:120%">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <th class="text-right">
                    <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.amount.total.full"];?>

                    <br />
                    <small>
                    <?php if ($_smarty_tpl->tpl_vars['USER']->value->relocation->country->tax > 0) {?>
                        <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.tax.included"];?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['I18N']->value["basket.tax.excluded"];?>

                    <?php }?>
                    </small>
                </th>
                <th class="text-right">
                    <?php echo Cnx\Smarty::modifier_currency(($_smarty_tpl->tpl_vars['basket']->value['total']['brutto']/100));?>


                    <?php if ($_smarty_tpl->tpl_vars['USER']->value->relocation->country->tax > 0) {?>
                    <br /><small>(<?php echo Cnx\Smarty::modifier_currency(($_smarty_tpl->tpl_vars['basket']->value['total']['tax']/100));?>
)</small>
                    <?php }?>
                </th>
            </tr>
        <?php }?>
    </tfoot>

</table>

<?php }
}
