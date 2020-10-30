<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-13 10:29:16
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/add_patient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebc3c7cb74070_89550881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddc56bd75d68cf08e04dccc9f0f02294057e2d56' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/add_patient.tpl',
      1 => 1589394555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebc3c7cb74070_89550881 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
	<h1>Add New Patient</h1>

	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
		<input type="hidden" name="module" value="Dietary">
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


<?php }
}
