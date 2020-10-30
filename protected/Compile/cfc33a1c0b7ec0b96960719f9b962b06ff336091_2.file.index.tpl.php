<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 16:30:49
  from '/var/www/html/aptitudecare/dev/modules/Admissions/Views/profiles/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee029b9bdb7d1_29535202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfc33a1c0b7ec0b96960719f9b962b06ff336091' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/profiles/index.tpl',
      1 => 1591748957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee029b9bdb7d1_29535202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div id="profile" class="container ">
	<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->first_name, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->last_name, ENT_QUOTES, 'UTF-8');?>
</h1>

	<div id="accordion">
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&page=profiles&action=save_profile&id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">
			<input type="hidden" id="prospect" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
		
			<!-- resident info -->
			<div class="card">
				<div class="card-header" id="headingOne">
				  <h2 class="mb-0">
				    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				      <i class="fa fa-plus mr-3"></i>Personal Info
				    </button>
				  </h2>
				</div>
			
				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
			  		<div class="card-body">
						<!-- name -->
						<div class="row">
							<div class="col-sm-12 col-md-5">
								<div class="form-group">
									<label for="first-name">First Name:</label>
									<input type="text" id="first-name" class="form-control" name="first_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->first_name, ENT_QUOTES, 'UTF-8');?>
" required>
								</div>
							</div>
							<div class="col-sm-12 col-md-7">
								<div class="form-group">
									<label for="last-name">Last Name:</label>
									<input type="text" id="last-name" class="form-control" name="last_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->last_name, ENT_QUOTES, 'UTF-8');?>
" required>
								</div>			
							</div>
						</div>		
						<!-- /name -->

						<!-- physical address -->
						<div class="row">
							<div class="col-12">
								<div class="form-group">
								    <label for="address">Resident Address</label>
								    <input type="text" class="form-control" id="address" name="address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->address, ENT_QUOTES, 'UTF-8');?>
">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="form-group">
								    <label for="city">City</label>
								    <input type="text" class="form-control" id="city" name="city" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->city, ENT_QUOTES, 'UTF-8');?>
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
" <?php if ($_smarty_tpl->tpl_vars['prospect']->value->state == $_smarty_tpl->tpl_vars['s']->value->abbr) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->abbr, ENT_QUOTES, 'UTF-8');?>
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
								    <input type="text" class="form-control" id="zip" name="zip" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->zip, ENT_QUOTES, 'UTF-8');?>
">
								</div>
							</div>
						</div>
						<!-- /physical address -->

						<!-- birthdate and gender -->
						<div class="row">
							<div class="col-sm-12 col-md-3">
								<div class="form-group">
				                    <label for="name">Birthdate</label>
				                    <input type="text" class="form-control datepicker" id="birthdate" name="birthdate" value="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['prospect']->value->birthdate,'%d %B, %Y'), ENT_QUOTES, 'UTF-8');?>
" required>
								</div>
							</div>
							<div class="col-sm-12 col-md-2">
								<div class="form-group">
				                    <label for="name">Gender</label>
				                    <select name="gender" class="form-control" id="gender">
				                        <option value=""></option>
				                        <option value="male" <?php if ($_smarty_tpl->tpl_vars['prospect']->value->gender == "male") {?> selected<?php }?>>Male</option>
				                        <option value="female" <?php if ($_smarty_tpl->tpl_vars['prospect']->value->gender == "female") {?> selected<?php }?>>Female</option>
				                    </select>
								</div>	
							</div>
							<div class="col-sm-12 col-md-7">
								<div class="form-group">
									<label for="phone">Resident Phone:</label>
									<input type="text" class="form-control phone" name="phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->phone, ENT_QUOTES, 'UTF-8');?>
" required>
								</div>
							</div>
						</div>		
						<!-- /birthdate and gender -->

						<!-- email and phone -->
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="form-group">
									<label for="email-address">Email Address:</label>
									<input type="text" id="email-address" class="form-control" name="email_address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->email, ENT_QUOTES, 'UTF-8');?>
