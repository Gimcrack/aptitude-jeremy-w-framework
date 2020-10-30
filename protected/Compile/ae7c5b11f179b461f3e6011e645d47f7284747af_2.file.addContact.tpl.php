<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 16:36:04
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/addContact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee02af4bd4b18_39765544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae7c5b11f179b461f3e6011e645d47f7284747af' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/addContact.tpl',
      1 => 1591749362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee02af4bd4b18_39765544 (Smarty_Internal_Template $_smarty_tpl) {
?><p>
	<button id="searchExistingButton" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#searchExisting" aria-expanded="true" aria-controls="searchExisting">Search Existing Contacts</button>
	<button id="addNewButton" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#addNew" aria-expanded="false" aria-controls="addNew">Create a New Contact</button>
</p>

<div class="row">
	<div class="col-12">
		<div class="collapse show" id="searchExisting">
			<div class="card card-body">
				<div class="row">
					<div class="col-sm-3">
				        <div class="form-group">
				            <label for="contact-type">Contact Type</label>
				        	<select id="addExistingContactType" class="form-control">
				               	<option value=""></option>
				            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact_type']->value, 'ct');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
?>
				                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ct']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ct']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
				                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				            </select>
				        </div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
						    <label for="contact-name">Name</label>
						    <input type="text" class="form-control" id="contact-name" value="">
						    <input type="hidden" id="contact-id">
						</div>
					</div>

					<div class="col-sm-4">
						<br>
						<div class="form-check">
						    <input type="checkbox" id="poa" value="1" class="form-check-input">
						    <label for="poa" class="form-check-label">Power of Attorney</label>
						</div>
						<div class="form-check">
						    <input type="checkbox" id="primary-contact" value="1" class="form-check-input">
						    <label for="primary-contact" class="form-check-label">Primary Contact</label>
						</div>
					</div>

					<div class="col-sm-1 text-right">
						<label for="add-button">&nbsp;</label><br>
						<button type="button" id="link-contact" class="btn btn-primary">Add</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="collapse" id="addNew">
			<div class="card card-body">

				<!-- contact type -->
				<div class="row">
					<div class="col-12">
			            <div class="form-group">
			                <label for="contact-type">Contact Type</label>
			                <select id="addNewContactType" class="form-control">
			                    <option value=""></option>
			                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact_type']->value, 'ct');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
?>
			                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ct']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ct']->value->name, ENT_QUOTES, 'UTF-8');?>
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
						    <input type="text" class="form-control" id="contactFirstName" value="">
						</div>
					</div>

					<div class="col-6">
						<div class="form-group">
						    <label for="last-name">Last Name</label>
						    <input type="text" class="form-control" id="contactLastName" value="">
						</div>
					</div>
				</div>
				<!-- /contact Name -->


				<!-- phone and email -->
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="form-group">
							<label for="email-address">Contact Email:</label>
							<input type="text" id="contactEmail" class="form-control" value="">
						</div>				
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="form-group">
							<label for="phone">Contact Phone:</label>
							<input type="text" id="contactPhone" class="form-control phone" value="">
						</div>
					</div>

				</div>
				<!-- /phone and email -->				



				<!-- physical address -->
				<div class="row">
					<div class="col-12">
						<div class="form-group">
						    <label for="address">Address</label>
						    <input type="text" class="form-control" id="contactAddress" value="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="form-group">
						    <label for="city">City</label>
						    <input type="text" class="form-control" id="contactCity" value="">
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
						    <label for="state">State</label>
						    <select id="contactState" class="form-control">
						        <option value=""></option>
						        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
						        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->abbr, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->abbr, ENT_QUOTES, 'UTF-8');?>
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
						    <input type="text" class="form-control" id="contactZip" value="">
						</div>
					</div>
				</div>
				<!-- /physical address -->

				<!-- poa and primary contact -->
				<div class="row">
					<div class="col-12">
						<div class="form-check form-check-inline">
						    <input type="checkbox" id="newPoa" value="1" class="form-check-input">
						    <label for="poa" class="form-check-label">Power of Attorney</label>
						</div>
						<div class="form-check form-check-inline">
						    <input type="checkbox" id="newPrimaryContact" value="1" class="form-check-input">
						    <label for="primary_contact" class="form-check-label">Primary Contact</label>
						</div>
					</div>
				</div>
				<!-- /poa and primary contact -->
				
				<div class="row">
					<div class="col text-right">
						<label for="add-button">&nbsp;</label><br>
						<button type="button" id="add-contact" class="btn btn-primary">Add</button>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>







<?php }
}
