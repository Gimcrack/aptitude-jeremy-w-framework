<?php /* Smarty version Smarty-3.1.19, created on 2019-01-26 00:08:22
         compiled from "/var/www/html/synesis_dev/modules/Dietary/Views/info/menu_start_date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2355064355c4ba4f649bc88-69875056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '703abcb7b767afbd0bc9ad903afea9576c86ab6e' => 
    array (
      0 => '/var/www/html/synesis_dev/modules/Dietary/Views/info/menu_start_date.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2355064355c4ba4f649bc88-69875056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'currentMenu' => 0,
    'SITE_URL' => 0,
    'location' => 0,
    'current_url' => 0,
    'availableMenus' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba4f64a49f9_55082633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba4f64a49f9_55082633')) {function content_5c4ba4f64a49f9_55082633($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/synesis_dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div id="action-left">
	&nbsp;
</div>
<div id="center-title">
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("selectLocation"), ENT_QUOTES, 'ISO-8859-1');?>

</div>
<div id="action-right">
	&nbsp;
</div>

<div class="clear"></div>
<h1>Set Menu Start Date</h1>

<div class="current-menu-info">
	<p><strong>Current Menu</strong>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentMenu']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</p>
	<p><strong>Date Started</strong>: <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['currentMenu']->value->date_start), ENT_QUOTES, 'ISO-8859-1');?>
</p>
</div>

<form id="start-date" name="start_date" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
	<input type="hidden" name="page" value="info">
	<input type="hidden" name="action" value="submitStartDate">
	<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">
	<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
	<br><br>
	<table class="form text-center">
		<tr>
			<td><strong>Choose the menu:</strong></td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars["menu"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menu"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['availableMenus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menu"]->key => $_smarty_tpl->tpl_vars["menu"]->value) {
$_smarty_tpl->tpl_vars["menu"]->_loop = true;
?>
			<tr>
				<td><input type="radio" name="menu" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</td>
			</tr>
		<?php } ?>

		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><strong>Select the start date</strong>:</td>
		</tr>
		<tr>
			<td><input type="input" name="date_start" class="datepicker"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td class="text-right"><input type="submit" value="Save"></td>
		</tr>
	</table>
</form>

<br>
<br>
<div id="page-info">
	<p>NOTE: You only need to change the menu twice per year when you are ready to change to a new menu. For example, if you are currently on the Fall/Winter menu you will not need to use this page until just prior to changing to the Spring/Summer menu.</p>
	<p>PLEASE REMEMBER: Once the menu is set to start it will continue to rotate through the menu until it reaches the start date for the new menu season. You can see the start dates for each menu above.</p>


</div>
<?php }} ?>
