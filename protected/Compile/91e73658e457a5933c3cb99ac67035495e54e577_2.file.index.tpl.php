<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-06 09:53:24
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/dietary/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f036514328d26_23985000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91e73658e457a5933c3cb99ac67035495e54e577' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/dietary/index.tpl',
      1 => 1594058000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f036514328d26_23985000 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 text-center">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("selectLocation"), ENT_QUOTES, 'UTF-8');?>

		</div>
	</div>
	<div class="row">
		<div class="col-lg-2 mt-1">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=patient_info&amp;action=meal_tray_card&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;patient=all&amp;pdf=true"
				class="btn btn-primary text-white" target="_blank">Tray Cards</a>
		</div>
		<div class="col-lg-10 mt-1">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=menu&amp;action=meal_order_form&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;pdf=true"
				class="btn btn-primary text-white" target="_blank">Meal Order Forms</a>
		</div>
	</div>

	<h1 class="text-center">Current Residents</h1>
	<input type="hidden" id="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
	<input type="hidden" name="currentUrl" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">

	<div class="table-responsive">
		<table id="patient-info" class="table table-striped">
		    <thead class="thead-dark">
		      <tr>
		        <th scope="col">Room</th>
		        <th scope="col">Patient Name</th>
		        <th scope="col">&nbsp;</th>
		        <th scope="col">&nbsp;</th>
		        <th scope="col">&nbsp;</th>
		        <th scope="col">Room</th>
		        <th scope="col">Patient Name</th>
		        <th scope="col">&nbsp;</th>
		        <th scope="col">&nbsp;</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currentPatients']->value, 'patient', false, 'k', 'count', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['iteration']++;
?>
		        <td value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->number, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->number, ENT_QUOTES, 'UTF-8');?>
</td>

		        <?php if (get_class($_smarty_tpl->tpl_vars['patient']->value) == "Client") {?>
		        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->last_name, ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->first_name, ENT_QUOTES, 'UTF-8');?>
</td>
		        <td>
		          <div class="dropdown">
		            <button class="btn text-right" type="button" id="patientDietInfoDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-tools"></i></button>
		            <div class="dropdown-menu" aria-labelledby="patientDietInfoDropdown">
		              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=patient_info&amp;action=diet&amp;patient=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item">Edit Diet</a>
		              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=patient_info&amp;action=meal_tray_card&amp;patient=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;pdf=true" target="_blank" class="dropdown-item">Current Tray Card</a>
		              <!-- <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=patient_info&amp;action=traycard_options&amp;patient=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" id="selected-traycard" class="dropdown-item">Selected Tray Card</a> -->
		            </div>
		          </div>
		        </td>
		        <td>
		          <?php if (!$_smarty_tpl->tpl_vars['modEnabled']->value) {?>
		          <a href="#" class="delete-patient">
		            <button class="btn text-left" data-toggle="modal" data-target="#deleteModal" data-publicid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" type="button">
		              <i class="fas fa-trash"></i>
		            </button>           
		          </a>
		          <?php }?>
		        </td>
		        <?php } else { ?>

		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
		        <td><?php if (!$_smarty_tpl->tpl_vars['modEnabled']->value) {?>
		          <button class="btn text-left add-patient" type="button"><i class="fas fa-user-plus"></i></button>
		          <input type="hidden" class="room" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->number, ENT_QUOTES, 'UTF-8');?>
">
		          <?php }?>
		        </td>
		        <?php }?>

		      <?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['iteration'] : null) % 2)) {?>
		        </tr>
		        <tr>
		      <?php } else { ?>
		        <td>&nbsp;</td>
		      <?php }?>
		      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		      </tr>
		    </tbody>
		</table>
	</div>



</div>

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('deleteModal'), ENT_QUOTES, 'UTF-8');?>

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('selectDateModal'), ENT_QUOTES, 'UTF-8');?>

<?php }
}
