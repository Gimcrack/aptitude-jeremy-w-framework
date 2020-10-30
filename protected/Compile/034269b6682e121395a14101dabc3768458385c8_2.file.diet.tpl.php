<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 13:20:19
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/diet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebf07930ad214_54091689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '034269b6682e121395a14101dabc3768458385c8' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/diet.tpl',
      1 => 1588722044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebf07930ad214_54091689 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container diet">
	<h1 class="mb-5">Edit Diet for <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->fullName(), ENT_QUOTES, 'UTF-8');?>
</h1>


	<form class="form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
		<input type="hidden" name="module" value="Dietary">
		<input type="hidden" name="page" value="PatientInfo">
		<input type="hidden" name="action" value="saveDiet">
		<input type="hidden" id="patient-id" name="patient" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">

		<div class="row form-header">
			<h2>Patient Info</h2>
		</div>
		<div class="row mb-4">
			<div class="form-group col-md-3 col-sm-6">
				<label for="first-name">First Name:</label>
				<input type="text" id="first-name" class="form-control" name="first_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->first_name, ENT_QUOTES, 'UTF-8');?>
">
			</div>
			<div class="form-group col-md-2 col-sm-6">
				<label for="middle-name">Middle Name:</label>
				<input type="text" id="middle-name" class="form-control" name="middle_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->middle_name, ENT_QUOTES, 'UTF-8');?>
">
			</div>
			<div class="form-group col-md-5 col-sm-9">
				<label for="last-name">Last Name:</label>
						<input type=" text" id="last-name" class="form-control" name="last_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->last_name, ENT_QUOTES, 'UTF-8');?>
">
			</div>
			<div class="form-group col-md-2 col-sm-3">
				<label for="last-name">Birthdate:</label>
				<input type="text" class="form-control datepicker" name="date_of_birth"
					value="<?php echo htmlspecialchars(display_date($_smarty_tpl->tpl_vars['patient']->value->date_of_birth), ENT_QUOTES, 'UTF-8');?>
" />
			</div>
		</div>



		<!-- diet info section -->
		<div class="row form-header">
			<h2>Diet Info</h2>
		</div>
		<div class="row">

			<div class="col-lg-6 col-md-12">
				<label for="food-allergies">Food Allergies:</label>		
				<select id="food-allergies" name="allergies[]" multiple>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allergies']->value, 'allergy');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['allergy']->value) {
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allergy']->value->id, ENT_QUOTES, 'UTF-8');?>
"
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patientAllergies']->value, 'pa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pa']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['allergy']->value->id == $_smarty_tpl->tpl_vars['pa']->value->id) {?> selected<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allergy']->value->name, ENT_QUOTES, 'UTF-8');?>

					</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			
			<div class="form-group col-lg-6 col-md-12">
				<label for="food-dislikes">Food dislikes or intolerances:</label>
				<select id="food-dislikes" name="dislikes[]" multiple>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dislikes']->value, 'dislike');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dislike']->value) {
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dislike']->value->id, ENT_QUOTES, 'UTF-8');?>
"
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patientDislikes']->value, 'pd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pd']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['dislike']->value->id == $_smarty_tpl->tpl_vars['pd']->value->id) {?> selected<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dislike']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
				<input type="hidden" name="dislike">
			</div>

		</div>
		<!-- /diet info section -->



		<!-- Adaptive Equipment Section -->
<!-- 		<div class="form-row">
			<div class="form-group col-lg-6 col-md-12">
				<label for="adaptive-equipment">Adaptive Equipment:</label>
				<input type="text" value="" name="adaptive_equipment" id="adaptive-equipment" class="form-control">
			</div> -->

			<!-- Supplements Section -->
