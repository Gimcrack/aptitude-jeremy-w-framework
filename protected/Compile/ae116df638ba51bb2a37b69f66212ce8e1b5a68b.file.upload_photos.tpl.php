<?php /* Smarty version Smarty-3.1.19, created on 2019-05-16 20:26:24
         compiled from "/var/www/html/aptitudecare/modules/Dietary/Views/photos/upload_photos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17717469225cddc770772185-81508544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae116df638ba51bb2a37b69f66212ce8e1b5a68b' => 
    array (
      0 => '/var/www/html/aptitudecare/modules/Dietary/Views/photos/upload_photos.tpl',
      1 => 1553125343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17717469225cddc770772185-81508544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'location' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cddc770798eb4_37494905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cddc770798eb4_37494905')) {function content_5cddc770798eb4_37494905($_smarty_tpl) {?><!-- /modules/Dietary/Views/photos/upload_photos.tpl -->

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
