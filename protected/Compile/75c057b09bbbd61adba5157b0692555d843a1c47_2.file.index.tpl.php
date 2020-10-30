<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 14:26:14
  from '/var/www/html/aptitudecare/dev/protected/Views/news/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee15e06ac1576_46706602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75c057b09bbbd61adba5157b0692555d843a1c47' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/news/index.tpl',
      1 => 1591746895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:elements/pagination.tpl' => 1,
  ),
),false)) {
function content_5ee15e06ac1576_46706602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="container-fluid">
	<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/denali-sunset.jpeg" alt="" class="img-fluid">
</div>
<div class="container news">

	<h1 class="text-center">Recent News &amp; Announcements</h1>

	<div class="row">
		<div class="col-sm-7">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
			<?php if ($_smarty_tpl->tpl_vars['post']->value->filename !== null) {?>
			<div class="row">
				<div class="col-12">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['AWS']->value, ENT_QUOTES, 'UTF-8');?>
/cover_image/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->filename, ENT_QUOTES, 'UTF-8');?>
" alt="" class="img-fluid">
				</div>
			</div>
			<?php }?>
			<div class="row">
				<div class="col-9 mt-5">
					<h2><a class="text-dark" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/news/post/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->public_id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
</a></h2>
				</div>
				<div class="col-3 mt-5">
					<p class="text-right"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->date_published,"%D"), ENT_QUOTES, 'UTF-8');?>
</p>
				</div>
			</div>
			<div class="row last-row">
				<div class="col-12">
					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value->content,200);?>
 <br><br>
					<a class="text-dark float-right mb-5" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/news/post/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->public_id, ENT_QUOTES, 'UTF-8');?>
"> Read more...</a>
				</div>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
		</div>

		<div class="col-sm-1"></div>
	
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('blogSearch'), ENT_QUOTES, 'UTF-8');?>

	</div>

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
