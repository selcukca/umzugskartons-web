<?php
/* Smarty version 3.1.31, created on 2018-09-08 22:41:30
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\bootstrap\new-age\header.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b9433fae931b3_27282197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ae0c8af682065e33ef3e98003d0dd976a1a5538' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\bootstrap\\new-age\\header.index.tpl.html',
      1 => 1536438241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9433fae931b3_27282197 (Smarty_Internal_Template $_smarty_tpl) {
?>

<header class="masthead">


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value->subdata, 'subcontent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcontent']->value) {
?>

        <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>$_smarty_tpl->tpl_vars['subcontent']->value->module->ident,'content'=>$_smarty_tpl->tpl_vars['subcontent']->value,'holder'=>$_smarty_tpl->tpl_vars['subcontent']->value->holder,'parent'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);?>


    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>



  <div class="container h-100">

    <div class="row h-100">
      <div class="col-lg-7 my-auto">
        <div class="header-content mx-auto">
          <h1 class="mb-3">
            Einpacken, Umziehen -<br>Alles direkt finden.
          </h1>
          <h5 class="mb-4">Die professionelle mobile Lösung für Deinen Umzug.</h5>
          <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Kostenlos installieren</a>
        </div>
      </div>
      <div class="col-lg-5 my-auto">



        <div class="device-wrapper">
            <div class="device" data-device="iPhone7" data-orientation="portrait" data-color="white">
                <div class="screen" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['WWW_IMAGE_DIR']->value;?>
test/img/devices/01.png')">
                    <!-- PUT CONTENTS HERE -->
                </div>
                <div class="button">

                </div>
            </div>
        </div>

      </div>
    </div>
  </div>

</header><?php }
}
