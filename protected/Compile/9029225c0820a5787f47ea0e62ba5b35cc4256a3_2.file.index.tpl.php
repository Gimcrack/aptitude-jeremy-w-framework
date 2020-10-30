<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-19 11:22:06
  from '/var/www/html/aptitudecare/dev/modules/Blog/Views/blog/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec431deb33c50_84838406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9029225c0820a5787f47ea0e62ba5b35cc4256a3' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Blog/Views/blog/index.tpl',
      1 => 1587767999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:elements/pagination.tpl' => 1,
  ),
),false)) {
function content_5ec431deb33c50_84838406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="container">
	<div class="row">
		<div class="col-lg-2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("module"), ENT_QUOTES, 'UTF-8');?>
</div>
		<div class="col-lg-8">
			<h1 class="text-center">Manage Posts</h1>
		</div>
		<div class="col-lg-2">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Blog&amp;page=blog&amp;action=edit" class="button btn-primary text-white float-right">New Post</a>
		</div>
	</div>

	<div class="row manage-header">
		<div class="col-lg-5 col-md-6 col-sm-12">
			Title
		</div>
		<div class="col-lg-3 col-md-6 col-sm-4">
			Created
		</div>
		<div class="col-lg-3 col-md-6 col-sm-4">
			Published
		</div>
		<div class="col-lg-1 col-md-6 col-sm-2"></div>
	</div>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogPosts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
		<div class="row manage-body">
			<div class="col-lg-5 col-md-6 col-sm-12"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
</div>
			<div class="col-lg-3 col-md-6 col-sm-4"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->datetime_created,"%D"), ENT_QUOTES, 'UTF-8');?>
</div>
			<div class="col-lg-3 col-md-6 col-sm-4"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->date_published,"%D"), ENT_QUOTES, 'UTF-8');?>
</div>
			<div class="col-lg-1 col-md-6 col-sm-2">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=Blog&amp;page=blog&amp;action=edit&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-secondary float-lg-right mt-1"><i class="fas fa-edit"></i></a>
			</div>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)) {?>
	<div class="row text-center">
		<div class="col-12">
			<?php $_smarty_tpl->_assignInScope('url', ((string)$_smarty_tpl->tpl_vars['SITE_URL']->value));?>
			<?php $_smarty_tpl->_subTemplateRender("file:elements/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	</div>			
	<?php }?>


</div>




<?php }
}
