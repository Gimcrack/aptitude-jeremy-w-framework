<?php /* Smarty version Smarty-3.1.19, created on 2020-04-16 17:49:56
         compiled from "/var/www/html/aptitudecare/dev/modules/Blog/Views/blog/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11616494105e990a8f9e9a33-07791850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '518d023a373109c7c0afed823422cba0a873fd37' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Blog/Views/blog/manage.tpl',
      1 => 1587088192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11616494105e990a8f9e9a33-07791850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e990a8f9efca1_63638560',
  'variables' => 
  array (
    'this' => 0,
    'SITE_URL' => 0,
    'blogPosts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e990a8f9efca1_63638560')) {function content_5e990a8f9efca1_63638560($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div class="container">
	<div class="row">
		<div class="col-lg-2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("module"), ENT_QUOTES, 'UTF-8');?>
</div>
		<div class="col-lg-8">
			<h1 class="text-center">Manage Posts</h1>
		</div>
		<div class="col-lg-2">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/blog/edit" class="button btn-primary text-white float-right">New Post</a>
		</div>
	</div>

	<div class="row manage-header">
		<div class="col-lg-5 col-md-6 col-sm-12">
			Title
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6">
			Date Created
		</div>
		<div class="col-lg-3 col-md-6 col-sm-4">
			Published
		</div>
		<div class="col-lg-1 col-md-6 col-sm-2"></div>
	</div>
	<?php  $_smarty_tpl->tpl_vars["post"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["post"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogPosts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["post"]->key => $_smarty_tpl->tpl_vars["post"]->value) {
$_smarty_tpl->tpl_vars["post"]->_loop = true;
?>
		<div class="row manage-body">
			<div class="col-lg-5 col-md-6 col-sm-12"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
</div>
			<div class="col-lg-3 col-md-6 col-sm-6"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->datetime_created,"%D %I:%M %p"), ENT_QUOTES, 'UTF-8');?>
</div>
			<div class="col-lg-3 col-md-6 col-sm-4"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->date_published,"%D"), ENT_QUOTES, 'UTF-8');?>
</div>
			<div class="col-lg-1 col-md-6 col-sm-2">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=blog&amp;action=edit&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-secondary float-lg-right mt-1"><i class="fas fa-edit"></i></a>
			</div>
		</div>
	<?php } ?>
</div>




<?php }} ?>
