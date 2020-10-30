<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 13:44:06
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/dietary/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9408117405d787ad468e5a2-55101243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce2b9c9cc6abd70598eaa837687f80cc3bd6067' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/dietary/index.tpl',
      1 => 1588715042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9408117405d787ad468e5a2-55101243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d787ad46a13b0_76787249',
  'variables' => 
  array (
    'this' => 0,
    'SITE_URL' => 0,
    'location' => 0,
    'current_url' => 0,
    'currentPatients' => 0,
    'patient' => 0,
    'modEnabled' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d787ad46a13b0_76787249')) {function content_5d787ad46a13b0_76787249($_smarty_tpl) {?>
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
		      <?php  $_smarty_tpl->tpl_vars['patient'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['patient']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currentPatients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['patient']->key => $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['patient']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['patient']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['iteration']++;
?>
		        <td value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->number, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->number, ENT_QUOTES, 'UTF-8');?>
</td>

		        <?php if (get_class($_smarty_tpl->tpl_vars['patient']->value)=="Patient") {?>
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
		              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=patient_info&amp;action=traycard_options&amp;patient=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" id="selected-traycard" class="dropdown-item">Selected Tray Card</a>
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

		      <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['iteration'] % 2)) {?>
		        </tr>
		        <tr>
		      <?php } else { ?>
		        <td>&nbsp;</td>
		      <?php }?>
		      <?php } ?>
		      </tr>
		    </tbody>
		</table>
	</div>



</div>

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('deleteModal'), ENT_QUOTES, 'UTF-8');?>

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('selectDateModal'), ENT_QUOTES, 'UTF-8');?>

<?php }} ?>
