<?php /* Smarty version Smarty-3.1.19, created on 2020-03-31 16:26:45
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/add_patient.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1615096095d797e8e03cc66-67388864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7638c9db0180f69d61a66ab0a8127515824de24' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/add_patient.tpl',
      1 => 1585700802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1615096095d797e8e03cc66-67388864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d797e8e045285_67575594',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'location' => 0,
    'number' => 0,
    'currentUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d797e8e045285_67575594')) {function content_5d797e8e045285_67575594($_smarty_tpl) {?><div class="container">
	<h1>Add New Patient</h1>

	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
		<input type="hidden" name="page" value="patientInfo">
		<input type="hidden" name="action" value="saveAddPatient">
		<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->id, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="number" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="currentUrl" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentUrl']->value, ENT_QUOTES, 'UTF-8');?>
">
	
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="form-group">
					<label for="room">Room:</label>
					<input type="text" class="form-control" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8');?>
" name="room" readonly="readonly">
				</div>			
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="form-group">
					<label for="admit-date">Admit Date:</label>
					<input type="text" class="datepicker form-control" id="admit-date" name="admit_date" value="" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-sm-12">
				<label for="first-name">First Name:</label>
				<input type="text" id="first-name" class="form-control" name="first_name">
			</div>
			<div class="col-md-6 col-sm-12">
				<label for="last-name">Last Name:</label>
				<input type="text" id="last-name" class="form-control" name="last_name">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-right mt-5">
				<button type="button" class="btn btn-secondary" onclick="history.go(-1)">Cancel</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</div>
	</form>

	
</div>


<?php }} ?>
