<?php /* Smarty version Smarty-3.1.19, created on 2019-01-26 00:03:25
         compiled from "/var/www/html/synesis_dev/protected/Views/elements/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14801497155c4ba3cd234870-60631679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fb88fa8f31bc912e6ec646bf02b17fbea33bdcd' => 
    array (
      0 => '/var/www/html/synesis_dev/protected/Views/elements/pagination.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14801497155c4ba3cd234870-60631679',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagination' => 0,
    'current_url' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba3cd2432d5_05439135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba3cd2432d5_05439135')) {function content_5c4ba3cd2432d5_05439135($_smarty_tpl) {?><div id="pagination">
	<?php if (ceil($_smarty_tpl->tpl_vars['pagination']->value->num_pages>1)) {?>
		<?php if ($_smarty_tpl->tpl_vars['pagination']->value->current_page!=1) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page-1, ENT_QUOTES, 'ISO-8859-1');?>
">&laquo;&nbsp; Previous</a>
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = max($_smarty_tpl->tpl_vars['pagination']->value->current_page-5,1);
  if ($_smarty_tpl->tpl_vars['i']->value<=max(1,min($_smarty_tpl->tpl_vars['pagination']->value->num_pages,$_smarty_tpl->tpl_vars['pagination']->value->current_page+5))) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=max(1,min($_smarty_tpl->tpl_vars['pagination']->value->num_pages,$_smarty_tpl->tpl_vars['pagination']->value->current_page+5)); $_smarty_tpl->tpl_vars['i']->value++) {
?>
			<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['pagination']->value->current_page) {?>
				<strong><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="page-numbers"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a></strong>
			<?php } else { ?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="page-numbers"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a>
			<?php }?>
		<?php }} ?>
		<?php if ($_smarty_tpl->tpl_vars['pagination']->value->current_page!=$_smarty_tpl->tpl_vars['pagination']->value->num_pages) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page+1, ENT_QUOTES, 'ISO-8859-1');?>
">Next &nbsp;&raquo;</a>
		<?php }?>
	<?php }?>
</div>
<div id="page-count">
	Page <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page, ENT_QUOTES, 'ISO-8859-1');?>
 of <?php echo htmlspecialchars(ceil($_smarty_tpl->tpl_vars['pagination']->value->num_pages), ENT_QUOTES, 'ISO-8859-1');?>

</div><?php }} ?>
