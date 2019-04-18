<?php
/* Smarty version 3.1.31, created on 2018-09-25 08:29:12
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\download\flyer\content.inc.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ba9d5b8a61972_63280836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc9e45a29a5dc523706e0381ba8a78862818d81c' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\download\\flyer\\content.inc.tpl.html',
      1 => 1537794110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba9d5b8a61972_63280836 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Flyer</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" media="screen,print">

        <!-- Custom styles for this template -->
        <!--link href="jumbotron.css" rel="stylesheet"-->

        <style>

            body {
                font-size:11px;
            }
            .new-page {
                page-break-before: always;
            }
            tr {
                page-break-inside: avoid;
            }
            td div, th div {
                page-break-inside: avoid;
            }
            a {
                color: black;
            }
        </style>

    </head>

    <body>

        <table class="table">
            <tr>
                <td colspan="2">

                    <img class="mr-3 float-left" src="https://www.umzugskartons-app.de/thumb/75x75x1/company/0001/1bb87d41d15fe27b500a4bfcde01bb0e.png" alt="Generic placeholder image">
                    <div class="float-left">
                        <h1><?php echo $_smarty_tpl->tpl_vars['I18N']->value["flyer.app_name"];?>
</h1>
                        <h3><?php echo $_smarty_tpl->tpl_vars['I18N']->value["flyer.app_subline"];?>
</h3>
                    </div>


                </td>
            </tr>
            <tr>
                <td width="50%">
                    <h2><?php echo $_smarty_tpl->tpl_vars['I18N']->value["flyer.step"];?>
 1 <small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["flyer.step1.headline"];?>
</small></h2>

                    <p><?php echo $_smarty_tpl->tpl_vars['I18N']->value["flyer.step1.description"];?>
</p>
                    <div class="text-center">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['barcodes']->value['app'];?>
" />
                    </div>

                </td>

                <td>
                    <h2><?php echo $_smarty_tpl->tpl_vars['I18N']->value["flyer.step"];?>
 2 <small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["flyer.step2.headline"];?>
</small></h2>

                    <p><?php echo $_smarty_tpl->tpl_vars['I18N']->value["flyer.step2.description"];?>
</p>
                    <div class="text-center">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['barcodes']->value['hash'];?>
" />
                    </div>

                </td>
            </tr>
            <!--
            <tr>
                <td colspan="2" class="pt-5">
                    <h2><?php echo $_smarty_tpl->tpl_vars['I18N']->value["flyer.step"];?>
 3 <small class="text-muted"></small></h2>

                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <div class="text-center">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['barcodes']->value['app'];?>
" />
                    </div>

                </td>

            </tr>
            -->
        </table>





    </body>
</html>
<?php }
}
