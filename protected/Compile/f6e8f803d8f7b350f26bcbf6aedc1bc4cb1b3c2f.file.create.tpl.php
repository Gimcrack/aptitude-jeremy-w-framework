<?php /* Smarty version Smarty-3.1.19, created on 2019-01-26 00:03:38
         compiled from "/var/www/html/synesis_dev/modules/Dietary/Views/info/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3791890825c4ba3da0f8754-69075213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6e8f803d8f7b350f26bcbf6aedc1bc4cb1b3c2f' => 
    array (
      0 => '/var/www/html/synesis_dev/modules/Dietary/Views/info/create.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3791890825c4ba3da0f8754-69075213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba3da0ff565_46540576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba3da0ff565_46540576')) {function content_5c4ba3da0ff565_46540576($_smarty_tpl) {?><h1>Create a New Menu</h1>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
	<input type="hidden" name="page" value="info">
	<input type="hidden" name="action" value="save_create">
	<input type="hidden" name="current_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

	<table class="form">
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>

		<tr>
			<td><strong>Menu Name:</strong></td>
			<td><input type="text" name="menu_name" size="50"></td>
		</tr>
		<tr>
			<td><strong>Number of weeks in menu:</strong></td>
			<td>
				<select name="num_weeks" id="num-weeks">
					<option value="">Select...</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td class="text-right" colspan="2"><input type="submit" value="Create Menu"></td>
		</tr>
	</table>
</form><?php }} ?>
