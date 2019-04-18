<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:16:50
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\profile\statistics.details.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1c9e2b7cd02_59875069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4fd4a51c59a9cc6c12070ba8c11de9a18c0748e' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\profile\\statistics.details.tpl.html',
      1 => 1536841028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1c9e2b7cd02_59875069 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['statistic']->value['type'] != $_smarty_tpl->tpl_vars['type']->value) {?> style="display:none;"<?php }?>>
    <td colspan="4" class="pl-5">

        <div class="alert alert-info">
            <?php echo $_smarty_tpl->tpl_vars['I18N']->value["statistic.message.limiting"];?>

        </div>

        <?php if (($_smarty_tpl->tpl_vars['statistic']->value['type'] == $_smarty_tpl->tpl_vars['type']->value) && isset($_smarty_tpl->tpl_vars['statistic']->value['list'])) {?>
        <table class="table">
            <colgroup>
                <col width="150" />
                <?php if ($_smarty_tpl->tpl_vars['statistic']->value['type'] == "rating") {?>
                    <col />
                    <col />
                <?php } elseif ($_smarty_tpl->tpl_vars['statistic']->value['type'] == "activation") {?>
                    <col />
                <?php }?>
                <col />
                <col />
                <col />
            </colgroup>
            <thead>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['I18N']->value["statistic.column.date"];?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['statistic']->value['type'] == "rating") {?>
                        <td><?php echo $_smarty_tpl->tpl_vars['I18N']->value["statistic.column.rating.stars"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['I18N']->value["statistic.column.rating.message"];?>
</td>
                    <?php } elseif ($_smarty_tpl->tpl_vars['statistic']->value['type'] == "activation") {?>
                        <td><?php echo $_smarty_tpl->tpl_vars['I18N']->value["statistic.column.activation.code"];?>
</td>
                    <?php }?>
                    <td><?php echo $_smarty_tpl->tpl_vars['I18N']->value["statistic.column.platform"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['I18N']->value["statistic.column.version"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['I18N']->value["statistic.column.type"];?>
</td>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statistic']->value['list'], 'relation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['relation']->value) {
?>
                <tr>
                    <td><?php echo Symbl\Cms\Smarty::modifier_date($_smarty_tpl->tpl_vars['relation']->value->created,$_smarty_tpl->tpl_vars['I18N']->value);?>
 <small><?php echo Symbl\Cms\Smarty::modifier_time($_smarty_tpl->tpl_vars['relation']->value->created,$_smarty_tpl->tpl_vars['I18N']->value);?>
</small></td>
                    <?php if ($_smarty_tpl->tpl_vars['statistic']->value['type'] == "rating") {?>
                        <td><?php echo $_smarty_tpl->tpl_vars['relation']->value->stars;?>
</td>
                        <td><?php echo (($tmp = @preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['relation']->value->message))===null||$tmp==='' ? "-" : $tmp);?>
</td>
                    <?php } elseif ($_smarty_tpl->tpl_vars['statistic']->value['type'] == "activation") {?>
                        <td><?php echo $_smarty_tpl->tpl_vars['relation']->value->code;?>
</td>
                    <?php }?>

                    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['relation']->value->device_platform)===null||$tmp==='' ? "-" : $tmp);?>
</td>
                    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['relation']->value->device_version)===null||$tmp==='' ? "-" : $tmp);?>
</td>
                    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['relation']->value->device_type)===null||$tmp==='' ? "-" : $tmp);?>
</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </tbody>
        </table>
        <?php }?>


    </td>
</tr><?php }
}
