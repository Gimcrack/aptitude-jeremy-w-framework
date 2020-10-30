<?php /* Smarty version Smarty-3.1.19, created on 2020-04-23 15:47:15
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/news/posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:773488425e9e2ee7129098-99726279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1f5cfba315cbc08265d232db0ce6932c75e6f06' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/news/posts.tpl',
      1 => 1587685633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '773488425e9e2ee7129098-99726279',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e9e2ee712ffd4_35169328',
  'variables' => 
  array (
    'IMAGES' => 0,
    'keyword' => 0,
    'posts' => 0,
    'post' => 0,
    'SITE_URL' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9e2ee712ffd4_35169328')) {function content_5e9e2ee712ffd4_35169328($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.truncate.php';
?><div class="container-fluid">
	<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/denali-sunset.jpeg" alt="" class="img-fluid">
</div>
<div class="container news">
	<h1 class="text-center">Posts about <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8');?>
</h1>

	<div class="row">
		<div class="col-sm-7">
			<?php if (!empty($_smarty_tpl->tpl_vars['posts']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['post']->value->filename!==null) {?>
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
			<?php } ?>
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
<?php }} ?>
