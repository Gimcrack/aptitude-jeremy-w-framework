<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 11:01:27
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/public_page_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2965258185d83b4dbacd563-23687243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89e82c078623b52da7484a31d562a364dd3cf386' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/public_page_items.tpl',
      1 => 1588032832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2965258185d83b4dbacd563-23687243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d83b4dbae7463_51978157',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d83b4dbae7463_51978157')) {function content_5d83b4dbae7463_51978157($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div class="container">
	<div class="row">
		<div class="col-sm-12"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("selectLocation"), ENT_QUOTES, 'UTF-8');?>
</div>
	</div>
	<div class="row mb-4 text-center">
		<div class="col-12"><h1>Public Page Display Items</h1></div>
		
	</div>
	

	<form name="welcome_info" id="welcome-info" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="module" value="Dietary">
		<input type="hidden" name="page" value="info">
		<input type="hidden" name="action" value="submitWelcomeInfo">
		<input type="hidden" name="location_detail_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuGreeting']->value->id, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		
		<div class="form-group">
			<label for="menu-greeting"><h3>Welcome Info</h3></label>
			<input type="text" id="menu-greeting" class="form-control" name="menu_greeting" aria-describedby="charLimit" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuGreeting']->value->menu_greeting, ENT_QUOTES, 'UTF-8');?>
" size="65" onkeydown="limitText(this.form.menu_greeting,this.form.countdown,75)" onkeyup="limitText(this.form.menu_greeting,this.form.countdown,75)" maxlength="75">
			<small id="charLimit" class="form-text text-muted">You have <input readonly type="text" name="countdown" size="3" value="75"> characters left. (Maximum characters: 75).</small>
		</div>

		<div class="row">
			<div class="col-12 text-right">
				<button class="btn btn-primary" type="submit">Save</button>
			</div>
		</div>
	</form>

		
	<form name="meal_times" id="meal-times" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="page" value="info">
		<input type="hidden" name="action" value="submitMealTimes">
		<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		
		<div class="row">
			<div class="col-12">
				<h3>Meal Times</h3>
			</div>
		</div>

		<table class="table">
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

				<td><input type="text" name="start[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meal']->value->id, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value->start,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
" class="timepicker"></td>
				<td><input type="text" name="end[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meal']->value->id, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value->end,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
" class="timepicker"></td>
			</tr>
			<?php } ?>
		</table>
		<div class="row text-right">
			<div class="col-12">
				<button class="btn btn-primary" type="submit">Save</button>
			</div>
		</div>

	</form>

	<form name="alt_menu_items" id="alt-menu-items" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="page" value="info">
		<input type="hidden" name="action" value="submitAltItems">
		<input type="hidden" name="alt_menu_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alternates']->value->id, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="location" id="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" />

		<div class="row">
			<div class="col-12">
				<h3>Alternate Menu Items</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<textarea id="summernote" class="form-control" name="alt_menu" id="alt-menu" cols="75" rows="10"><?php echo htmlspecialchars(htmlspecialchars_decode($_smarty_tpl->tpl_vars['alternates']->value->content, ENT_QUOTES), ENT_QUOTES, 'UTF-8');?>
</textarea>
			</div>
		</div>

		<div class="row mt-5 text-right">
			<div class="col-12"><button class="btn btn-primary" type="submit">Save</button></div>
		</div>					
	</form>
</div>
<?php }} ?>
