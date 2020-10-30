<?php /* Smarty version Smarty-3.1.19, created on 2020-03-22 02:13:18
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/blog/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1145337405e6c26e5c735c1-42876330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '567f63783f18c1e21cceb1e5af3b5b3245aa05ce' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/blog/post.tpl',
      1 => 1584843194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1145337405e6c26e5c735c1-42876330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e6c26e5c743b0_71100542',
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e6c26e5c743b0_71100542')) {function content_5e6c26e5c743b0_71100542($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><section class="new-section">
	<div class="container">
		<h1 class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
</h1>
		<p>Published: <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->date_published,"%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</p>
		<?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>

		<button class="btn btn-secondary float-right" onclick="history.go(-1)">Go Back</button>
	</div>
</section><?php }} ?>