">
								</div>				
							</div>
							<div class="col-sm-12 col-md-6">
								<p>Is the resident a veteran?</p>
								<div class="form-check form-check-inline">			
								    <input type="radio" id="veteran" name="veteran" value="1" class="form-check-input" <?php if ($_smarty_tpl->tpl_vars['prospect']->value->veteran == 1) {?> checked<?php }?>>
								    <label for="veteran" class="form-check-label">Yes</label>
								</div>
								<div class="form-check form-check-inline">
								    <input type="radio" id="veteran1" name="veteran" value="0" class="form-check-input" <?php if ($_smarty_tpl->tpl_vars['prospect']->value->veteran == 0) {?> checked<?php }?>>
								    <label for="veteran1" class="form-check-label">No</label>
								</div>
							</div>
							<!-- <div class="col-sm-12 col-md-6">
								<div class="form-group">
									<label for="timeframe">Select a timeframe for admission</label>
									<select name="timeframe" id="timeframe" class="form-control">
										<option value=""></option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timeframe']->value, 't');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
?>
										<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['prospect']->value->timeframe == $_smarty_tpl->tpl_vars['t']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
							</div>
						</div> -->
						<!-- /email and phone -->
			  		</div>

			  		<!-- religion and career -->
			  		<div class="row">
			  			<div class="col-sm-12 col-md-6">
			  				<div class="form-group">
			  				    <label for="religion">Religion Preference</label>
			  				    <select name="religion" id="religion" class="form-control">
			  				        <option value=""></option>
			  				        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['religion']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
			  				        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['prospect']->value->religion == $_smarty_tpl->tpl_vars['r']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value->name, ENT_QUOTES, 'UTF-8');?>
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
			  				    <label for="profession">Former Profession</label>
			  				    <input type="text" class="form-control" id="profession" name="profession" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->profession, ENT_QUOTES, 'UTF-8');?>
">
			  				</div>
			  			</div>
			  		</div>
			  		<!-- /religion and career -->

			  		<!-- background info -->
			  		<div class="row">
			  			<div class="col-12">
			  				<div class="form-group">
			  					<label for="background-info">Tell us a little about the resident's life</label>
			  					<textarea name="background_info" id="background-info" class="form-control" rows="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->background_info, ENT_QUOTES, 'UTF-8');?>
</textarea>
			  				</div>
			  			</div>
			  		</div>
			  		<!-- /background info -->
				</div>
			</div>
			<!-- /resident info -->




			<!-- contact info -->
			<div class="card">
				<div class="card-header" id="headingTwo">
				  <h2 class="mb-0">
				    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				      	<i class="fa fa-plus mr-3"></i>Contact Info
				    </button>
				  </h2>
				</div>
			
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
			  		<div class="card-body">

						<table class="table contact-info">
							<thead>
								<th>&nbsp;</th>
								<th>Name</th>
								<th>Contact Type</th>
								<th>&nbsp;</th>
							</thead>
							<tbody id="contact-table-body">						
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
								<tr>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['c']->value->primary_contact) {?><i class="fas fa-hospital-user" data-toggle="tooltip" data-placement="top" title="Primary Contact"></i><input type="hidden" name="contact[$k][poa]" value="1"><?php }?>
										<?php if ($_smarty_tpl->tpl_vars['c']->value->poa) {?><i class="fas fa-balance-scale-left" data-toggle="tooltip" data-placement="top" title="Power of Attorney"></i><?php }?>
									</td>
									<td>
										<a tabindex="0" role="button" class="btn" data-toggle="popover" data-trigger="focus" title="Contact Info" data-content="<strong>Phone:</strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->phone, ENT_QUOTES, 'UTF-8');?>
 <br><strong>Email:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->email, ENT_QUOTES, 'UTF-8');?>
" data-html="true"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->first_name, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->last_name, ENT_QUOTES, 'UTF-8');?>
</a>
									</td>
									<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->contact_type, ENT_QUOTES, 'UTF-8');?>
