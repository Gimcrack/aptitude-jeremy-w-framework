<?php /* Smarty version Smarty-3.1.19, created on 2019-01-26 00:22:03
         compiled from "/var/www/html/synesis_dev/modules/Dietary/Views/patient_info/diet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18311164915c4ba82bd128f7-79900311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6215a8b7b378964705193e1245f16317958c764a' => 
    array (
      0 => '/var/www/html/synesis_dev/modules/Dietary/Views/patient_info/diet.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18311164915c4ba82bd128f7-79900311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'patient' => 0,
    'SITE_URL' => 0,
    'current_url' => 0,
    'allergies' => 0,
    'allergy' => 0,
    'dislikes' => 0,
    'dislike' => 0,
    'adaptEquip' => 0,
    'equip' => 0,
    'supplements' => 0,
    'supplement' => 0,
    'breakfast_spec_req' => 0,
    'req' => 0,
    'lunch_spec_req' => 0,
    'dinner_spec_req' => 0,
    'breakfast_beverages' => 0,
    'beverage' => 0,
    'lunch_beverages' => 0,
    'dinner_beverages' => 0,
    'am_snacks' => 0,
    'snack' => 0,
    'pm_snacks' => 0,
    'bedtime_snacks' => 0,
    'dietOrder' => 0,
    'textures' => 0,
    'other' => 0,
    'patientInfo' => 0,
    'JS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba82bd52ba3_58968236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba82bd52ba3_58968236')) {function content_5c4ba82bd52ba3_58968236($_smarty_tpl) {?><h1>Edit Diet <span class="text-24">for</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->fullName(), ENT_QUOTES, 'ISO-8859-1');?>
</h1>


<form class="form-inline" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
	<input type="hidden" name="page" value="PatientInfo" />
	<input type="hidden" name="action" value="saveDiet" />
	<input type="hidden" id="patient-id" name="patient" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" />
	<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />


	<div class="row">
		<div class="col-xs-12">
			Patient Info
		</div>
	</div>

	<div class="row">
		<div class="form-group">
			<label for="first-name">First Name:</label>
		</div>
	</div>
	<!-- Patient Info Section -->
	<div class="form-header">
		Patient Info
	</div>
	<div class="form-group">
		<label for="first-name" class="col-form-label col-2">First Name:</label>
		<input type="text" id="first-name" class="form-control" name="first_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->first_name, ENT_QUOTES, 'ISO-8859-1');?>
">
	</div>

	<div class="form-group">
		<label for="middle-name" class="col-form-label col-2">Middle Name:</label>
		<input type="text" id="middle-name" class="form-control" size="10" name="middle_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->middle_name, ENT_QUOTES, 'ISO-8859-1');?>
">
	</div>
	<div class="form-group">
		<label for="last-name" class="col-form-label col-2">Last Name:</label>
		<input type="text" id="last-name" class="form-control" name="last_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->last_name, ENT_QUOTES, 'ISO-8859-1');?>
">
	</div>
	<div class="form-group">
		<label for="last-name" class="col-form-label col-2">Birthdate:</label>
		<input type="text" class="form-control datepicker" size="10" name="date_of_birth" value="<?php echo htmlspecialchars(display_date($_smarty_tpl->tpl_vars['patient']->value->date_of_birth), ENT_QUOTES, 'ISO-8859-1');?>
" />
	</div>


	<!-- Diet Info Section -->
	<div class="form-header">
		Diet Info
	</div>
	<div class="form-group">
		<label for="food-allergies">Food Allergies:</label>
		<ul id="allergies">
			<?php if ($_smarty_tpl->tpl_vars['allergies']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['allergy'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['allergy']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allergies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['allergy']->key => $_smarty_tpl->tpl_vars['allergy']->value) {
$_smarty_tpl->tpl_vars['allergy']->_loop = true;
?>
				<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allergy']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</li>
				<?php } ?>
			<?php }?>
		</ul>
	</div>

	<!-- Food Dislikes or Intolerances section -->
	<div class="form-group">
		<label for="food-dislikes">Food dislikes or intolerances:</label>
		<ul id="dislikes">
			<?php if ($_smarty_tpl->tpl_vars['dislikes']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['dislike'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dislike']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dislikes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dislike']->key => $_smarty_tpl->tpl_vars['dislike']->value) {
$_smarty_tpl->tpl_vars['dislike']->_loop = true;
?>
				<li value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dislike']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dislike']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</li>
				<?php } ?>
			<?php }?>
		</ul>
	</div>

	<!-- Adaptive Equipment Section -->
	<div class="form-group">
		<label for="adaptive-equipment">Adaptive Equipment:</label>
		<ul id="adaptEquip">
			<?php if ($_smarty_tpl->tpl_vars['adaptEquip']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['equip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['equip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adaptEquip']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['equip']->key => $_smarty_tpl->tpl_vars['equip']->value) {
$_smarty_tpl->tpl_vars['equip']->_loop = true;
?>
				<li value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['equip']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['equip']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</li>
				<?php } ?>
			<?php }?>
		</ul>
	</div>

	<!-- Supplements Section -->
	<div class="form-group">
		<label for="supplements">Supplements:</label>
		<ul id="supplements">
			<?php if ($_smarty_tpl->tpl_vars['supplements']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['supplement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['supplements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplement']->key => $_smarty_tpl->tpl_vars['supplement']->value) {
$_smarty_tpl->tpl_vars['supplement']->_loop = true;
?>
				<li value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplement']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplement']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</li>
				<?php } ?>
			<?php }?>
		</ul>
	</div>


	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<!-- Special Requests Section -->
		<div class="panel panel-default">
	    	<div class="panel-heading" role="tab" id="headingOne">
	    		<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none;color:#000">
	      			<h4 class="panel-title">Special Requests</h4>
	      		</a>
	    	</div>
	    	<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
	      		<div class="panel-body">
	        		<div class="col-md-1">Breakfast:</div>
	        		<div class="col-md-3">
						<ul id="breakfast_specialrequest">
							<?php if ($_smarty_tpl->tpl_vars['breakfast_spec_req']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['req'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['req']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breakfast_spec_req']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['req']->key => $_smarty_tpl->tpl_vars['req']->value) {
$_smarty_tpl->tpl_vars['req']->_loop = true;
?>
							<li value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['req']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['req']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</li>
							<?php } ?>
							<?php }?>
						</ul>
	        		</div>
	        		<div class="col-md-1">Lunch:</div>
	        		<div class="col-md-3">
						<ul id="lunch_specialrequest">
							<?php if ($_smarty_tpl->tpl_vars['lunch_spec_req']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['req'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['req']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lunch_spec_req']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['req']->key => $_smarty_tpl->tpl_vars['req']->value) {
$_smarty_tpl->tpl_vars['req']->_loop = true;
?>
							<li value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['req']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['req']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</li>
							<?php } ?>
							<?php }?>
						</ul>
	        		</div>
	        		<div class="col-md-1">Dinner:</div>
	        		<div class="col-md-3">
						<ul id="dinner_specialrequest">
							<?php if ($_smarty_tpl->tpl_vars['dinner_spec_req']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['req'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['req']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dinner_spec_req']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['req']->key => $_smarty_tpl->tpl_vars['req']->value) {
$_smarty_tpl->tpl_vars['req']->_loop = true;
?>
							<li value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['req']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['req']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</li>
							<?php } ?>
							<?php }?>
						</ul>
	        		</div>
	      		</div>
	    	</div>


	    <!-- Beverages Section -->

		<!-- Beverages Section -->
		<div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingTwo">
		    	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="text-decoration:none;color:#000">
		      		<h4 class="panel-title">
		      			Beverages
		      		</h4>
		      	</a>
		    </div>
		    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
		      <div class="panel-body">
		        <div class="col-md-1">
		        	Breakfast:
		        </div>
		        <div class="col-md-3">
					<ul id="breakfast_beverages">
						<?php if ($_smarty_tpl->tpl_vars['breakfast_beverages']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['beverage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['beverage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breakfast_beverages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['beverage']->key => $_smarty_tpl->tpl_vars['beverage']->value) {
$_smarty_tpl->tpl_vars['beverage']->_loop = true;
?>
							<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['beverage']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</li>
							<?php } ?>
						<?php }?>
					</ul>
		        </div>
		        <div class="col-md-1">
		        	Lunch:
		        </div>
		        <div class="col-md-3">
					<ul id="lunch_beverages">
						<?php if ($_smarty_tpl->tpl_vars['lunch_beverages']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['beverage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['beverage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lunch_beverages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['beverage']->key => $_smarty_tpl->tpl_vars['beverage']->value) {
$_smarty_tpl->tpl_vars['beverage']->_loop = true;
?>
							<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['beverage']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</li>
							<?php } ?>
						<?php }?>
					</ul>
		        </div>
		        <div class="col-md-1">
		        	Dinner:
		        </div>
		        <div class="col-md-3">
					<ul id="dinner_beverages">
						<?php if ($_smarty_tpl->tpl_vars['dinner_beverages']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['beverage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['beverage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dinner_beverages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['beverage']->key => $_smarty_tpl->tpl_vars['beverage']->value) {
$_smarty_tpl->tpl_vars['beverage']->_loop = true;
?>
							<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['beverage']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</li>
							<?php } ?>
						<?php }?>
					</ul>
		        </div>
		    </div>
	  	</div>

		<!-- Snacks drop down section -->
	  	<div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingThree">
		    	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="text-decoration:none;color:#000">
		    	<h4 class="panel-title">Snacks
		    	</h4>
		     	</a>
		    </div>
		    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="panel-body">
		      	<div class="col-md-1">
		      		AM
	      		</div>
	      		<div class="col-md-3">
					<ul id="snackAM">
						<?php if ($_smarty_tpl->tpl_vars['am_snacks']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['snack'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['snack']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['am_snacks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['snack']->key => $_smarty_tpl->tpl_vars['snack']->value) {
$_smarty_tpl->tpl_vars['snack']->_loop = true;
?>
							<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</li>
							<?php } ?>
						<?php }?>
					</ul>
	      		</div>
	      		<div class="col-md-1">
	      			PM
	      		</div>
	      		<div class="col-md-3">
					<ul id="snackPM">
						<?php if ($_smarty_tpl->tpl_vars['pm_snacks']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['snack'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['snack']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pm_snacks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['snack']->key => $_smarty_tpl->tpl_vars['snack']->value) {
$_smarty_tpl->tpl_vars['snack']->_loop = true;
?>
							<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</li>
							<?php } ?>
						<?php }?>
					</ul>
	      		</div>
	      		<div class="col-md-1">
	      			Bedtime
	      		</div>
	      		<div class="col-md-3">
					<ul id="snackBedtime">
						<?php if ($_smarty_tpl->tpl_vars['bedtime_snacks']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['snack'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['snack']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bedtime_snacks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['snack']->key => $_smarty_tpl->tpl_vars['snack']->value) {
$_smarty_tpl->tpl_vars['snack']->_loop = true;
?>
							<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</li>
							<?php } ?>
						<?php }?>
					</ul>
	      		</div>
		      </div>
		    </div>
	  	</div>
	</div>
</div>


	<!-- Diet Order Section-->
	<div class="form-header2">Diet Order</div>
	<div class="checkbox">
		<label for="regular" class="checkbox-label">
			<input id="regular" class="checkbox" type="checkbox" name="diet_order[]" value="Regular" <?php if (in_array("Regular",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>
			Regular
		</label>
		<label for="aha-cardiac" class="checkbox-label">
			<input id="aha-cardiac" type="checkbox" name="diet_order[]" value="AHA/Cardiac" <?php if (in_array("AHA/Cardiac",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>
			AHA/Cardiac
		</label>
		<label class="checkbox-label">
			<input type="checkbox" name="diet_order[]" value="No Added Salt" <?php if (in_array("No Added Salt",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>
			No Added Salt
		</label>
		<label class="checkbox-label">
			<input type="checkbox" name="diet_order[]" value="Renal" <?php if (in_array("Renal",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>
			Renal
		</label>
		<label class="checkbox-label">
			<input type="checkbox" name="diet_order[]" value="2 gram Na" <?php if (in_array("2 gram Na",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>
			2 gram Na
		</label>
		<label class="checkbox-label">
			<input type="checkbox" name="diet_order[]" value="Fortified/High Calorie" <?php if (in_array("Fortified/High Calorie",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>
			Fortified/High Calorie
		</label>
		<label class="checkbox-label">
			<input type="checkbox" name="diet_order[]" value="RCS" <?php if (in_array("RCS",$_smarty_tpl->tpl_vars['dietOrder']->value['standard'])) {?> checked<?php }?>>
			RCS
		</label>
		<input type="text" name="diet_order[]" class="other-input checkbox-input" placeholder="Enter other diet orders..." style="width: 350px" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dietOrder']->value['other'], ENT_QUOTES, 'ISO-8859-1');?>
">
	</div>


	<!-- Texture Section -->
	<div class="form-header2">Texture</div>
	<div class="checkbox">
		<label for="" class="checkbox-label">
			<input type="checkbox" name="texture[]" value="Regular" <?php if (in_array('Regular',$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> checked<?php }?>>
			Regular
		</label>
		<label for="" class="checkbox-label">
			<input type="checkbox" name="texture[]" value="Mechanical Soft" <?php if (in_array('Mechanical Soft',$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> checked<?php }?>>
			Mechanical Soft
		</label>
		<label for="" class="checkbox-label">
			<input type="checkbox" name="texture[]" value="Puree" <?php if (in_array('Puree',$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> checked<?php }?>>
			Puree
		</label>
		<label for="" class="checkbox-label">
			<input type="checkbox" name="texture[]" value="Tube Feeding" <?php if (in_array('Tube Feeding',$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> checked<?php }?>>
			Tube Feeding
		</label>
		<label for="liquid" class="checkbox-label">Liquid:</label>
		<select name="texture[]" id="">
			<option value="">Select Liquid Type...</option>
			<option value="Nectar Thick Liquids" <?php if (in_array("Nectar Thick Liquids",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Nectar Liquid</option>
			<option value="Honey Thick Liquids" <?php if (in_array("Honey Thick Liquids",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Honey Liquid</option>
			<option value="Pudding Thick Liquids" <?php if (in_array("Pudding Thick Liquids",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Pudding Liquid</option>
			<option value="Clear Liquid" <?php if (in_array("Clear Liquid",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Clear Liquid</option>
			<option value="Full Liquid" <?php if (in_array("Full Liquid",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Full Liquid</option>
			<option value="Fluid Restriction" <?php if (in_array("Fluid Restriction",$_smarty_tpl->tpl_vars['textures']->value['standard'])) {?> selected<?php }?>>Fluid Restriction</option>
		</select>
		<input type="text" maxlength="25" name="texture[]" size="50" class="other-input" placeholder="Enter other texture info... (25 character limit)" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textures']->value['other'], ENT_QUOTES, 'ISO-8859-1');?>
">
	</div>

	<!-- Other Section -->
	<div class="form-header2">Other</div>
		<label for="" class="checkbox-label">
			<input type="checkbox" name="other[]" value="Isolation" <?php if (in_array("Isolation",$_smarty_tpl->tpl_vars['other']->value['standard'])) {?> checked<?php }?>>
			Isolation
		</label>
		<label for="" class="checkbox-label">
			<input type="checkbox" name="other[]" value="Fluid Restriction" <?php if (in_array("Fluid Restriction",$_smarty_tpl->tpl_vars['other']->value['standard'])) {?> checked<?php }?>>
			Fluid Restriction
		</label>
		<label for="" class="checkbox-label">
			<input type="text" name="other[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['other']->value['other'], ENT_QUOTES, 'ISO-8859-1');?>
">
			<!-- <input type="text" name="other[]" class="other-input" placeholder="Enter other order info..." value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['other']->value['other'], ENT_QUOTES, 'ISO-8859-1');?>
"> -->
		</label>

	<!-- Portion Size Section -->
		<label for="" class="checkbox-label">
			<input type="radio" name="portion_size" value="Small" <?php if ($_smarty_tpl->tpl_vars['patientInfo']->value->portion_size=="Small") {?> checked<?php }?>>
			Small
		</label>
		<label for="" class="checkbox-label">
			<input type="radio" name="portion_size" value="Regular" <?php if ($_smarty_tpl->tpl_vars['patientInfo']->value->portion_size=="Regular") {?> checked<?php } elseif ($_smarty_tpl->tpl_vars['patientInfo']->value->portion_size=="Medium") {?> checked<?php } elseif (!isset($_smarty_tpl->tpl_vars['patientInfo']->value->portion_size)) {?> checked<?php }?>>
			Regular
		</label>
		<label for="" class="checkbox-label">
			<input type="radio" name="portion_size" value="Large" <?php if ($_smarty_tpl->tpl_vars['patientInfo']->value->portion_size=="Large") {?> checked<?php }?>>
			Large
		</label>
	</div>

	<br>
	<br>
	<div class="text-right">
		<input type="submit" class="btn btn-info" value="Save">
	</div>

</form>

<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JS']->value, ENT_QUOTES, 'ISO-8859-1');?>
/diet.js"></script>
<?php }} ?>
