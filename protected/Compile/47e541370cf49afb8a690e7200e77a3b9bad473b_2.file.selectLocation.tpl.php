<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 12:53:42
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/selectLocation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb323d61d68c5_38414133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47e541370cf49afb8a690e7200e77a3b9bad473b' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/selectLocation.tpl',
      1 => 1585168985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb323d61d68c5_38414133 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		$("#location").change(function() {
			window.location.href = SITE_URL + "/?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->page, ENT_QUOTES, 'UTF-8');?>
&action=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->action, ENT_QUOTES, 'UTF-8');?>
&location=" + $("option:selected", this).val();
		});
	});
<?php echo '</script'; ?>
>

<?php if (count($_smarty_tpl->tpl_vars['locations']->value) > 1) {?>
<div class="dropdown">
	<button class="btn btn-secondary dropdown-toggle" type="button" id="locationDropdownButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>

	</button>
	<?php if (count($_smarty_tpl->tpl_vars['locations']->value) > 1) {?>
	<div class="dropdown-menu" aria-labelledby="locationDropdownButton">
	<select name="location" id="location" class="btn btn-primary dropdown-toggle dropdown-toggle-split">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations']->value, 'location');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
?>
		<a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->page, ENT_QUOTES, 'UTF-8');?>
&action=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->action, ENT_QUOTES, 'UTF-8');?>
&location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item <?php if ($_smarty_tpl->tpl_vars['selectedLocation']->value == $_smarty_tpl->tpl_vars['location']->value->name) {?> selected<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
	</div>
	<?php }?>
</div>
<?php }
}
}
