<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:43:12
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\navbar.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1d010f04319_98637048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955e56ac7c83474fa896f4590f922ca331e3498b' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\navbar.index.tpl.html',
      1 => 1536492017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1d010f04319_98637048 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ROUTE']->value->datatype->data->ident == "startpage") {?>
    <?php $_smarty_tpl->_assignInScope('root', $_smarty_tpl->tpl_vars['ROUTE']->value->getId());
} elseif (($_smarty_tpl->tpl_vars['STRUCTURE']->value["RELOCATION"]->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['STRUCTURE']->value["RELOCATION"]->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('root', "RELOCATION");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('root', "MAIN_NAVIGATION");
}?>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['ROUTE']->value->datatype->data->ident == "startpage") {?>
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <?php } else { ?>
        <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['WWW_PROJECT_HOME_DIR']->value;?>
">
        <?php }?>
          <svg width="457px" height="65px" viewBox="0 0 457 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="umzugskartons-logo-weiss" fill="#FFFFFF">
                    <path d="M110.399695,25.3346877 L108.592382,25.3346877 L108.592382,39.2911629 C108.592382,41.0315387 108.558913,43.1400709 107.420975,44.7131029 C106.316506,46.2191974 104.542661,47.1563228 102.199848,47.1563228 C99.857034,47.1563228 98.0831894,46.2191974 96.9787201,44.7131029 C95.8407821,43.1400709 95.8073133,41.0315387 95.8073133,39.2911629 L95.8073133,25.3346877 L94,25.3346877 L94,39.1238191 C94,41.7343828 94.1004063,44.0437276 95.6399695,45.984916 C97.146064,47.8591669 99.3550025,48.8297611 102.199848,48.8297611 C105.044693,48.8297611 107.253631,47.8591669 108.759726,45.984916 C110.299289,44.0437276 110.399695,41.7343828 110.399695,39.1238191 L110.399695,25.3346877 Z M145.207211,25.3346877 L143.098679,25.3346877 L135.133113,45.0477906 L127.201015,25.3346877 L125.125952,25.3346877 L122.783138,48.4281359 L124.590452,48.4281359 L126.498171,28.3468766 L135.066175,48.8297611 L135.233519,48.8297611 L143.768054,28.3803453 L145.742712,48.4281359 L147.550025,48.4281359 L145.207211,25.3346877 Z M174.325037,46.7881664 L160.4355,46.7881664 L174.157694,26.5395632 L174.157694,25.3346877 L158.628186,25.3346877 L158.628186,26.9746572 L171.714474,26.9746572 L158.26003,46.9220414 L158.26003,48.4281359 L174.325037,48.4281359 L174.325037,46.7881664 Z M202.270341,25.3346877 L200.463028,25.3346877 L200.463028,39.2911629 C200.463028,41.0315387 200.429559,43.1400709 199.291621,44.7131029 C198.187152,46.2191974 196.413307,47.1563228 194.070493,47.1563228 C191.72768,47.1563228 189.953835,46.2191974 188.849366,44.7131029 C187.711428,43.1400709 187.677959,41.0315387 187.677959,39.2911629 L187.677959,25.3346877 L185.870646,25.3346877 L185.870646,39.1238191 C185.870646,41.7343828 185.971052,44.0437276 187.510615,45.984916 C189.01671,47.8591669 191.225648,48.8297611 194.070493,48.8297611 C196.915338,48.8297611 199.124277,47.8591669 200.630371,45.984916 C202.169935,44.0437276 202.270341,41.7343828 202.270341,39.1238191 L202.270341,25.3346877 Z M235.571763,36.6805992 L226.70254,36.6805992 L226.70254,38.3205687 L233.797918,38.3205687 L233.797918,44.5792279 C233.797918,44.5792279 231.722855,47.122854 226.200508,47.122854 C220.678162,47.122854 216.327222,43.2404772 216.327222,36.8814118 C216.327222,30.5223463 220.510818,26.6399695 225.932758,26.6399695 C229.882073,26.6399695 232.224886,28.3468766 233.898324,30.3550025 L235.136669,29.0162519 C234.266481,28.0121889 231.722855,25 225.932758,25 C219.339411,25 214.386034,30.0203148 214.386034,36.8814118 C214.386034,43.7425087 219.339411,48.8297611 226.033165,48.8297611 C232.726918,48.8297611 235.571763,45.2486032 235.571763,45.2486032 L235.571763,36.6805992 Z M262.079025,42.4037581 C262.079025,38.8895377 259.267649,37.3499745 258.732148,37.0487556 C258.196648,36.7475367 255.619553,35.6765362 253.979584,34.9736921 C252.339614,34.2708481 250.532301,33.2333163 250.532301,30.6227526 C250.532301,28.0121889 252.674302,26.6065007 255.351803,26.6065007 C258.029304,26.6065007 259.368055,28.0121889 260.238243,29.1166582 L261.510056,28.0121889 C261.309243,27.6775012 259.368055,25 255.485678,25 C251.603301,25 248.691519,27.3428136 248.691519,30.6896901 C248.691519,34.0365667 251.134739,35.5426612 252.038395,36.0446926 C252.975521,36.5467241 254.481615,37.1826307 255.820366,37.7181309 C257.159116,38.2536312 260.238243,39.3915692 260.238243,42.4037581 C260.238243,45.415947 257.828492,47.2567291 254.849772,47.2567291 C251.871052,47.2567291 249.862926,45.2151344 249.026206,43.6755712 L247.620518,44.6796341 C248.12255,45.6167596 250.197613,48.8297611 254.682428,48.8297611 C259.167242,48.8297611 262.079025,45.9179785 262.079025,42.4037581 Z M280.219096,34.3712544 L289.523413,25.3346877 L287.180599,25.3346877 L276.269782,36.1450989 L276.269782,25.3346877 L274.462468,25.3346877 L274.462468,48.4281359 L276.269782,48.4281359 L276.269782,38.2201624 L278.980752,35.5426612 L287.916912,48.4281359 L290.192788,48.4281359 L280.219096,34.3712544 Z M308.600609,25.2677501 L307.596546,25.2677501 L297.72326,48.4281359 L299.63098,48.4281359 L302.509294,41.5001014 L313.520518,41.5001014 L316.365363,48.4281359 L318.473895,48.4281359 L308.600609,25.2677501 Z M303.178669,39.8266631 L307.998171,28.0121889 L312.817674,39.8266631 L303.178669,39.8266631 Z M336.379685,37.6511934 C339.291467,37.2160994 342.069375,35.3753173 342.069375,31.5264093 C342.069375,27.6775012 339.22453,25.3346877 334.87359,25.3346877 L329.518588,25.3346877 L329.518588,48.4281359 L331.325901,48.4281359 L331.325901,37.7181309 L334.271152,37.7181309 L341.09878,48.4281359 L343.408125,48.4281359 L336.379685,37.6511934 Z M340.161655,31.5264093 C340.161655,33.0325037 339.726561,34.2039105 338.454748,35.141036 C337.216404,36.0446926 335.710309,36.0781614 333.869527,36.0781614 L331.325901,36.0781614 L331.325901,26.9746572 L333.869527,26.9746572 C335.710309,26.9746572 337.216404,27.0081259 338.454748,27.9452514 C339.726561,28.848908 340.161655,30.0203148 340.161655,31.5264093 Z M367.304824,25.3346877 L351.775317,25.3346877 L351.775317,26.9746572 L358.636414,26.9746572 L358.636414,48.4281359 L360.443727,48.4281359 L360.443727,26.9746572 L367.304824,26.9746572 L367.304824,25.3346877 Z M398.998629,36.9148805 C398.998629,29.5517521 393.576689,25 387.284561,25 C381.025902,25 375.570493,29.5517521 375.570493,36.9148805 C375.570493,44.278009 381.025902,48.8297611 387.284561,48.8297611 C393.576689,48.8297611 398.998629,44.278009 398.998629,36.9148805 Z M397.124378,36.8814118 C397.124378,43.3074148 392.572626,47.122854 387.284561,47.122854 C382.063434,47.122854 377.478213,43.3074148 377.478213,36.8814118 C377.478213,30.3884713 382.029965,26.6065007 387.284561,26.6065007 C392.572626,26.6065007 397.124378,30.42194 397.124378,36.8814118 Z M430.15805,25.3346877 L428.350737,25.3346877 L428.350737,45.2486032 L413.122448,25.3346877 L411.315135,25.3346877 L411.315135,48.4281359 L413.122448,48.4281359 L413.122448,28.1795327 L428.518081,48.4281359 L430.15805,48.4281359 L430.15805,25.3346877 Z M457,42.4037581 C457,38.8895377 454.188624,37.3499745 453.653123,37.0487556 C453.117623,36.7475367 450.540528,35.6765362 448.900559,34.9736921 C447.260589,34.2708481 445.453276,33.2333163 445.453276,30.6227526 C445.453276,28.0121889 447.595277,26.6065007 450.272778,26.6065007 C452.950279,26.6065007 454.28903,28.0121889 455.159218,29.1166582 L456.431031,28.0121889 C456.230218,27.6775012 454.28903,25 450.406653,25 C446.524276,25 443.612494,27.3428136 443.612494,30.6896901 C443.612494,34.0365667 446.055714,35.5426612 446.95937,36.0446926 C447.896496,36.5467241 449.40259,37.1826307 450.741341,37.7181309 C452.080091,38.2536312 455.159218,39.3915692 455.159218,42.4037581 C455.159218,45.415947 452.749467,47.2567291 449.770747,47.2567291 C446.792027,47.2567291 444.783901,45.2151344 443.947181,43.6755712 L442.541493,44.6796341 C443.043525,45.6167596 445.118588,48.8297611 449.603403,48.8297611 C454.088217,48.8297611 457,45.9179785 457,42.4037581 Z" id="Fill-1"></path>
                    <polygon id="Fill-3" points="14.1877739 18.5826911 41 32 26.2565791 13.4173089 0 0"></polygon>
                    <polygon id="Fill-4" points="56.7437253 13.4173089 42 32 68.8123906 18.5826911 83 0"></polygon>
                    <polygon id="Fill-5" points="69 51.3974194 68.9026231 21 42.1344276 34.1867563 42 65"></polygon>
                    <polygon id="Fill-6" points="14 51.3974194 14.0973769 21 40.8655724 34.1867563 41 65"></polygon>
                </g>
            </g>
          </svg>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STRUCTURE']->value[$_smarty_tpl->tpl_vars['root']->value]->childs->getVisibles(), 'oStructure');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oStructure']->value) {
?>

                <?php if ($_smarty_tpl->tpl_vars['oStructure']->value->childs->getVisibles()->count()) {?>



                    <li class="nav-item dropdown<?php if (($_smarty_tpl->tpl_vars['oStructure']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oStructure']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?> active<?php }?>">
                        <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto,'class'=>"nav-link dropdown-toggle",'data-toggle'=>"dropdown"));
