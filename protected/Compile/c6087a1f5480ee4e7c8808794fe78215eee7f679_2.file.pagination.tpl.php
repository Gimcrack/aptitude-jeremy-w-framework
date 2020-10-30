<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-07 02:01:00
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb3dc5cd62dc5_33222265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6087a1f5480ee4e7c8808794fe78215eee7f679' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/pagination.tpl',
      1 => 1587683339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb3dc5cd62dc5_33222265 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row m-4"></div>
<nav aria-label="">
	<?php if (ceil($_smarty_tpl->tpl_vars['pagination']->value->num_pages > 1)) {?>
	<ul class="pagination justify-content-center">
		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = max($_smarty_tpl->tpl_vars['pagination']->value->current_page-5,1);
if ($_smarty_tpl->tpl_vars['i']->value <= max(1,min(ceil($_smarty_tpl->tpl_vars['pagination']->value->num_pages),$_smarty_tpl->tpl_vars['pagination']->value->current_page+5))) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= max(1,min(ceil($_smarty_tpl->tpl_vars['pagination']->value->num_pages),$_smarty_tpl->tpl_vars['pagination']->value->current_page+5)); $_smarty_tpl->tpl_vars['i']->value++) {
?>
			<?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['pagination']->value->current_page) {?>
				<li class="page-item active">
					<?php if (strstr($_smarty_tpl->tpl_vars['current_url']->value,'?')) {?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" class="page-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
<span class="sr-only">(current)</span></a>
					<?php } else { ?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
/?page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" class="page-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
<span class="sr-only">(current)</span></a>
					<?php }?>
				</li>
			<?php } else { ?>
				<li class="page-item">
					<?php if (strstr($_smarty_tpl->tpl_vars['current_url']->value,'?')) {?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" class="page-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
</a>
					<?php } else { ?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
/?page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" class="page-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
</a>
					<?php }?>
				</li>
			<?php }?>
		<?php }
}
?>
		<!-- <?php if ($_smarty_tpl->tpl_vars['pagination']->value->current_page != $_smarty_tpl->tpl_vars['pagination']->value->num_pages) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page+1, ENT_QUOTES, 'UTF-8');?>
">Next &nbsp;&raquo;</a>
		<?php }?> -->
	</ul>
	<?php }?>
</nav>


<div id="page-count">
	Page <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page, ENT_QUOTES, 'UTF-8');?>
 of <?php echo htmlspecialchars(ceil($_smarty_tpl->tpl_vars['pagination']->value->num_pages), ENT_QUOTES, 'UTF-8');?>

</div><?php }
}
