<?php
/* Smarty version 3.1.31, created on 2018-10-01 09:17:08
  from "C:\entwicklung\xampp\htdocs\symbl\www.umzugskartons-app.de\symbl\template\shared\frontend\module\scalan\umzugskartons\profile\company.index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb1c9f42e4ef5_58161232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f0c87d33dceaf2f525fe4fb387bf65d8ccc0b5a' => 
    array (
      0 => 'C:\\entwicklung\\xampp\\htdocs\\symbl\\www.umzugskartons-app.de\\symbl\\template\\shared\\frontend\\module\\scalan\\umzugskartons\\profile\\company.index.tpl.html',
      1 => 1537714745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1c9f42e4ef5_58161232 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['symbl_php_module'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'symbl_php_module'))) {
throw new SmartyException('block tag \'symbl_php_module\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('symbl_php_module', array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"form/abstract")));
$_block_repeat=true;
echo $_block_plugin2::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"form/abstract")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>



    <?php echo Symbl\Cms\Smarty::symbl_module(array('load'=>"scalan/umzugskartons/profile/overview",'file'=>"navigation"),$_smarty_tpl);?>


     <form<?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>


            <?php if ($_smarty_tpl->tpl_vars['form']->value['errors'] || $_smarty_tpl->tpl_vars['form']->value['error']) {?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <?php echo $_smarty_tpl->tpl_vars['I18N']->value->f_error;?>

                  <?php if ($_smarty_tpl->tpl_vars['form']->value['error']) {?>
                    <br />
                    <br />
                    <div><?php echo $_smarty_tpl->tpl_vars['form']->value['error'];?>
</div>
                  <?php }?>
                </div>
            <?php }?>

            <h3><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.section.company"];?>
</h3>

            <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'title','label'=>"company.title"),$_smarty_tpl);?>


            <div class="row">
                <div class="col-md-6">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'email','label'=>"company.email"),$_smarty_tpl);?>

                </div>
                <div class="col-md-6">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'web','label'=>"company.web"),$_smarty_tpl);?>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'phone','label'=>"company.phone"),$_smarty_tpl);?>

                </div>
                <div class=" col-md-6">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'fax','label'=>"company.fax"),$_smarty_tpl);?>

                </div>
            </div>



            <h3 class="pt-5"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.section.address"];?>
</h3>
            <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'street','label'=>"company.street"),$_smarty_tpl);?>


            <div class="row">
                <div class="col-md-3">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'zip','label'=>"company.zip"),$_smarty_tpl);?>

                </div>
                <div class="col-md-4">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'city','label'=>"company.city"),$_smarty_tpl);?>

                </div>
                <div class="col-md-5">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'fk_country','label'=>"company.country"),$_smarty_tpl);?>

                </div>

            </div>

            <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'has_public_profile','label'=>" ",'value'=>$_smarty_tpl->tpl_vars['I18N']->value["company.has_public_profile"],'help'=>$_smarty_tpl->tpl_vars['I18N']->value["company.help.has_public.profile"]),$_smarty_tpl);?>


            <h3 class="pt-5"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.section.person"];?>
</h3>

            <div class="row">
                <div class="col-md-2">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'person_gender','label'=>"company.person_gender",'chosen'=>false),$_smarty_tpl);?>

                </div>
                <div class="col-md-4">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'person_firstname','label'=>"company.person_firstname"),$_smarty_tpl);?>

                </div>
                <div class="col-md-6">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'person_lastname','label'=>"company.person_lastname"),$_smarty_tpl);?>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'person_email','label'=>"company.person_email"),$_smarty_tpl);?>

                </div>
                <div class="col-md-6">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'person_phone','label'=>"company.person_phone"),$_smarty_tpl);?>

                </div>
            </div>

            <h3 class="pt-5"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.section.logo"];?>
</h3>

            <div class="row">
                <div class="col-md-4">
                    <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>"upload",'label'=>false,'url'=>((string)$_smarty_tpl->tpl_vars['WWW_PROJECT_HOME_DIR']->value)."upload/",'help'=>$_smarty_tpl->tpl_vars['I18N']->value["company.help.mediafile"]),$_smarty_tpl);?>

                </div>
                <div class="col-md-8">

                    <img id="preview" class="img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['form']->value['thumburl']['value'];?>
" />

                </div>
            </div>


            <div class="invisible">
                <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>"thumburl"),$_smarty_tpl);?>

            </div>

            <h3 class="pt-5"><?php echo $_smarty_tpl->tpl_vars['I18N']->value["company.section.text"];?>
</h3>
            <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'benefits','help'=>$_smarty_tpl->tpl_vars['I18N']->value["company.help.benefits"],'label'=>"company.benefits"),$_smarty_tpl);?>


            <?php echo Symbl\Cms\Smarty::symbl_element(array('form'=>$_smarty_tpl->tpl_vars['form']->value['company'],'element'=>'content','help'=>$_smarty_tpl->tpl_vars['I18N']->value["company.help.content"],'label'=>"company.content"),$_smarty_tpl);?>



            <div class="clearfix">
                <div class="pull-right">
                    <?php echo Cnx\Smarty::qf(array('form'=>$_smarty_tpl->tpl_vars['form']->value,'element'=>'btn_submit','class'=>"btn btn-lg btn-primary",'value'=>$_smarty_tpl->tpl_vars['I18N']->value->btn_submit),$_smarty_tpl);?>

                </div>
            </div>



        </form>

        <?php echo Cnx\Smarty::pagedata_activate(array('group'=>array("fileupload")),$_smarty_tpl);?>

        <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['jquery'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['jquery'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'jquery'))) {
throw new SmartyException('block tag \'jquery\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jquery', array());
$_block_repeat=true;
echo $_block_plugin3::jquery(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


            $('.fileupload').fileupload({
                dataType        : 'json',
                maxChunkSize    : 2 * 1000 * 1000, // 2 MB
                maxFileSize     : 1 * 1000 * 1000, // 5 MB
                paramName       : 'upload',
                acceptFileTypes : new RegExp('(\.|\/)(jpe?g|png)', 'i'),
                add: function (e, data) {
                    var uploadErrors = [];

                    var acceptFileTypes = new RegExp('(\.|\/)(jpe?g|png)', 'i')
                    if (data.originalFiles[0]['type'].length && !acceptFileTypes.test(data.originalFiles[0]['type'])) {
                        uploadErrors.push('<?php echo $_smarty_tpl->tpl_vars['I18N']->value->fe_upload_filetype;?>
');
                    }

                    if (data.originalFiles[0]['size'] > (2 * 1000 * 1000)) {
                        uploadErrors.push('<?php echo $_smarty_tpl->tpl_vars['I18N']->value->fe_upload_filesize;?>
');
                    }
                    if (uploadErrors.length > 0) {
                        alert(uploadErrors.join("\n"));
                    } else {
                        data.submit();
                    }

                },
                done            : function (e, data) {
                    $('img#preview').attr('src', data.result.thumb.replace('#param#', '200x200x1'));
                    $('input[type="hidden"][name="company[mediafile]"]').val(data.result.path);
                    $('input[type="hidden"][name="company[mediafile_title]"]').val(data.result.name);
                    $('input[type="hidden"][name="company[mediafile_type]"]').val(data.result.type);
                    $('input[name="thumburl"]').val(data.result.thumb.replace('#param#', '200x200x1'));
                }
            });

        <?php $_block_repeat=false;
echo $_block_plugin3::jquery(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>





<?php $_block_repeat=false;
echo $_block_plugin2::symbl_php_module(array('load'=>$_smarty_tpl->tpl_vars['content']->value->module->ident,'screen'=>array($_smarty_tpl->tpl_vars['content']->value->module->ident,"form/abstract")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}