<?php /* Smarty version Smarty-3.1.19, created on 2020-04-17 13:00:27
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/blog/posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13448699855e7d30581d1944-17755334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '101eaf1807fa66a983c7a333814b95d5a8f5e5ea' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/blog/posts.tpl',
      1 => 1587156724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13448699855e7d30581d1944-17755334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e7d30581d4151_56680733',
  'variables' => 
  array (
    'keyword' => 0,
    'posts' => 0,
    'SITE_URL' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e7d30581d4151_56680733')) {function content_5e7d30581d4151_56680733($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.truncate.php';
?><div class="container blog">
	<h1 class="text-center">Posts about <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8');?>
</h1>
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
	<div class="row">
		<div class="col-8">
			<h2><a class="text-dark" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/blog/post/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->public_id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
</a></h2>
		</div>
		<div class="col-4">
			<p class="text-right"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->date_published,"%D"), ENT_QUOTES, 'UTF-8');?>
</p>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value->content,600);?>

			<a class="text-dark" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/blog/post/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->public_id, ENT_QUOTES, 'UTF-8');?>
"> Read more...</a>
		</div>
	</div>
	<hr width="100%">
	<?php } ?>
</div>
<?php }} ?>
