<?php /* Smarty version Smarty-3.1.19, created on 2020-03-26 13:43:59
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/blog/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11078556935e6452d4c4a8d5-68227892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26da287035403cf508bfe010cdc4f118df518651' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/blog/edit.tpl',
      1 => 1585259037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11078556935e6452d4c4a8d5-68227892',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e6452d4c4cd62_06764037',
  'variables' => 
  array (
    'post' => 0,
    'SITE_URL' => 0,
    'current_url' => 0,
    'tags' => 0,
    'categories' => 0,
    'category' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6452d4c4cd62_06764037')) {function content_5e6452d4c4cd62_06764037($_smarty_tpl) {?><div class="container">
	<h1 class="text-center"><?php if ($_smarty_tpl->tpl_vars['post']->value->id) {?>Edit<?php } else { ?>New<?php }?> Post</h1>

	<form name="save" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="page" value="blog">
		<input type="hidden" name="action" value="save">
		<input type="hidden" name="id" id="public-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="current_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="current_tags" id="current-tags" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tags']->value, ENT_QUOTES, 'UTF-8');?>
">
		
		<!-- title -->
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
" class="form-control">
		</div>
		<!-- /title -->

		<!-- blog content -->
		<div class="form-group">
			<label for="summernote">Content</label>
			<textarea class="form-control" name="content" id="summernote"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->content, ENT_QUOTES, 'UTF-8');?>
</textarea>
		</div>
		<!-- /blog content -->

		<!-- categories -->
		<div class="form-group">
			<label for="categories">Blog Category</label>
			<select name="category" id="categories" class="form-control">
				<option value="">Select a category...</option>
				<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['post']->value->category_id==$_smarty_tpl->tpl_vars['category']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
				<?php } ?>
			</select>
		</div>
		<!-- /categories -->

		<!-- tags -->
		<div class="form-group">
			<input type="text" value="" name="tags" id="tags" class="form-control">
		</div>
		<!-- /tags -->

		<!-- publish checkbox -->
		<div class="form-check text-right m-3">
		    <input class="form-check-input" type="checkbox" value="1" name="published" id="published" <?php if ($_smarty_tpl->tpl_vars['post']->value->date_published!==null) {?>checked<?php }?>> 
		    <label class="form-check-label" for="published">Publish</label>
		</div>	
		<!-- /publish checkbox -->
		

		<!-- buttons -->
		<button type="submit" class="btn btn-primary button float-right">Save</button>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=blog&amp;action=manage" type="button" class="btn btn-secondary button float-right text-white">Cancel</a>
		<button type="button" class="btn btn-danger button" data-toggle="modal" data-target="#deleteModal">Delete</button>	
		<!-- /buttons -->
	</form>

	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('deleteModal'), ENT_QUOTES, 'UTF-8');?>

</div>


<?php }} ?>
