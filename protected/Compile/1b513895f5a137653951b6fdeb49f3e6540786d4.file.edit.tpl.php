<?php /* Smarty version Smarty-3.1.19, created on 2020-04-24 14:26:56
         compiled from "/var/www/html/aptitudecare/dev/modules/Blog/Views/blog/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20165917835e990be49c8c83-00994858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b513895f5a137653951b6fdeb49f3e6540786d4' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Blog/Views/blog/edit.tpl',
      1 => 1587767162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20165917835e990be49c8c83-00994858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e990be49d2685_95617267',
  'variables' => 
  array (
    'post' => 0,
    'SITE_URL' => 0,
    'current_url' => 0,
    'tags' => 0,
    'categories' => 0,
    'category' => 0,
    'tag' => 0,
    'blogTags' => 0,
    'bt' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e990be49d2685_95617267')) {function content_5e990be49d2685_95617267($_smarty_tpl) {?><div class="container edit-post">
	<h1 class="text-center"><?php if ($_smarty_tpl->tpl_vars['post']->value->id) {?>Edit<?php } else { ?>New<?php }?> Post</h1>

	<form name="save" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">
		<input type="hidden" name="module" value="blog">
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

		<!-- cover image -->
		<div class="custom-file my-2">
			<input type="file" name="cover_image" class="custom-file-input" id="cover-image">
			<label class="custom-file-label" for="cover-image">Upload a Cover Image</label>
		</div>
		<!-- /cover image -->

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
			<label for="blog-tags">Blog Tags</label>
			<select name="blog_tags[]" id="blog-tags" multiple>
				<?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
?>
				<option 
					value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value->id, ENT_QUOTES, 'UTF-8');?>
"
					<?php  $_smarty_tpl->tpl_vars["bt"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bt"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogTags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bt"]->key => $_smarty_tpl->tpl_vars["bt"]->value) {
$_smarty_tpl->tpl_vars["bt"]->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['tag']->value->id==$_smarty_tpl->tpl_vars['bt']->value->blog_tag_id) {?> selected<?php }?>
					<?php } ?>
				><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
				<?php } ?>
			</select>
		</div>
		<!-- /tags -->

		<!-- publish checkbox -->
		<div class="form-check text-right m-3">
		    <input class="form-check-input" type="checkbox" value="1" name="published" id="published" <?php if ($_smarty_tpl->tpl_vars['post']->value->date_published!==null) {?>checked<?php }?>> 
		    <label class="form-check-label" for="published">Publish</label>
		</div>	
		<!-- /publish checkbox -->
		

		<!-- buttons -->
		<button type="submit" class="btn btn-primary ml-2 float-right">Save</button>
		<button class="btn btn-secondary float-right" type="button" onclick="history.go(-1)">Cancel</button>
		<button type="button" class="btn btn-danger button" data-toggle="modal" data-target="#deleteModal">Delete</button>	
		<!-- /buttons -->
	</form>

	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('deleteModal'), ENT_QUOTES, 'UTF-8');?>

</div>


<?php }} ?>