</td>
									<td class="text-right">
										<button type="button" class="modal-webpage btn" data-toggle="modal" data-remote="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions&amp;action=resident_contact&amp;prospect_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;contact_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&contact_link=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->contact_link, ENT_QUOTES, 'UTF-8');?>
" data-target="#addNewContact"><i class="fas fa-user-edit"></i></button>
										<a class="btn delete" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-user-minus"></i></a>
										<input type="hidden" class="prospect-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
										<input type="hidden" class="contact-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
										<input type="hidden" class="contact-link" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->contact_link, ENT_QUOTES, 'UTF-8');?>
">
									</td>
								</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>

						</table>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('addContact'), ENT_QUOTES, 'UTF-8');?>

			  		</div>
				</div>
			</div>
			<!-- /contact info -->



			<!-- financial info -->			
			<div class="card">
				<div class="card-header" id="headingFour">
				  <h5 class="mb-0">
				    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseOne">
				      <i class="fa fa-plus mr-3"></i>Financial Info
				    </button>
				  </h5>
				</div>
			
				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
			  		<div class="card-body">
						
			  		</div>
				</div>
			</div>
			<!-- /financial info -->


			<!-- <div class="card">
				<div class="card-header" id="headingFive">
				  <h5 class="mb-0">
				    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseOne">
				      <i class="fa fa-plus mr-3"></i>Health Assessment
				    </button>
				  </h5>
				</div>
			
				<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
			  		<div class="card-body">
						
			  		</div>
				</div>
			</div> -->
									
		</form>

		<form id="fileForm" enctype="multipart/form-data">
			<!-- files -->
			<div class="card">
				<div class="card-header" id="headingThree">
				  <h2 class="mb-0">
				    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne">
				      <i class="fa fa-plus mr-3"></i>Documents
				    </button>
				  </h2>
				</div>
			
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
			  		<div id="file-card" class="card-body">
						<div class="row justify-content-center">
							<div class="col">
					  			<table id="prospect-files" class="table table-striped">
					  				<thead>
					  					<tr>
					  						<th colspan="2" class="text-center">Current Files</th>
					  					</tr>
					  				</thead>
					  				<tbody id="file-table-row">
					  					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
					  					<tr>
											<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value->name, ENT_QUOTES, 'UTF-8');?>
</td>
											<td class="text-right"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['AWS']->value, ENT_QUOTES, 'UTF-8');?>
/client_files/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value->file_name, ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fas fa-file fa-2x"></i></a></td>
										</tr>
					  					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					  				</tbody>
					  			</table>
					  		</div>
					  	</div>

			  			<div class="row file-select">
			  				<div class="col-sm-12 col-md-4">
			  					<div class="form-group">
			  					    <select name="file_type[]" id="file-type" class="form-control">
			  					        <option value="">Select file type...</option>
			  					        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['file_type']->value, 'ft');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ft']->value) {
?>
			  					        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ft']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ft']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
			  					        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			  					    </select>
			  					</div>
			  				</div>
			  				<div class="col-sm-10 col-md-7">
								<div class="custom-file">
									<input type="file" name="file" id="file" class="custom-file-input">
									<label for="file" class="custom-file-label">Choose File</label>
								</div>			  					
			  				</div>
			  				<div class="col-sm-2 col-md-1">
			  					<button type="button" id="addFile" class="btn btn-primary active-button">Upload</button>
			  				</div>
			  			</div>
			  		</div>
				</div>
			</div>		
			<!-- /files -->
		</form>
		</div>

				
		<div class="row mt-4">
			<div class="col-12 text-right">
				<button type="button" class="btn btn-secondary" onClick="history.go(-1)">Cancel</button>
				<button type="submit" class="btn btn-primary">Save</button>				
			</div>
		</div>
	</form>
</div>


<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('deleteModal'), ENT_QUOTES, 'UTF-8');?>

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('webpageModal',''), ENT_QUOTES, 'UTF-8');?>


<?php echo '<script'; ?>
 src="https://github.com/pipwerks/PDFObject/blob/master/pdfobject.min.js"><?php echo '</script'; ?>
><?php }
}
