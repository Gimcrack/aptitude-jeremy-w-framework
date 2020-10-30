<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 23:28:53
  from '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/new_prospect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee08bb5b7d2d8_14688966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e1cc7f5dff875b9d2a5231e3ac96a4b7c7075f1' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/new_prospect.tpl',
      1 => 1591734123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee08bb5b7d2d8_14688966 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
	<h1>New Prospect Lead</h1>

	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" class="form" method="post">
		<input type="hidden" name="module" value="Admissions">
		<input type="hidden" name="page" value="admissions">
		<input type="hidden" name="action" value="save_new_prospect">
		<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">

		<h2>Resident Info</h2>
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="first-name">First Name:</label>
					<input type="text" id="first-name" class="form-control" name="first_name" required>
				</div>				
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="last-name">Last Name:</label>
					<input type="text" id="last-name" class="form-control" name="last_name" required>
				</div>				
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="email-address">Email Address:</label>
					<input type="text" id="email-address" class="form-control" name="email">
				</div>				
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="phone">Phone:</label>
					<input type="text" class="form-control phone" name="phone" required>
				</div>				
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="timeframe">Timeframe</label>
					<select name="timeframe" id="timeframe" class="form-control">
						<option value=""></option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timeframe']->value, 't');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
?>
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
				    <label for="referral-source">Referral Source</label>
				    <select name="referral_source" id="referral-source" class="form-control">
				        <option value=""></option>
				        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['referral_sources']->value, 'rs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->value) {
?>
				        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rs']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rs']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
				        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				    </select>
				</div>				
			</div>
		</div>

		<br>
		<h2>Contact Info</h2>

		<div class="table-responsive mb-5">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">&nbsp;</th>
						<th scope="col">Contact Name</th>
						<th scope="col">Contact Type</th>
					</tr>
				</thead>
				<tbody id="contact-table-body">
					
				</tbody>
			</table>
		</div>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('addContact'), ENT_QUOTES, 'UTF-8');?>

		

		<div class="row float-right my-4">
			<div class="col-md-12">
				<button type="button" class="btn btn-secondary" onClick="history.go(-1)">Cancel</button>
				<button type="submit" class="btn btn-primary">Save</button>			
			</div>
		</div>

	</form>
</div><?php }
}
