<?php /* Smarty version Smarty-3.1.19, created on 2020-04-24 13:27:18
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/news/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12304782305e9a1b14b93184-94423018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23d8a91d0f2ef7129f8c0e5ec95d5923233e0198' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/news/index.tpl',
      1 => 1587763630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12304782305e9a1b14b93184-94423018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e9a1b14b99f18_28266674',
  'variables' => 
  array (
    'IMAGES' => 0,
    'posts' => 0,
    'post' => 0,
    'AWS_IMAGES' => 0,
    'SITE_URL' => 0,
    'this' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9a1b14b99f18_28266674')) {function content_5e9a1b14b99f18_28266674($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.truncate.php';
?><div class="container-fluid">
	<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/denali-sunset.jpeg" alt="" class="img-fluid">
</div>
<div class="container news">

	<h1 class="text-center">Recent News &amp; Announcements</h1>

	<div class="row">
		<div class="col-sm-7">
			<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['post']->value->filename!==null) {?>
			<div class="row">
				<div class="col-12">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['AWS_IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
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
			<?php } ?>	
		</div>

		<div class="col-sm-1"></div>
	
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('blogSearch'), ENT_QUOTES, 'UTF-8');?>

	</div>

	<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)) {?>
	<div class="row text-center">
		<div class="col-12">
			<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['SITE_URL']->value), null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate ("elements/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>			
	<?php }?>


	
</div>
<?php }} ?>
