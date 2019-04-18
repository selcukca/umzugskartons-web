<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:37:36
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\basic\column-collection.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1cec0268ac9_69762917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f9a27a0ec3ba485e25413326777fa57dea4117e' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\basic\\column-collection.index.tpl.html',
      1 => 1537387504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1cec0268ac9_69762917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('columns', (($tmp = @$_smarty_tpl->tpl_vars['content']->value->extra1)===null||$tmp==='' ? 1 : $tmp));
?>



<?php if ($_smarty_tpl->tpl_vars['content']->value->subdata->count()) {?>

    <div class="row<?php if (isset($_smarty_tpl->tpl_vars['parent']->value) && ($_smarty_tpl->tpl_vars['parent']->value->module->ident == "bootstrap/newage/header")) {?> h-100<?php }?> mod mod-column-collection">

        <?php
$__section_column_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_column']) ? $_smarty_tpl->tpl_vars['__smarty_section_column'] : false;
$__section_column_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['columns']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_column_0_total = $__section_column_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_column'] = new Smarty_Variable(array());
if ($__section_column_0_total != 0) {
for ($__section_column_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_column']->value['index'] = 0; $__section_column_0_iteration <= $__section_column_0_total; $__section_column_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_column']->value['index']++){
?>

            <?php $_smarty_tpl->_assignInScope('css', $_smarty_tpl->tpl_vars['content']->value->getClassByColumn((isset($_smarty_tpl->tpl_vars['__smarty_section_column']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_column']->value['index'] : null)));
?>
            <div class="<?php if ($_smarty_tpl->tpl_vars['css']->value) {
echo $_smarty_tpl->tpl_vars['css']->value;
} else { ?>col-md-<?php echo 12/$_smarty_tpl->tpl_vars['columns']->value;?>
 col-sm-<?php echo 24/$_smarty_tpl->tpl_vars['columns']->value;
}?>">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value->subdata->filter('content','colnr','==',(isset($_smarty_tpl->tpl_vars['__smarty_section_column']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_column']->value['index'] : null)), 'subcontent', false, NULL, 'columns', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcontent']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_columns']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_columns']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_columns']->value['index'];
?>

                    <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['subcontent']->value->module->ident,'content'=>$_smarty_tpl->tpl_vars['subcontent']->value,'holder'=>$_smarty_tpl->tpl_vars['subcontent']->value->holder,'first'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_columns']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_columns']->value['first'] : null)),$_smarty_tpl);?>


                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


            </div>

        <?php
}
}
if ($__section_column_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_column'] = $__section_column_0_saved;
}
?>

    </div>

<?php }
}
}
