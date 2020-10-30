<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 11:17:06
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/menu_start_date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54245085d83b4bd416f05-48670605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae960613c99c62ead06879f0cb18b6399d1cbd39' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/menu_start_date.tpl',
      1 => 1588032824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54245085d83b4bd416f05-48670605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d83b4bd46de10_87418521',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d83b4bd46de10_87418521')) {function content_5d83b4bd46de10_87418521($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div class="row">
	<div class="col-sm-12"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("selectLocation"), ENT_QUOTES, 'UTF-8');?>
</div>
</div>

<div class="container">
	<h1>Set Menu Start Date</h1>

	<div class="row mt-4">
		<div class="col-sm-6">
			<p><strong>Current Menu</strong>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentMenu']->value->name, ENT_QUOTES, 'UTF-8');?>
</p>
		</div>
		<div class="col-sm-6">
			<p><strong>Date Started</strong>: <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['currentMenu']->value->date_start), ENT_QUOTES, 'UTF-8');?>
</p>
		</div>
	</div>


	<form id="start-date" name="start_date" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="module" value="Dietary">
		<input type="hidden" name="page" value="info">
		<input type="hidden" name="action" value="submitStartDate">
		<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		
		<div class="row">
			<div class="col-sm-6">
				<strong>Choose the menu: &nbsp;</strong>
				<?php  $_smarty_tpl->tpl_vars["menu"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menu"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['availableMenus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menu"]->key => $_smarty_tpl->tpl_vars["menu"]->value) {
$_smarty_tpl->tpl_vars["menu"]->_loop = true;
?>
				<input type="radio" name="menu" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'UTF-8');?>

				<?php } ?>
			</div>
			<div class="col-sm-6">
				<strong>Select the start date</strong>:
				<input type="input" name="date_start" class="datepicker">
			</div>
		</div>

		<div class="row mt-5 text-right">
			<div class="col-sm-12">
				<buton type="submit" class="btn btn-primary">Submit</buton>
			</div>
		</div>
	</form>

	<br>
	<br>
	<div class="row">
		<div class="col-sm-12">	
			<p>NOTE: You only need to change the menu twice per year when you are ready to change to a new menu. For example, if you are currently on the Fall/Winter menu you will not need to use this page until just prior to changing to the Spring/Summer menu.</p>
			<p>PLEASE REMEMBER: Once the menu is set to start it will continue to rotate through the menu until it reaches the start date for the new menu season. You can see the start dates for each menu above.</p>
		</div>
	</div>
</div><?php }} ?>
