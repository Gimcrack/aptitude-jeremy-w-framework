<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 23:57:13
         compiled from "/var/www/html/synesis_dev/modules/Dietary/Views/info/public_page_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5474102195c4ba2592af754-22463325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2dadac50599f120d6d2777e06415c0e7e865132' => 
    array (
      0 => '/var/www/html/synesis_dev/modules/Dietary/Views/info/public_page_items.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5474102195c4ba2592af754-22463325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'SITE_URL' => 0,
    'menuGreeting' => 0,
    'location' => 0,
    'current_url' => 0,
    'meals' => 0,
    'meal' => 0,
    'alternates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba2592d7745_32866202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba2592d7745_32866202')) {function content_5c4ba2592d7745_32866202($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/synesis_dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?>
<div id="page-header">
	<div id="action-left">&nbsp;</div>
	<div id="center-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("selectLocation"), ENT_QUOTES, 'ISO-8859-1');?>
</div>
	<div id="action-right">&nbsp;</div>
</div>
<div class="row multiple-page-form">
	<h2>Welcome Info</h2>
	<form name="welcome_info" id="welcome-info" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
		<input type="hidden" name="page" value="info">
		<input type="hidden" name="action" value="submitWelcomeInfo">
		<input type="hidden" name="location_detail_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuGreeting']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
">
		<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">
		<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
		<table class="form-multiple">
			<tr>
				<td><input type="text" name="menu_greeting" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuGreeting']->value->menu_greeting, ENT_QUOTES, 'ISO-8859-1');?>
" size="65" onkeydown="limitText(this.form.menu_greeting,this.form.countdown,75)" onkeyup="limitText(this.form.menu_greeting,this.form.countdown,75)" maxlength="75"></td>
			</tr>
			<tr>
				<td class="text-right"><font size="1">You have <input readonly type="text" name="countdown" size="3" value="75"> characters left. (Maximum characters: 75). </font></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td class="text-right"><input type="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</div>

<div class="row multiple-page-form">
	<h2>Meal Times</h2>
	<form name="meal_times" id="meal-times" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
		<input type="hidden" name="page" value="info">
		<input type="hidden" name="action" value="submitMealTimes">
		<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">
		<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
">

		<table class="form-multiple">
			<tr>
				<td>&nbsp;</td>
				<td><strong>Start</strong></td>
				<td><strong>End</strong></td>
			</tr>
			<tr>
				<td>Breakfast</td>
			<?php  $_smarty_tpl->tpl_vars["meal"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["meal"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['meals']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["meal"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["meal"]->key => $_smarty_tpl->tpl_vars["meal"]->value) {
$_smarty_tpl->tpl_vars["meal"]->_loop = true;
 $_smarty_tpl->tpl_vars["meal"]->iteration++;
?>

				<?php if ($_smarty_tpl->tpl_vars['meal']->iteration==2) {?>
				<td>Lunch</td>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['meal']->iteration==3) {?>
				<td>Dinner</td>
				<?php }?>

				<td><input type="text" name="start[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meal']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value->start,"%l:%M %P"), ENT_QUOTES, 'ISO-8859-1');?>
" class="timepicker"></td>
				<td><input type="text" name="end[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meal']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value->end,"%l:%M %P"), ENT_QUOTES, 'ISO-8859-1');?>
" class="timepicker"></td>
			</tr>
			<?php } ?>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3" class="text-right"><input type="submit" value="Save"></td>
			</tr>
		</table>

	</form>
</div>

<div class="row multiple-page-form">
	<h2>Alternate Menu Items</h2>
	<form name="alt_menu_items" id="alt-menu-items" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
		<input type="hidden" name="page" value="info">
		<input type="hidden" name="action" value="submitAltItems">
		<input type="hidden" name="alt_menu_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alternates']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
">
		<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
		<input type="hidden" name="location" id="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" />

		<table class="form-multiple">
			<tr>
				<td colspan="2" class="text-center">
					<textarea name="alt_menu" id="alt-menu" cols="75" rows="10"><?php echo htmlspecialchars(htmlspecialchars_decode($_smarty_tpl->tpl_vars['alternates']->value->content, ENT_QUOTES), ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
					<p class="text-12" style="margin:0;"><strong>IMPORTANT:</strong> The alternate menu items must be separated with a semicolon (;) for them to display properly.</p>
				</td>
			</tr>
			<tr>
				<td class="text-right"><input type="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</div>





<script type="text/javascript">
	function limitText(limitField, limitCount, limitNum) {
		console.log(limitField);
		if (limitField.value.length > limitNum) {
			limitField.value = limitField.value.substring(0, limitNum);
		} else {
			limitCount.value = limitNum - limitField.value.length;
		}
	}
</script>
<?php }} ?>
