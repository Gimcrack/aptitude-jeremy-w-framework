<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-07 12:21:43
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/module.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb46dd7c77983_87895478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbcc1d9b040030b20252036af182b1050bd3cc52' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/module.tpl',
      1 => 1585173508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb46dd7c77983_87895478 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['modules']->value) > 1) {?>
	<div class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" type="button" id="moduleDropdownButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->module, ENT_QUOTES, 'UTF-8');?>

		</button>
		<div class="dropdown-menu" aria-labelledby="moduleDropdownButton">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
			<a class="dropdown-item <?php if ($_smarty_tpl->tpl_vars['module']->value == $_smarty_tpl->tpl_vars['m']->value->name) {?> selected<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->name, ENT_QUOTES, 'UTF-8');?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>

<?php }
}
}
