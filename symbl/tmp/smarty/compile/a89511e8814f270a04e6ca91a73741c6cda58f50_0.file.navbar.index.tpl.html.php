<?php
/* Smarty version 3.1.31, created on 2018-09-06 11:49:41
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\new_age\module\navbar.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b90f835cd59e6_10522107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a89511e8814f270a04e6ca91a73741c6cda58f50' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\new_age\\module\\navbar.index.tpl.html',
      1 => 1526225084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b90f835cd59e6_10522107 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ROUTE']->value->datatype->data->ident == "startpage") {?>
    <?php $_smarty_tpl->_assignInScope('root', $_smarty_tpl->tpl_vars['ROUTE']->value->getId());
} elseif (($_smarty_tpl->tpl_vars['STRUCTURE']->value["RELOCATION"]->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['STRUCTURE']->value["RELOCATION"]->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('root', "RELOCATION");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('root', "MAIN_NAVIGATION");
}?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="mainNav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['WWW_PROJECT_HOME_DIR']->value;?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WWW_IMAGE_DIR']->value;?>
logo.png" />&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['SETTING']->value['PAGE_TITLE'];?>

                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <?php if ($_smarty_tpl->tpl_vars['LANGUAGES']->value->getActive()->count() > 1) {?>
                <ul class="nav navbar-nav">


                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value->getActive(), 'oLanguage', false, NULL, 'languages', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oLanguage']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['oLanguage']->value->ident == $_smarty_tpl->tpl_vars['LANGUAGE']->value->ident) {?>
                            <li class="active">
                                <a href="#"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['oLanguage']->value->ident, 'UTF-8');?>
</a>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="?language=<?php echo $_smarty_tpl->tpl_vars['oLanguage']->value->ident;?>
&redirect=<?php echo $_smarty_tpl->tpl_vars['ROUTE']->value->getId();
if (isset($_smarty_tpl->tpl_vars['PAGE']->value['langredirect'])) {
echo $_smarty_tpl->tpl_vars['PAGE']->value['langredirect'];
}?>"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['oLanguage']->value->ident, 'UTF-8');?>
</a>
                            </li>
                        <?php }?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </li>
                </ul>
                <?php }?>

                <ul class="nav navbar-nav navbar-right">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STRUCTURE']->value[$_smarty_tpl->tpl_vars['root']->value]->childs->getVisibles(), 'oStructure');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oStructure']->value) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['oStructure']->value->childs->getVisibles()->count()) {?>



                            <li class="dropdown<?php if (($_smarty_tpl->tpl_vars['oStructure']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oStructure']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?> active<?php }?>">
                                <?php $_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto,'class'=>"dropdown-toggle",'data-toggle'=>"dropdown"));
$_block_repeat=true;
echo $_block_plugin41::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto,'class'=>"dropdown-toggle",'data-toggle'=>"dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oStructure']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oStructure']->value->lang->title : $tmp);?>

                                <?php $_block_repeat=false;
echo $_block_plugin41::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto,'class'=>"dropdown-toggle",'data-toggle'=>"dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>



                                <ul class="dropdown-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oStructure']->value->childs->getVisibles(), 'oChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oChild']->value) {
?>

                                    <?php if ($_smarty_tpl->tpl_vars['oChild']->value->data->ident == "BASKET") {?>

                                        <?php if ($_smarty_tpl->tpl_vars['BASKET']->value['PACKAGE']) {?>

                                            <li<?php if (($_smarty_tpl->tpl_vars['oChild']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oChild']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?> class="active"<?php }?>>

                                                <?php $_block_plugin42 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin42, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oChild']->value->linkto));
$_block_repeat=true;
echo $_block_plugin42::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oChild']->value->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                                                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oChild']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oChild']->value->lang->title : $tmp);?>
 (1)
                                                <?php $_block_repeat=false;
echo $_block_plugin42::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oChild']->value->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


                                            </li>
                                         <?php }?>
                                    <?php } else { ?>

                                        <li<?php if (($_smarty_tpl->tpl_vars['oChild']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oChild']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?> class="active"<?php }?>>
                                            <?php $_block_plugin43 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin43, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oChild']->value->linkto));
$_block_repeat=true;
echo $_block_plugin43::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oChild']->value->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['oChild']->value->lang->title;
$_block_repeat=false;
echo $_block_plugin43::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oChild']->value->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                        </li>
                                    <?php }?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </ul>
                            </li>

                        <?php } elseif ($_smarty_tpl->tpl_vars['oStructure']->value->data->ident == "BASKET") {?>

                            <?php if ($_smarty_tpl->tpl_vars['BASKET']->value['PACKAGE']) {?>

                                <li<?php if (($_smarty_tpl->tpl_vars['oStructure']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oStructure']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?> class="active"<?php }?>>

                                    <?php $_block_plugin44 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin44, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto));
$_block_repeat=true;
echo $_block_plugin44::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oStructure']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oStructure']->value->lang->title : $tmp);?>
 (1)
                                    <?php $_block_repeat=false;
echo $_block_plugin44::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


                                </li>
                             <?php }?>


                        <?php } elseif ($_smarty_tpl->tpl_vars['oStructure']->value->data->ident == "LOGIN") {?>

                            <?php if ($_smarty_tpl->tpl_vars['USER']->value->id == 0) {?>

                                <li<?php if (($_smarty_tpl->tpl_vars['oStructure']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oStructure']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?> class="active"<?php }?>>

                                    <?php $_block_plugin45 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin45, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto));
$_block_repeat=true;
echo $_block_plugin45::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oStructure']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oStructure']->value->lang->title : $tmp);?>

                                    <?php $_block_repeat=false;
echo $_block_plugin45::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


                                </li>
                             <?php }?>

                        <?php } else { ?>
                        <li<?php if (($_smarty_tpl->tpl_vars['oStructure']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oStructure']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?> class="active"<?php }?>>

                            <?php $_block_plugin46 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin46, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto));
$_block_repeat=true;
echo $_block_plugin46::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oStructure']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oStructure']->value->lang->title : $tmp);?>

                            <?php $_block_repeat=false;
echo $_block_plugin46::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


                        </li>
                        <?php }?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>



                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



<?php }
}
