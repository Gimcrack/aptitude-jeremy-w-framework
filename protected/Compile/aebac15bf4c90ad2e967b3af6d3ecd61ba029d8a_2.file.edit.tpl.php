<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-07 13:33:35
  from '/var/www/html/aptitudecare/dev/modules/Blog/Views/blog/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb47eaf759377_68012635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aebac15bf4c90ad2e967b3af6d3ecd61ba029d8a' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Blog/Views/blog/edit.tpl',
      1 => 1587767162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb47eaf759377_68012635 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container edit-post">
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
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['post']->value->category_id == $_smarty_tpl->tpl_vars['category']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
		<!-- /categories -->

		<!-- tags -->
		<div class="form-group">
			<label for="blog-tags">Blog Tags</label>
			<select name="blog_tags[]" id="blog-tags" multiple>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
				<option 
					value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value->id, ENT_QUOTES, 'UTF-8');?>
"
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogTags']->value, 'bt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bt']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['tag']->value->id == $_smarty_tpl->tpl_vars['bt']->value->blog_tag_id) {?> selected<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
		<!-- /tags -->

		<!-- publish checkbox -->
		<div class="form-check text-right m-3">
		    <input class="form-check-input" type="checkbox" value="1" name="published" id="published" <?php if ($_smarty_tpl->tpl_vars['post']->value->date_published !== null) {?>checked<?php }?>> 
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


<?php }
}
