<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 09:33:57
  from '/var/www/html/aptitudecare/dev/protected/Views/public/tour_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed147850f5f70_34545387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fadfa8c0142d2c2bb282af69537effbff41e0346' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/public/tour_form.tpl',
      1 => 1590773634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed147850f5f70_34545387 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container tour-form">
	<div class="row mt-5">
		<div class="col-12 text-center">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/logo-black.png" alt="">
		</div>
	</div>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="page" value="public">
		<input type="hidden" name="action" value="submit_tour_form">

		<!-- potential resident info -->		
		<h2>Potential Resident Info</h2>
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
				    <label for="Resident-first-name">First Name</label>
				    <input type="text" class="form-control" id="resident-first-name" name="resident_first_name" required>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
				    <label for="resident-last-name">Last Name</label>
				    <input type="text" class="form-control" id="resident-last-name" name="resident_last_name" required>
				</div>
			</div>
		
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
				    <label for="resident-email">Email Address</label>
				    <input type="text" class="form-control" id="resident-email" name="resident_email">
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
				    <label for="resident-phone">Phone Number</label>
				    <input type="text" class="form-control phone" id="resident-phone" name="resident_phone">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
				    <label for="timeframe">Approximate Date Needed</label>
				    <select name="timeframe" id="timeframe" class="form-control" required>
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
				<p>Primary Payor Source</p>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payor_source']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
				<div class="form-check form-check-inline">
				    <input type="radio" id="payor-source<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" name="payor_source" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->id, ENT_QUOTES, 'UTF-8');?>
" class="form-check-input">
				    <label for="payor-source<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-check-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->name, ENT_QUOTES, 'UTF-8');?>
</label>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
		<!-- /potential resident info -->


		<!-- primary contact info -->	
		<h2>Primary Contact</h2>
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
				    <label for="contact-first-name">First Name</label>
				    <input type="text" class="form-control" id="contact-first-name" name="contact_first_name" required>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
				    <label for="contact-last-name">Last Name</label>
				    <input type="text" class="form-control" id="contact-last-name" name="contact_last_name" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
				    <label for="contact-email">Email Address</label>
				    <input type="text" class="form-control" id="contact-email" name="contact_email">
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
				    <label for="contact-phone">Phone Number</label>
				    <input type="text" class="form-control phone" id="contact-phone" name="contact_phone" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
				    <label for="contact-type">Relationship/Contact Type</label>
				    <select name="contact_type" id="contact-type" class="form-control" required>
				        <option value=""></option>
				        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact_type']->value, 't');
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
				    <select name="referral_source" id="referral-source" class="form-control" required>
				        <option value=""></option>
				        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['referral_source']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
				        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
				        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				    </select>
				</div>
			</div>
		</div>
		<!-- /primary contact info -->

		<div class="row mt-3 mb-5">
			<div class="col-12 text-right">
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</div>
		

	</form>
</div>

<?php echo '<script'; ?>
>
	$(".phone").mask("(999) 999-9999");
<?php echo '</script'; ?>
><?php }
}
