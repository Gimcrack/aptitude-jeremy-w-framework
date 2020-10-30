<?php /* Smarty version Smarty-3.1.19, created on 2019-07-02 01:00:16
         compiled from "/var/www/html/aptitudecare/modules/Dietary/Views/patient_info/add_patient.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16203960495c95670d609684-01698789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce6fc48372617da17bc63749ca93d7f4a0a74219' => 
    array (
      0 => '/var/www/html/aptitudecare/modules/Dietary/Views/patient_info/add_patient.tpl',
      1 => 1553125343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16203960495c95670d609684-01698789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c95670d60e446_87022369',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'location' => 0,
    'number' => 0,
    'currentUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c95670d60e446_87022369')) {function content_5c95670d60e446_87022369($_smarty_tpl) {?><h1>Add New Patient</h1>

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
	<table class="form">
		<tr>
			<td class="text-strong">Room</td>
			<td class="text-strong">Admit Date</td>
		</tr>
		<tr>
			<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8');?>
</td>
			<td><input type="text" class="datepicker" name="admit_date" value="" required /></td>
		</tr>

		<tr>
			<td class="text-strong">Last Name</td>
			<td class="text-strong">First Name</td>
		</tr>
		<tr>
			<td><input type="text" name="last_name" size="40"></td>
			<td><input type="text" name="first_name" size="30"></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" class="text-right"><input type="button" id="cancel" value="Cancel" onclick="history.go(-1)"> <input type="submit" value="Save"></td>
		</tr>
	</table>
</form><?php }} ?>
