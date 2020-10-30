<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 12:53:42
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/blogNav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb323d61bac33_32808061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b07ceae01b2c1c0b685cb30c80b6463afce5d93' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/blogNav.tpl',
      1 => 1588715407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb323d61bac33_32808061 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="nav-item">
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
 --><?php }
}