$_block_repeat=true;
echo $_block_plugin7::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto,'class'=>"nav-link dropdown-toggle",'data-toggle'=>"dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oStructure']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oStructure']->value->lang->title : $tmp);?>

                        <?php $_block_repeat=false;
echo $_block_plugin7::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto,'class'=>"nav-link dropdown-toggle",'data-toggle'=>"dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>



                        <div class="dropdown-menu">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oStructure']->value->childs->getVisibles(), 'oChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oChild']->value) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['oChild']->value->data->ident == "BASKET") {?>

                                <?php if ($_smarty_tpl->tpl_vars['BASKET']->value['PACKAGE']) {?>

                                    <?php ob_start();
if (($_smarty_tpl->tpl_vars['oChild']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oChild']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {
echo " active";
}
$_prefixVariable8=ob_get_clean();
$_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oChild']->value->linkto,'class'=>"dropdown-item".$_prefixVariable8));
$_block_repeat=true;
echo $_block_plugin8::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oChild']->value->linkto,'class'=>"dropdown-item".$_prefixVariable8), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oChild']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oChild']->value->lang->title : $tmp);?>
 (1)
                                    <?php $_block_repeat=false;
echo $_block_plugin8::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oChild']->value->linkto,'class'=>"dropdown-item".$_prefixVariable8), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


                                 <?php }?>
                            <?php } else { ?>

                                <?php ob_start();
if (($_smarty_tpl->tpl_vars['oChild']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oChild']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {
echo " active";
}
$_prefixVariable9=ob_get_clean();
$_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('linkto'=>$_smarty_tpl->tpl_vars['oChild']->value->linkto,'class'=>"dropdown-item".$_prefixVariable9));
$_block_repeat=true;
echo $_block_plugin9::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oChild']->value->linkto,'class'=>"dropdown-item".$_prefixVariable9), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                                    <?php echo $_smarty_tpl->tpl_vars['oChild']->value->lang->title;?>

                                <?php $_block_repeat=false;
echo $_block_plugin9::symbl_link(array('linkto'=>$_smarty_tpl->tpl_vars['oChild']->value->linkto,'class'=>"dropdown-item".$_prefixVariable9), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


                            <?php }?>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </div>
                    </li>

                <?php } elseif ($_smarty_tpl->tpl_vars['oStructure']->value->data->ident == "BASKET") {?>

                    <?php if ($_smarty_tpl->tpl_vars['BASKET']->value['PACKAGE']) {?>

                        <li class="nav-item<?php if (($_smarty_tpl->tpl_vars['oStructure']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oStructure']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?> active<?php }?>">

                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['oStructure']->value->linkto->hasAnchor()) {
echo " js-scroll-trigger";
}
$_prefixVariable10=ob_get_clean();
$_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('class'=>"nav-link".$_prefixVariable10,'linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto));
$_block_repeat=true;
echo $_block_plugin10::symbl_link(array('class'=>"nav-link".$_prefixVariable10,'linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oStructure']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oStructure']->value->lang->title : $tmp);?>
 (1)
                            <?php $_block_repeat=false;
echo $_block_plugin10::symbl_link(array('class'=>"nav-link".$_prefixVariable10,'linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


                        </li>
                     <?php }?>


                <?php } elseif ($_smarty_tpl->tpl_vars['oStructure']->value->data->ident == "LOGIN") {?>

                    <?php if ($_smarty_tpl->tpl_vars['USER']->value->id == 0) {?>

                        <li class="nav-item<?php if (($_smarty_tpl->tpl_vars['oStructure']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oStructure']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?> active<?php }?>">

                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['oStructure']->value->linkto->hasAnchor()) {
echo " js-scroll-trigger";
}
$_prefixVariable11=ob_get_clean();
$_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('class'=>"nav-link".$_prefixVariable11,'linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto));
$_block_repeat=true;
echo $_block_plugin11::symbl_link(array('class'=>"nav-link".$_prefixVariable11,'linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oStructure']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oStructure']->value->lang->title : $tmp);?>

                            <?php $_block_repeat=false;
echo $_block_plugin11::symbl_link(array('class'=>"nav-link".$_prefixVariable11,'linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


                        </li>
                     <?php }?>

                <?php } else { ?>
                <li class="nav-item<?php if (($_smarty_tpl->tpl_vars['oStructure']->value->isRoute($_smarty_tpl->tpl_vars['ROUTE']->value) || $_smarty_tpl->tpl_vars['oStructure']->value->isInRouteWay($_smarty_tpl->tpl_vars['ROUTE']->value))) {?> active<?php }?>">

                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['oStructure']->value->linkto->hasAnchor()) {
echo " js-scroll-trigger";
}
$_prefixVariable12=ob_get_clean();
$_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_link'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'symbl_link'))) {
throw new SmartyException('block tag \'symbl_link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_link', array('class'=>"nav-link".$_prefixVariable12,'linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto));
$_block_repeat=true;
echo $_block_plugin12::symbl_link(array('class'=>"nav-link".$_prefixVariable12,'linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oStructure']->value->lang->shorttitle)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['oStructure']->value->lang->title : $tmp);?>

                    <?php $_block_repeat=false;
echo $_block_plugin12::symbl_link(array('class'=>"nav-link".$_prefixVariable12,'linkto'=>$_smarty_tpl->tpl_vars['oStructure']->value->linkto), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
      </div>
    </nav>

<?php }
}