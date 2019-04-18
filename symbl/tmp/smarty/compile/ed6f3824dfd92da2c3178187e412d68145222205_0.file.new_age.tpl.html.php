<?php
/* Smarty version 3.1.31, created on 2018-09-06 11:49:41
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\new_age.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b90f835aa63a4_67989101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed6f3824dfd92da2c3178187e412d68145222205' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\new_age.tpl.html',
      1 => 1511721750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b90f835aa63a4_67989101 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\entwicklung\\xampp\\htdocs\\symbl\\cms.shared\\class\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['PAGE']->value['title'];?>
</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['WWW_HOME_DIR']->value;?>
favicon.ico" />

        <!-- meta -->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PAGE']->value['meta']->getAll(), 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

        <meta <?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
="<?php echo $_smarty_tpl->tpl_vars['item']->value['key'];?>
" content="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
">
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


        <!-- css -->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PAGE']->value['css']->getFiles(), 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>

        <link href="<?php echo $_smarty_tpl->tpl_vars['file']->value->setLoaded();?>
" type="text/css" rel="stylesheet" />
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->

    </head>


    <body class="<?php if ($_smarty_tpl->tpl_vars['ROUTE']->value) {
echo $_smarty_tpl->tpl_vars['ROUTE']->value->datatype->data->ident;?>
 page-<?php echo $_smarty_tpl->tpl_vars['ROUTE']->value->getId();
}
if ($_smarty_tpl->tpl_vars['URL_VIEW_VALUE']->value) {?> popup<?php }
if (isset($_smarty_tpl->tpl_vars['PAGE']->value['carousel'])) {?> carousel<?php }
if ($_smarty_tpl->tpl_vars['URL_TK_VALUE']->value) {?> tk<?php }?>" data-spy="scroll" data-target=".navbar-custom" <?php if (isset($_smarty_tpl->tpl_vars['PAGE']->value['background']) && $_smarty_tpl->tpl_vars['PAGE']->value['background']->isFile()) {?> style="background: url(<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['PAGE']->value['background']->getThumbUrl(),"#param#","original");?>
) repeat fixed center top #000;"<?php }?>>


        <?php if ($_smarty_tpl->tpl_vars['URL_VIEW_VALUE']->value == 0) {?>
            <?php echo Symbl\Cms\Smarty::symbl_include(array('load'=>"frontend",'file'=>"standard"),$_smarty_tpl);?>

        <?php } else { ?>
            <?php echo Symbl\Cms\Smarty::symbl_include(array('load'=>"frontend",'file'=>"popup"),$_smarty_tpl);?>

        <?php }?>


        <!-- scripts -->

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PAGE']->value['javascript']->getFiles(), 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>

        <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"><?php echo '</script'; ?>
>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>



        <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">
        // <![CDATA[

            Symbl.init('<?php echo $_smarty_tpl->tpl_vars['WWW_HOME_DIR']->value;?>
', '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['WWW_PROJECT_HOME_DIR']->value,$_smarty_tpl->tpl_vars['WWW_HOME_DIR']->value,'');?>
', '<?php echo $_smarty_tpl->tpl_vars['WWW_SCRIPT_DIR']->value;?>
', '<?php echo @constant('REAL_PROJECT_NAME');?>
', '<?php echo $_smarty_tpl->tpl_vars['GET_QUERY']->value;?>
');

            $(document).ready(function() {


                <?php if (($_smarty_tpl->tpl_vars['PAGE']->value['jquery']->count() > 0)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PAGE']->value['jquery'], 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
?>

<?php echo preg_replace('!^!m',str_repeat(' ',16),$_smarty_tpl->tpl_vars['js']->value);?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                <?php }?>


            });
        // ]]>
        <?php echo '</script'; ?>
>


    </body>
</html>
<?php }
}
