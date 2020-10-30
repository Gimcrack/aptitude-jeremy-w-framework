<?php /* Smarty version Smarty-3.1.19, created on 2019-01-26 00:03:13
         compiled from "/var/www/html/synesis_dev/modules/Dietary/Views/info/edit_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3349073805c4ba3c1448233-62183445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0758a8a9184ceff3a8e12c2f6e80d1016314fe33' => 
    array (
      0 => '/var/www/html/synesis_dev/modules/Dietary/Views/info/edit_menu.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3349073805c4ba3c1448233-62183445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'menu' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba3c1451450_72307402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba3c1451450_72307402')) {function content_5c4ba3c1451450_72307402($_smarty_tpl) {?><h1>Edit Menu</h1>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
	<input type="hidden" name="page" value="info">
	<input type="hidden" name="action" value="edit_menu">
	<input type="hidden" name="menu" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">
	<input type="hidden" name="current_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

	<table class="center">
		<tr>
			<td>Menu Name:</td>
			<td><input type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
"></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" class="text-right"><input type="submit" value="Save"></td>
		</tr>
	</table>
</form><?php }} ?>
