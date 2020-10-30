<?php /* Smarty version Smarty-3.1.19, created on 2020-05-06 10:54:19
         compiled from "/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/new_prospect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16028171855eb1f874d01c15-65372719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '364f3f5857441e90debfafcb9b08ea63acf0d8d7' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/new_prospect.tpl',
      1 => 1588791257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16028171855eb1f874d01c15-65372719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5eb1f874d023a6_67933046',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb1f874d023a6_67933046')) {function content_5eb1f874d023a6_67933046($_smarty_tpl) {?><div class="container">
	<h1>New Prospect</h1>

	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" class="form" method="post">
		<input type="hidden" name="module" value="Admissions">
		<input type="hidden" name="page" value="admissions">
		<input type="hidden" name="action" value="save-prospect">
		<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">

		<div class="form-group">
			<label for="first-name">First Name:</label>
			<input type="text" id="first-name" class="form-control" name="first_name" required>
		</div>
		<div class="form-group">
			<label for="last-name">Last Name:</label>
			<input type="text" id="last-name" class="form-control" name="last_name" required>
		</div>
		<div class="form-group">
			<label for="email-address">Email Address:</label>
			<input type="text" id="email-address" class="form-control" name="email_address">
		</div>
		<div class="form-group">
			<label for="phone">Phone:</label>
			<input type="text" id="phone" class="form-control" name="phone" required>
		</div>

		<div class="form-group">
			<select name="timeframe" id="timeframe" class="form-control">
				<option value="">Select a timeframe for admission...</option>
				<option value="1-2_weeks">1-2 Weeks</option>
				<option value="2-4_weeks">2-4 Weeks</option>
				<option value="1-2_months">1-2 Months</option>
				<option value="2-6_months">2-6 Months</option>
				<option value="6+_months">6+ Months</option>
			</select>
		</div>

		<div class="row float-right my-4">
			<div class="col-md-12">
				<button type="button" class="btn btn-secondary" onClick="history.go(-1)">Cancel</button>
				<button type="submit" class="btn btn-primary">Save</button>			
			</div>
		</div>

	</form>
</div><?php }} ?>
