<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 01:15:10
         compiled from "/var/www/html/riverside_dev/modules/Dietary/Views/photos/upload_photos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2179905085c4a631ee7b4f2-66574405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65c8d9bdbb183cb6df0fdec28a5d3e624683a6bc' => 
    array (
      0 => '/var/www/html/riverside_dev/modules/Dietary/Views/photos/upload_photos.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2179905085c4a631ee7b4f2-66574405',
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
  'unifunc' => 'content_5c4a631ee7f767_41649414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4a631ee7f767_41649414')) {function content_5c4a631ee7f767_41649414($_smarty_tpl) {?><!-- /modules/Dietary/Views/photos/upload_photos.tpl -->

<h1>Upload Photos</h1>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="dropzone" id="photoUpload" enctype="multipart/form-data">
	<input type="hidden" name="page" value="photos" />
	<input type="hidden" name="action" value="submit_upload" />
	<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">
	<div class="fallback">
    	<input name="file" type="file" multiple />
    	<input type="submit" value="Save" />
  	</div>
</form>

<br>
<br>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Dietary&amp;page=photos&amp;action=photo_info" class="button right">Next</a>
<?php }} ?>
