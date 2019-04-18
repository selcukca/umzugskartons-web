<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:37:36
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\pricelist.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cec0d0e237_55205260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6425cfc687b177ecf5c65456112e44fca51b022d' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\pricelist.index.tpl.html',
      1 => 1538378063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cec0d0e237_55205260 (Smarty_Internal_Template $_smarty_tpl) {
$_prefixVariable5 = $_smarty_tpl->tpl_vars['content']->value->getPackageListByLanguage($_smarty_tpl->tpl_vars['LANGUAGE']->value->id);
$_smarty_tpl->_assignInScope('packages', $_prefixVariable5);
if ($_prefixVariable5) {?>

    <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"scalan/umzugskartons/country",'file'=>"selection",'elementId'=>"pricing"),$_smarty_tpl);?>


    <div id="pricing" class="pricing-table">

        <div class="row justify-content-md-center">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'oPackage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oPackage']->value) {
?>
            <div class="col-md-5 col-lg-4">
                <div class="item">
                    <?php if ($_smarty_tpl->tpl_vars['oPackage']->value->data->ident == "pro") {?>
                    <div class="ribbon"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["package[ribbon]"];?>
</div>
                    <?php }?>
                    <div class="heading">
                        <h3><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['oPackage']->value->lang->title, 'UTF-8');?>
</h3>
                    </div>
                    <p><?php echo $_smarty_tpl->tpl_vars['oPackage']->value->lang->subtitle;?>
</p>
                    


                    <ul class="list-unstyled mt-3 mb-4">

                        <li ><strong>+</strong> Firmendaten in der App</li>
                        <?php if ($_smarty_tpl->tpl_vars['oPackage']->value->data->free_months) {?>
                            <li><strong>+ <?php echo $_smarty_tpl->tpl_vars['oPackage']->value->data->free_months;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['I18N']->value->free_months;?>
</li>
                        <?php }?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oPackage']->value->lang->getItems(), 'txt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['txt']->value) {
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
</li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                        <li>
                            <br />Vorteile für Ihre Kunden:

                            <ol class="list-unstyled" style="padding-left:15px">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oPackage']->value->data->productlist, 'oProduct');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oProduct']->value) {
?>
                                    <li><strong>+</strong> <?php echo $_smarty_tpl->tpl_vars['oProduct']->value->title;?>
</li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </ul>
                        </li>

                    </ul>

                    <div class="price">
                        <h4>
                            <?php if (!$_smarty_tpl->tpl_vars['oPackage']->value->data->isFree($_smarty_tpl->tpl_vars['USER']->value->relocation->country)) {?>
                                <small class="text-muted small">ab</small>
                            <?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['oPackage']->value->data->getFormattedPrice($_smarty_tpl->tpl_vars['USER']->value->relocation->country);?>
 *
                        </h4>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['oPackage']->value->data->isAvailableByUser($_smarty_tpl->tpl_vars['USER']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('query', "package=".((string)$_smarty_tpl->tpl_vars['oPackage']->value->data->id));
?>
                        <?php echo $_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"]->data->setPlainValue("urlquery",$_smarty_tpl->tpl_vars['query']->value);?>

                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['oPackage']->value->data->ident != "pro") {
echo "outline-";
}
$_prefixVariable6=ob_get_clean();
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('class'=>"btn btn-block btn-".$_prefixVariable6."primary",'linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"]->linkto));
$_block_repeat=true;
echo $_block_plugin2::symbl_link(array('class'=>"btn btn-block btn-".$_prefixVariable6."primary",'linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"]->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                            <?php echo $_smarty_tpl->tpl_vars['I18N']->value->btn_basket;?>

                        <?php $_block_repeat=false;
echo $_block_plugin2::symbl_link(array('class'=>"btn btn-block btn-".$_prefixVariable6."primary",'linkto'=>$_smarty_tpl->tpl_vars['STRUCTURE']->value["BASKET"]->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php }?>

                    <div class="text-center padding">
                    <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('class'=>'','linkto'=>$_smarty_tpl->tpl_vars['oPackage']->value->lang->linkto));
$_block_repeat=true;
echo $_block_plugin3::symbl_link(array('class'=>'','linkto'=>$_smarty_tpl->tpl_vars['oPackage']->value->lang->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                        <?php echo $_smarty_tpl->tpl_vars['I18N']->value->btn_detail;?>

                    <?php $_block_repeat=false;
echo $_block_plugin3::symbl_link(array('class'=>'','linkto'=>$_smarty_tpl->tpl_vars['oPackage']->value->lang->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    </div>
                </div>

            </div>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>

    </div>

    <small class="text-muted">* <?php echo $_smarty_tpl->tpl_vars['I18N']->value["package.message.star"];?>
</small>



<?php }
}
}
