<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-07 02:01:00
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/blogSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb3dc5cd46447_23829298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb884acc1d004ad9f825efca41b3574e4ec12060' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/blogSearch.tpl',
      1 => 1587684627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb3dc5cd46447_23829298 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div class="col-sm-4 recent-news">
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/news/posts/" class="form-inline my-lg-0">
			<input type="search" name="keyword" class="form-control mr-2" placeholder="Search" aria-label="Search">
			<button class="btn btn-primary my-sm-0" type="submit">Search</button>
		</form>
		
		<h3 class="text-14">News Categories</h3>
		<ul class="nav">			
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
			<li class="nav-item mr-5">
				<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/news/posts/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->post_count, ENT_QUOTES, 'UTF-8');?>
)</a>
			</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
<?php }
}
