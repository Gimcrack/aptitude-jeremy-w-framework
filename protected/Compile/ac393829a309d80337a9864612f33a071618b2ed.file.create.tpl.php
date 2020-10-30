<?php /* Smarty version Smarty-3.1.19, created on 2020-03-07 02:41:57
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/blog/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21120376245e62f7fcb325e0-17009569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac393829a309d80337a9864612f33a071618b2ed' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/blog/create.tpl',
      1 => 1583548896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21120376245e62f7fcb325e0-17009569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e62f7fcb32c86_74914535',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e62f7fcb32c86_74914535')) {function content_5e62f7fcb32c86_74914535($_smarty_tpl) {?><h1 class="text-center">New Post</h1>

<form name="save" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/blog/save">
	<input type="hidden" name="current_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">

	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" class="form-control">
	</div>
	<div class="form-group">
		<label for="summernote">Content</label>
		<textarea class="form-control" name="content" id="summernote"></textarea>
	</div>
	<button type="submit" class="btn btn-primary float-right">Save</button>
</form>

<script>
	$(document).ready(function() {
	    $('#summernote').summernote({
	    	height: 250
	    });
	});
</script>
<?php }} ?>
