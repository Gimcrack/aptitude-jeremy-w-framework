<?php /* Smarty version Smarty-3.1.19, created on 2019-01-26 00:21:40
         compiled from "/var/www/html/synesis_dev/modules/Dietary/Views/patient_info/add_patient.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9625782265c4ba814548f27-92561578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e3150c434666324eb38e703fe1b50ee017b1aa' => 
    array (
      0 => '/var/www/html/synesis_dev/modules/Dietary/Views/patient_info/add_patient.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9625782265c4ba814548f27-92561578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'location' => 0,
    'number' => 0,
    'currentUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba814551319_34203948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba814551319_34203948')) {function content_5c4ba814551319_34203948($_smarty_tpl) {?><h1>Add New Patient</h1>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
	<input type="hidden" name="page" value="patientInfo">
	<input type="hidden" name="action" value="saveAddPatient">
	<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
">
	<input type="hidden" name="number" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
	<input type="hidden" name="currentUrl" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentUrl']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
	<table class="form">
		<tr>
			<td class="text-strong">Room</td>
			<td class="text-strong">Admit Date</td>
		</tr>
		<tr>
			<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'ISO-8859-1');?>
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
