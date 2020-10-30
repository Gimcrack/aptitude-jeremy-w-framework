<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 13:50:09
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/elements/blogNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20259466235e7bc02e68d881-31809831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38c40e321783705d8923b62b237b00dbdbc648fe' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/blogNav.tpl',
      1 => 1588715407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20259466235e7bc02e68d881-31809831',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e7bc02e68ea80_52615882',
  'variables' => 
  array (
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e7bc02e68ea80_52615882')) {function content_5e7bc02e68ea80_52615882($_smarty_tpl) {?><li class="nav-item">
	<a href="#blogSection" class="nav-link dropdown-toggle" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="blogSection"><i class="fas fa-blog"></i> Blog</a>
	<div class="collapse" id="blogSection" data-parent="#sidebar-nav">
		<ul class="nav flex-column ml-4">
			<li id="manage-posts" class="nav-item">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Blog&amp;page=blog" class="nav-link">Manage Posts</a>
			</li>
			<li id="new-post" class="nav-item">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Blog&amp;page=blog&amp;action=edit" class="nav-link">New Post</a>
			</li>
		</ul>
	</div>
</li>

<!-- <li class="nav-item">
	<a href="#blogSection" class="nav-link dropdown-toggle" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="blogSection">Blog</a>
	<div class="collapse" id="blogSection" data-parent="#sidebar-nav">
		<ul class="nav flex-column ml-4">
			<li class="nav-item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=blog&amp;action=manage" class="nav-link">Manage Posts</a></li>
			<li class="nav-item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=blog&amp;action=edit" class="nav-link">New Post</a></li>
		</ul>
	</div>
</li>
 --><?php }} ?>