<!-- 			<div class="form-group col-lg-6 col-md-12">
				<label for="supplements">Supplements:</label>
				<input type="text" value="" name="supplements" id="supplements" class="form-control">
			</div>
				
		</div> -->


		
		<div class="accordion" id="accordion">
			<!-- special requests section -->
			<div class="card">
				<div class="card-header" id="heading1">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1"><i class="fa fa-plus mr-3"></i>Special Requests</button>
					</h2>
				</div>
				<div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<label for="breakfast-special-requests">Breakfast</label>
								<select name="breakfast_special_requests[]" id="breakfast-special-requests" class="special-request" multiple>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['specialRequests']->value, 'sr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sr']->value) {
?>
									<option 
										value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sr']->value->id, ENT_QUOTES, 'UTF-8');?>
"
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breakfast_spec_req']->value, 'bsr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bsr']->value) {
?>
											<?php if ($_smarty_tpl->tpl_vars['sr']->value->id == $_smarty_tpl->tpl_vars['bsr']->value->id) {?> selected<?php }?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sr']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
								
							</div>
							<div class="col-md-4">
								<label for="lunch-special-requests">Lunch</label>
								<select name="lunch_special_requests[]" id="lunch-special-requests" class="special-request" multiple>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['specialRequests']->value, 'sr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sr']->value) {
?>
									<option 
										value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sr']->value->id, ENT_QUOTES, 'UTF-8');?>
"
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lunch_spec_req']->value, 'lsr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lsr']->value) {
?>
											<?php if ($_smarty_tpl->tpl_vars['sr']->value->id == $_smarty_tpl->tpl_vars['lsr']->value->id) {?> selected<?php }?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sr']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="col-md-4">
								<label for="dinner-special-requests">Dinner</label>
								<select name="dinner_special_requests[]" id="dinner-special-requests" class="special-request" multiple>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['specialRequests']->value, 'sr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sr']->value) {
?>
									<option 
										value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sr']->value->id, ENT_QUOTES, 'UTF-8');?>
"
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dinner_spec_req']->value, 'dsr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dsr']->value) {
?>
											<?php if ($_smarty_tpl->tpl_vars['sr']->value->id == $_smarty_tpl->tpl_vars['dsr']->value->id) {?> selected<?php }?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sr']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>

						</div>
						
					</div>
				</div>
			</div>
			<!-- /special requests section -->

			<!-- beverages section -->
			<div class="card">
				<div class="card-header" id="heading2">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"><i class="fa fa-plus mr-3"></i>Beverages</button>
					</h2>
				</div>
				<div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<label for="breakfast-beverages">Breakfast</label>
								<select name="breakfast_beverages[]" id="breakfast-beverages" class="beverages" multiple>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['beverages']->value, 'bev');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bev']->value) {
?>
									<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bev']->value->id, ENT_QUOTES, 'UTF-8');?>
"
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breakfast_beverages']->value, 'bb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bb']->value) {
?>
											<?php if ($_smarty_tpl->tpl_vars['bev']->value->id == $_smarty_tpl->tpl_vars['bb']->value->beverage_id) {?> selected <?php }?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bev']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="col-md-4">
								<label for="lunch-beverages">Lunch</label>
								<select name="lunch_beverages[]" id="lunch-beverages" class="beverages" multiple>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['beverages']->value, 'bev');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bev']->value) {
?>
									<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bev']->value->id, ENT_QUOTES, 'UTF-8');?>
"
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lunch_beverages']->value, 'lb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lb']->value) {
?>
											<?php if ($_smarty_tpl->tpl_vars['bev']->value->id == $_smarty_tpl->tpl_vars['lb']->value->beverage_id) {?> selected <?php }?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bev']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="col-md-4">
								<label for="dinner-beverages">Dinner</label>
								<select name="dinner_beverages[]" id="dinner-beverages" class="beverages" multiple>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['beverages']->value, 'bev');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bev']->value) {
?>
									<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bev']->value->id, ENT_QUOTES, 'UTF-8');?>
"
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dinner_beverages']->value, 'db');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['db']->value) {
?>
											<?php if ($_smarty_tpl->tpl_vars['bev']->value->id == $_smarty_tpl->tpl_vars['db']->value->beverage_id) {?> selected <?php }?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bev']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>

						</div>
						
					</div>
				</div>
			</div>
			<!-- /beverages section -->

			<!-- snacks section -->
