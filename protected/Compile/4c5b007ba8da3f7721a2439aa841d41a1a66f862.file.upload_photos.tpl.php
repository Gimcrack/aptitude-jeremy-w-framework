<?php /* Smarty version Smarty-3.1.19, created on 2020-03-14 01:33:13
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/photos/upload_photos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21069195545d8f7f41bf33f2-42895649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c5b007ba8da3f7721a2439aa841d41a1a66f862' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/photos/upload_photos.tpl',
      1 => 1583534555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21069195545d8f7f41bf33f2-42895649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d8f7f41c0f985_43944258',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'location' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8f7f41c0f985_43944258')) {function content_5d8f7f41c0f985_43944258($_smarty_tpl) {?><!-- /modules/Dietary/Views/photos/upload_photos.tpl -->

<h1>Upload Photos</h1>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" class="dropzone" id="photoUpload" enctype="multipart/form-data">
	<input type="hidden" name="page" value="photos" />
	<input type="hidden" name="action" value="submit_upload" />
	<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
	<div class="fallback">
    	<input name="file" type="file" multiple />
    	<input type="submit" value="Save" />
  	</div>
</form>

<br>
<br>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=photos&amp;action=photo_info" class="button right">Next</a>
<?php }} ?>
