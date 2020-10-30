<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 15:53:18
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/menu_start_date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee1726eae9523_81274147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa8a6b03a50e2a637477ca8c9958bfb97f88c6a2' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/menu_start_date.tpl',
      1 => 1588032824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee1726eae9523_81274147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="row">
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
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableMenus']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
				<input type="radio" name="menu" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'UTF-8');?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
</div><?php }
}