<!-- 			<div class="card">
				<div class="card-header" id="heading3">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"><i class="fa fa-plus mr-3"></i>Snacks</button>
					</h2>
				</div>
				<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<label for="breakfast-snacks">Breakfast</label>
								<input type="text" name="breakfast_snacks" id="breakfast-snacks" class="form-control">
							</div>
							<div class="col-md-4">
								<label for="lunch-snacks">Lunch</label>
								<input type="text" name="lunch_snacks" id="lunch-snacks" class="form-control">
							</div>
							<div class="col-md-4">
								<label for="dinner-snacks">Dinner</label>
								<input type="text" name="dinner_snacks" id="dinner-snacks" class="form-control">
							</div>

						</div>
						
					</div>
				</div>
			</div>
 -->			<!-- /snacks section -->
		</div>



		<!-- diet order section-->
		<div class="row form-header">
			<h2>Diet Order</h2>
		</div>
		
		<!-- regular -->
		<div class="form-check form-check-inline">	
			<input id="regular" class="form-check-input" type="checkbox" name="diet_order[]" value="Regular" <?php if (in_array("=Regular",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>> 
			<label class="form-check-label" for="regular"> Regular</label>			
		</div>
		<!-- /regular -->

		<!-- aha/cardiac -->
		<div class="form-check form-check-inline">
			<input id="aha-cardiac" class="form-check-input" type="checkbox" name="diet_order[]" value="AHA/Cardiac" <?php if (in_array("AHA/Cardiac",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>  
			<label class="form-check-label" for="aha-cardiac"> AHA/Cardiac </label>
		</div>
		<!-- /aha/cardiac -->

		<!-- no added salt -->
		<div class="form-check form-check-inline">
			<input type="checkbox" id="no-added-salt" class="form-check-input" name="diet_order[]" value="No Added Salt" <?php if (in_array("No Added Salt",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>  
			<label class="form-check-label" for="no-added-salt"> No Added Salt </label>
		</div>
		<!-- /no added salt -->

		<!-- rcs -->
		<div class="form-check form-check-inline">
			<input type="checkbox" id="rcs" class="form-check-input" name="diet_order[]" value="RCS" <?php if (in_array("RCS",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>
			<label class="form-check-label" for="rcs"> RCS</label> 
		</div>
		<!-- /rcs -->

		<!-- 2 gram na -->
		<div class="form-check form-check-inline">				
			<input type="checkbox" id="2-gram-na" class="form-check-input" name="diet_order[]" value="2 gram Na" <?php if (in_array("2 gram Na",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>
			<label class="form-check-label" for="2-gram-na"> 2 gram Na </label> 
		</div>
		<!-- /2 gram na -->

		<!-- renal -->
		<div class="form-check form-check-inline">
			<input type="checkbox" id="renal" class="form-check-input" name="diet_order[]" value="Renal" <?php if (in_array("Renal",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>
			<label class="form-check-label" for="renal"> Renal</label> 
		</div>	
		<!-- /renal -->			

		<!-- gluten restricted -->
		<div class="form-check form-check-inline">
			<input type="checkbox" id="gluten-restricted" class="form-check-input" name="diet_order[]" value="Gluten Restricted" <?php if (in_array("Gluten Restricted",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>  
			<label class="form-check-label" for="gluten-restricted"> Gluten Restricted </label>
		</div>
		<!-- /gluten restricted -->

		<!-- fortified/high calorie -->
		<div class="form-check form-check-inline">
			<input type="checkbox" id="fortified-high-calorie" class="form-check-input" name="diet_order[]" value="Fortified/High Calorie" <?php if (in_array("Fortified/High Calorie",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>  
			<label class="form-check-label" for="fortified-high-calorie"> Fortified/High Calorie </label>
		</div>
		<!-- /fortified/high calorie -->
		<div class="form-group mt-4">
			<label for="other-diet-orders">Other Diet Orders:</label>
			<input type="text" id="other-diet-orders" class="form-control" name="diet_order[]" class="other-input checkbox-input" placeholder="Enter other diet orders..." value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dietOrder']->value['other'], ENT_QUOTES, 'UTF-8');?>
">
		</div>


		<!-- Texture Section -->
		<div class="row form-header">
			<h2>Texture</h2>
		</div>

		<!-- regular -->
		<div class="form-check form-check-inline">
			<input type="checkbox" id="texture-regular" class="form-check-input" name="texture[]" value="Regular" <?php if (in_array("Regular",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> checked<?php }?>>
			<label for="texture-regular" class="form-check-label">Regular</label>
		</div>
		<!-- /regular -->

		<!-- easy to chew -->
		<div class="form-check form-check-inline">
			<input type="checkbox" id="easy-to-chew" class="form-check-label" name="texture[]" value="Easy to Chew" <?php if (in_array('Easy to Chew',$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> checked<?php }?>>
			<label for="easy-to-chew" class="form-check-label"> Easy to Chew</label>	
		</div>
		<!-- /easy to chew -->
			
		<!-- puree -->
		<div class="form-check form-check-inline">
			<input type="checkbox" id="puree" class="form-check-input" name="texture[]" value="Puree" <?php if (in_array('Puree',$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> checked<?php }?>>
			<label for="puree" class="form-check-label"> Puree</label>
		</div>
		<!-- /puree -->
			
		<!-- soft & bite sized -->
		<div class="form-check form-check-inline">
			<input type="checkbox" id="soft-bite-sized" class="form-check-input" name="texture[]" value="Soft & Bite Sized" <?php if (in_array('Soft & Bite Sized',$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> checked<?php }?>>
			<label for="soft-bite-sized" class="form-check-label"> Soft &amp; Bite Sized</label>
		</div>
		<!-- /soft & bite sized  -->

		<!-- minced & moist -->
		<div class="form-check form-check-inline">
			<input type="checkbox" id="minced-moist" name="texture[]" value="Minced & Moist" <?php if (in_array('Minced & Moist',$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> checked<?php }?>>
			<label for="minced-moist" class="form-check-label"> Minced &amp; Moist</label>
		</div>
		<!-- /minced & moist  -->

		<!-- chopped -->
		<div class="form-check form-check-inline">
			<input type="checkbox" id="chopped" class="form-check-input" name="texture[]" value="Chopped" <?php if (in_array('Chopped',$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> checked<?php }?>>
			<label for="chopped" class="form-check-label"> Chopped</label>
		</div>
		<!-- /chopped  -->

		<!-- chopped meat -->
		<div class="form-check form-check-inline">
			<input type="checkbox" id="chopped-meat" class="form-check-input" name="texture[]" value="Chopped Meat" <?php if (in_array('Chopped Meat',$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> checked<?php }?>>
			<label for="chopped-meat" class="form-check-label"> Chopped Meat</label>
		</div>
		<!-- /chopped meat  -->

		<!-- tube feeding -->
		<div class="form-check form-check-inline">
			<input type="checkbox" id="tube-feeding" class="form-check-input" name="texture[]" value="Tube Feeding" <?php if (in_array('Tube Feeding',$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> checked<?php }?>>
			<label for="tube-feeding" class="form-check-label"> Tube Feeding</label>
		</div>
		<!-- /tube feeding  -->


		<div class="row form-group mt-4">
			<div class="col-md-4">
				<select class="form-control" id="liquid" name="texture[]" id="">
					<option value="">Select Liquid Type...</option>
					<option value="Nectar Thick Liquids" <?php if (in_array("Nectar Thick Liquids",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Nectar Liquid</option>
					<option value="Honey Thick Liquids" <?php if (in_array("Honey Thick Liquids",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Honey Liquid</option>
					<option value="Pudding Thick Liquids" <?php if (in_array("Pudding Thick Liquids",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Pudding Liquid</option>
					<option value="Clear Liquid" <?php if (in_array("Clear Liquid",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Clear Liquid</option>
					<option value="Full Liquid" <?php if (in_array("Full Liquid",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Full Liquid</option>
					<option value="Fluid Restriction" <?php if (in_array("Fluid Restriction",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Fluid Restriction</option>
					<option value="Liquidised" <?php if (in_array("Liquidised",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Liquidised</option>
					<option value="Slightly Thick" <?php if (in_array("Slightly Thick",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Slightly Thick</option>
					<option value="Mildly Thick" <?php if (in_array("Mildly Thick",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Mildly Thick</option>
					<option value="Moderately Thick" <?php if (in_array("Moderately Thick",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Moderately Thick</option>
					<option value="Extremely Thick" <?php if (in_array("Extremely Thick",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Extremely Thick</option>
					<option value="Other" <?php if (in_array("Other",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Other</option>
				</select>
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control" maxlength="25" name="texture[]" placeholder="Enter other texture info..." value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textures']->value['other'], ENT_QUOTES, 'UTF-8');?>
">
			</div>
		</div>

		<!-- Other Section -->
		<div class="form-header">
			<h2>Other</h2>
		</div>

		<div class="row">
			
			<div class="col-md-5 col-sm-12">
				<!-- tube feeding -->
				<div class="form-check form-check-inline">
					<input type="checkbox" id="tube-feeding" class="form-check-input" name="other[]" value="Tube Feeding" <?php if (in_array("Isolation",$_smarty_tpl->tpl_vars['other']->value['standard'])) {?> checked<?php }?>>
					<label for="tube-feeding" class="form-check-label"> Tube Feeding</label>
				</div>
				<!-- /tube feeding -->

				<!-- isolation -->
				<div class="form-check form-check-inline">
					<input type="checkbox" id="isolation" class="form-check-input" name="other[]" value="Isolation" <?php if (in_array("Isolation",$_smarty_tpl->tpl_vars['other']->value['standard'])) {?> checked<?php }?>>
					<label for="isolation" class="form-check-label"> Isolation</label>
				</div>
				<!-- /isolation -->

				<!-- fluid restriction -->
				<div class="from-check form-check-inline">
					<input type="checkbox" id="fluid-restriction" class="form-check-input" name="other[]" value="Fluid Restriction" <?php if (in_array("Fluid Restriction",$_smarty_tpl->tpl_vars['other']->value['standard'])) {?> checked<?php }?>>
					<label for="fluid-restriction" class="form-check-label"> Fluid Restriction</label>
					<!-- fluid restriction -->
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<input type="text" class="form-control" name="other[]" value="Fluid Restriction Info" placeholder="Enter fluid restriction info">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- portion size -->
				<div class="font-weight-bold">Portion Size:</div>
				<div class="form-check form-check-inline">
					<input type="radio" id="portion-small" class="form-check-input" name="portion_size" value="Small" <?php if ($_smarty_tpl->tpl_vars['patientInfo']->value->portion_size == "Small") {?> checked<?php }?>>
					<label for="portion-small" class="form-check-label">Small</label>
				</div>

				<div class="form-check form-check-inline">
					<input type="radio" id="portion-regular" class="form-check-input" name="portion_size" value="Regular" <?php if ($_smarty_tpl->tpl_vars['patientInfo']->value->portion_size == "Regular") {?> checked<?php } elseif ($_smarty_tpl->tpl_vars['patientInfo']->value->portion_size == "Medium") {?> checked<?php } elseif (!isset($_smarty_tpl->tpl_vars['patientInfo']->value->portion_size)) {?> checked<?php }?>>
					<label for="portion-regular" class="form-check-label"> Regular</label>
				</div>
					
				<div class="form-check form-check-inline">
					<input type="radio" id="portion-large" class="form-check-input" name="portion_size" value="Large" <?php if ($_smarty_tpl->tpl_vars['patientInfo']->value->portion_size == "Large") {?> checked<?php }?>>
					<label for="portion-large" class="form-check-label">Large</label>
				</div>
				<!-- /portion size -->
			</div>
		</div>


		<div class="row text-right my-4">
			<div class="col-md-12">
				<button type="button" class="btn btn-secondary" onClick="history.go(-1)">Cancel</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</div>

	</form>
</div>

<?php }
}
