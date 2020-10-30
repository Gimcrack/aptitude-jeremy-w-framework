<?php /* Smarty version Smarty-3.1.19, created on 2020-04-23 15:09:03
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/elements/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13445019455d800ef38b1964-55078239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75cbb378c992f73a2d8d2bb45d555e380a8be9c9' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/pagination.tpl',
      1 => 1587683339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13445019455d800ef38b1964-55078239',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d800ef38c4067_78269084',
  'variables' => 
  array (
    'pagination' => 0,
    'i' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d800ef38c4067_78269084')) {function content_5d800ef38c4067_78269084($_smarty_tpl) {?><div class="row m-4"></div>
<nav aria-label="">
	<?php if (ceil($_smarty_tpl->tpl_vars['pagination']->value->num_pages>1)) {?>
	<ul class="pagination justify-content-center">
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = max($_smarty_tpl->tpl_vars['pagination']->value->current_page-5,1);
  if ($_smarty_tpl->tpl_vars['i']->value<=max(1,min(ceil($_smarty_tpl->tpl_vars['pagination']->value->num_pages),$_smarty_tpl->tpl_vars['pagination']->value->current_page+5))) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=max(1,min(ceil($_smarty_tpl->tpl_vars['pagination']->value->num_pages),$_smarty_tpl->tpl_vars['pagination']->value->current_page+5)); $_smarty_tpl->tpl_vars['i']->value++) {
?>
			<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['pagination']->value->current_page) {?>
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
		<?php }} ?>
		<!-- <?php if ($_smarty_tpl->tpl_vars['pagination']->value->current_page!=$_smarty_tpl->tpl_vars['pagination']->value->num_pages) {?>
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

</div><?php }} ?>
