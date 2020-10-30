<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 12:31:40
  from '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/resident_contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edff1ac692f56_95282714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c1462e3784c0ac1a3cf6cf7abeb45e5c5233011' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/resident_contact.tpl',
      1 => 1591734124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edff1ac692f56_95282714 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">

	<h1>Contact</h1>
	
	<form id="residentContact" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="module" value="Admissions">
		<input type="hidden" name="page" value="admissions">
		<input type="hidden" name="action" value="save_contact">
		<input type="hidden" id="prospect-id" name="prospect_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['resident_id']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" id="contact-id" name="contact_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value->id, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="contact_link" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_link']->value->id, ENT_QUOTES, 'UTF-8');?>
">


		<!-- contact type -->
		<div class="row">
			<div class="col-12">
	            <div class="form-group">
	                <label for="contact-type">Contact Type</label>
	                <select name="contact_type" id="contact-type" class="form-control" required>
	                    <option value=""></option>
	                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact_type']->value, 'ct');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
?>
	                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ct']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['contact_link']->value->contact_type == $_smarty_tpl->tpl_vars['ct']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ct']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
	                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	                </select>
	            </div>
			</div>
		</div>
		<!-- /contact type -->

		<!-- contact Name -->
		<div class="row">
			<div class="col-6">
				<div class="form-group">
				    <label for="first-name">First Name</label>
				    <input type="text" class="form-control" id="first-name" name="first_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value->first_name, ENT_QUOTES, 'UTF-8');?>
" required>
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
				    <label for="last-name">Last Name</label>
				    <input type="text" class="form-control" id="last-name" name="last_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value->last_name, ENT_QUOTES, 'UTF-8');?>
" required>
				</div>
			</div>
		</div>
		<!-- /contact Name -->


		<!-- phone and email -->
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="email-address">Contact Email:</label>
					<input type="text" id="email-address" class="form-control" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value->email, ENT_QUOTES, 'UTF-8');?>
" required>
				</div>				
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="phone">Contact Phone:</label>
					<input type="text" class="form-control phone" name="phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value->phone, ENT_QUOTES, 'UTF-8');?>
" required>
				</div>
			</div>

		</div>
		<!-- /phone and email -->				



		<!-- physical address -->
		<div class="row">
			<div class="col-12">
				<div class="form-group">
				    <label for="address">Address</label>
				    <input type="text" class="form-control" id="address" name="address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value->address, ENT_QUOTES, 'UTF-8');?>
">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
				    <label for="city">City</label>
				    <input type="text" class="form-control" id="city" name="city" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value->city, ENT_QUOTES, 'UTF-8');?>
">
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="form-group">
				    <label for="state">State</label>
				    <select name="state" id="state" class="form-control">
				        <option value=""></option>
				        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
				        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->abbr, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['contact']->value->state == $_smarty_tpl->tpl_vars['s']->value->abbr) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->abbr, ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
				        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				    </select>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="form-group">
				    <label for="zip">Zip Code</label>
				    <input type="text" class="form-control" id="zip" name="zip" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value->zip, ENT_QUOTES, 'UTF-8');?>
">
				</div>
			</div>
		</div>
		<!-- /physical address -->

		<!-- poa and primary contact -->
		<div class="row">
			<div class="col-12">
				<div class="form-check form-check-inline">
				    <input type="checkbox" id="poa" name="poa" value="1" class="form-check-input" <?php if ($_smarty_tpl->tpl_vars['contact_link']->value->poa) {?> checked<?php }?>>
				    <label for="poa" class="form-check-label">Power of Attorney</label>
				</div>
				<div class="form-check form-check-inline">
				    <input type="checkbox" id="primary-contact" name="primary_contact" value="1" class="form-check-input" <?php if ($_smarty_tpl->tpl_vars['contact_link']->value->primary_contact) {?> checked<?php }?>>
				    <label for="primary_contact" class="form-check-label">Primary Contact</label>
				</div>
			</div>
		</div>
		<!-- /poa and primary contact -->

		<div class="row">
			<div class="col-12 text-right">
				<button type="button" id="save-contact" class="btn btn-primary">Save</button>
			</div>
		</div>
	</form>

</div>


<?php echo '<script'; ?>
>
	$(".phone").mask("(999) 999-9999");

	$("#save-contact").click(function() {
		var prospect = $("#prospect-id").val();
		var contact = $("#contact-id").val();
		var contactType = $("#contact-type :selected").val();
		var data = $("#residentContact").serialize();

		$.post(SITE_URL, data, function (e) {
				//console.log(e);
				location.reload();
			}
		);
	});


<?php echo '</script'; ?>
><?php }
}
