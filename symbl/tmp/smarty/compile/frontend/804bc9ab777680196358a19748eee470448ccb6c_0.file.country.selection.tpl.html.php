<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:12
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\country.selection.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d01018bde7_30080442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '804bc9ab777680196358a19748eee470448ccb6c' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\country.selection.tpl.html',
      1 => 1537534992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d01018bde7_30080442 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['AUTH']->value->getAuth()) {?>
    <div class="clearfix">

        <div class="pull-right form-group">
            <label for="countrySelect">Standort</label>
            <select name="fk_country" class="form-control chosen-select" >
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COUNTRIES']->value->getAvailables(), 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                    <option<?php if ($_smarty_tpl->tpl_vars['USER']->value->relocation->country->id == $_smarty_tpl->tpl_vars['country']->value->data->id) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['country']->value->data->id;?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value->lang->title;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        </div>

    </div>

    <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['jquery'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['jquery'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'jquery'))) {
throw new SmartyException('block tag \'jquery\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jquery', array());
$_block_repeat=true;
echo $_block_plugin4::jquery(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

        $('select[name="fk_country"]').on('change', function() {
            <?php if (!empty($_smarty_tpl->tpl_vars['elementId']->value)) {?>
                $('#<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
').css({ opacity: 0.5 });
                $('#<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
').load('<?php echo $_smarty_tpl->tpl_vars['WWW_SCRIPT_DIR']->value;
echo $_smarty_tpl->tpl_vars['WWW_ARGV']->value;?>
?fk_country=' + $(this).val() + " #<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
", function(result) {
                    $('#<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
').css({ opacity: 1 });
                });
            <?php } else { ?>
                document.location.href= '?fk_country=' + $(this).val();
            <?php }?>

        })
    <?php $_block_repeat=false;
echo $_block_plugin4::jquery(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
}
