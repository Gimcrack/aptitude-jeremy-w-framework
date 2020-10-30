<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-07 09:27:18
  from '/var/www/html/aptitudecare/dev/protected/Views/news/posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb444f66e32a7_25478583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9646ed11668166bf0c84ced732ec59e223305b67' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/news/posts.tpl',
      1 => 1587685633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb444f66e32a7_25478583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="container-fluid">
	<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/denali-sunset.jpeg" alt="" class="img-fluid">
</div>
<div class="container news">
	<h1 class="text-center">Posts about <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8');?>
</h1>

	<div class="row">
		<div class="col-sm-7">
			<?php if (!empty($_smarty_tpl->tpl_vars['posts']->value)) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
			<?php if ($_smarty_tpl->tpl_vars['post']->value->filename !== null) {?>
			<div class="row">
				<div class="col-12">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/uploads/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->filename, ENT_QUOTES, 'UTF-8');?>
" alt="" class="img-fluid">
				</div>
			</div>
			<div class="row">
			<?php } else { ?>
			<div class="row news-title-row">
			<?php }?>
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
			<div class="row mb-5">
				<div class="col-12">
					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value->content,200);?>
 <br><br>
					<a class="text-dark float-right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/news/post/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->public_id, ENT_QUOTES, 'UTF-8');?>
"> Read more...</a>
				</div>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
			<p>We are sorry!</p>
			<p>There are no results for this search term.</p>
			<p>Please try something different.</p>
			<?php }?>
		</div>
		<div class="col-sm-1"></div>
		
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('blogSearch'), ENT_QUOTES, 'UTF-8');?>


	</div>
</div>
<?php }
}
