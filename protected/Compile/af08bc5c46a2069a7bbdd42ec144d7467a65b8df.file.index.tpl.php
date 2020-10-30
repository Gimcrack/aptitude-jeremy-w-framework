<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 01:03:17
         compiled from "/var/www/html/riverside_dev/modules/Dietary/Views/dietary/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7618933925c4a6055311b84-35153038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af08bc5c46a2069a7bbdd42ec144d7467a65b8df' => 
    array (
      0 => '/var/www/html/riverside_dev/modules/Dietary/Views/dietary/index.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7618933925c4a6055311b84-35153038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'SITE_URL' => 0,
    'location' => 0,
    'current_url' => 0,
    'currentPatients' => 0,
    'patient' => 0,
    'k' => 0,
    'selectedLocation' => 0,
    'dietaryMenu' => 0,
    'modEnabled' => 0,
    'FRAMEWORK_IMAGES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4a6055328828_32013808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4a6055328828_32013808')) {function content_5c4a6055328828_32013808($_smarty_tpl) {?>
<script type="text/javascript">
	$(document).ready(function() {
		$("#location").change(function() {
			var location = $("#location option:selected").val();
			window.location.href = SITE_URL + "/?module=Dietary&location=" + location;
		});

		$(".add-patient").on("click", function (e) {
			e.preventDefault();
			var roomNumber = $(this).next().val();
			var location = $("#location").val();
			window.location.href = SITE_URL + "/?module=Dietary&page=patient_info&action=add_patient&location=" + location + "&number=" + roomNumber;
		});

		$(".delete-patient").on("change", function() {
			$(".add-patient").on("click", function (e) {
				e.preventDefault();
				var roomNumber = $(this).next().val();
				var location = $("#location").val();
				window.location.href = SITE_URL + "/?module=Dietary&page=patient_info&action=add_patient&location=" + location + "&number=" + roomNumber;
			});
		});

		$(".delete-patient").on("click", function(e) {
			e.preventDefault();
			var deleteClass = $(this).children("img").attr("class");
			var dataRow = $(this).parent().parent();
			var item = $(this);
			$("#dialog").dialog({
				buttons: {
					"Confirm": function() {
						var row = item.children().next($(".public-id"));
						var roomNumber = item.find(".room-number").val();
						var id = row.val();

						$.ajax({
							type: 'post',
							url: SITE_URL,
							data: {
								page: "Schedules",
								action: 'dischargePatient',
								id: id,
							},
							success: function() {
								$("."+deleteClass).empty();
								$("."+deleteClass).first().html('<input type="button" class="add-patient" value="Add Patient"><input type="hidden" class="room" value="' + roomNumber + '">');
								//Have to rebind add-patient
								$(".add-patient").on("click", function (e) {
									e.preventDefault();
									var roomNumber = $(this).next().val();
									var location = $("#location").val();
									window.location.href = SITE_URL + "/?module=Dietary&page=patient_info&action=add_patient&location=" + location + "&number=" + roomNumber;
								});
								// need to add back in the add patient option
							}
						});
						$(this).dialog("close");

					},
					"Cancel": function() {
						$(this).dialog("close");
					}
				}
			});
		});


		$("#tray-card-select-date").on("click", function(e) {
			e.preventDefault();
			var url = $(this).attr("href");
			$("#tray-card-dialog").dialog({
				buttons: {
					"Submit": function() {
						var selectedDate = $("#selected-date").val();
						window.open(url + "&date=" + selectedDate, '_blank');
						$(this).dialog("close");
					}
				}
			});
		});

		$("#meal-order-form-select-date").on("click", function(e) {
			e.preventDefault();
			var url = $(this).attr("href");
			$("#meal-order-dialog").dialog({
				buttons: {
					"Submit": function() {
						var selectedDate = $("#form-date").val();
						window.open(url + "&start_date=" + selectedDate, '_blank');
						$(this).dialog("close");
					}
				}
			});
		});

	});
</script>


<div class="row"">
	<div class="col-lg-4">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("module"), ENT_QUOTES, 'ISO-8859-1');?>

	</div>
	<div class="col-lg-4 text-center">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("selectLocation"), ENT_QUOTES, 'ISO-8859-1');?>

	</div>

	<div class="col-lg-4">
		<a id="tray-card-select-date" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Dietary&amp;page=patient_info&amp;action=meal_tray_card&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
&amp;patient=all&amp;pdf=true" class="btn btn-primary pull-right">Tray Cards</a>

		<a id="meal-order-form-select-date" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Dietary&amp;page=menu&amp;action=meal_order_form&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
&amp;pdf=true" class="btn btn-primary pull-right" target="_blank">Meal Order Forms</a>
	</div>
</div>

<h1>Current Patients</h1>
<input type="hidden" id="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">
<input type="hidden" name="currentUrl" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<table id="patient-info">
	<tr>
		<th>Room</th>
		<th>Patient Name</th>
		<th>&nbsp;</th>
		<th>&nbsp;</th>
		<th style="width: 20%">&nbsp;</th>
		<th>Room</th>
		<th>Patient Name</th>
		<th>&nbsp;</th>
		<th>&nbsp;</th>
	</tr>
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
		<td class="room-number" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->number, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->number, ENT_QUOTES, 'ISO-8859-1');?>
</td>

		<?php if (get_class($_smarty_tpl->tpl_vars['patient']->value)=="Patient") {?>
		<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->last_name, ENT_QUOTES, 'ISO-8859-1');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->first_name, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dietaryMenu']->value->menu($_smarty_tpl->tpl_vars['patient']->value,$_smarty_tpl->tpl_vars['selectedLocation']->value), ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
			<?php if (!$_smarty_tpl->tpl_vars['modEnabled']->value) {?>
			<a href="#" class="delete-patient">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/delete.png" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
" style="position: relative; top: 7px;" alt="">
				<input type="hidden" name="public_id" class="public-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">
				<input type="hidden" name="room_number" class="room-number" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->number, ENT_QUOTES, 'ISO-8859-1');?>
">
			</a>
				<input type="hidden" class="patient-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">
			<?php }?>
		</td>
		<?php } else { ?>

		<td>
			<?php if (!$_smarty_tpl->tpl_vars['modEnabled']->value) {?>
			<input type="button" class="add-patient" value="Add Patient">
			<input type="hidden" class="room" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->number, ENT_QUOTES, 'ISO-8859-1');?>
">
			<?php }?>
		</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<?php }?>

	<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['iteration'] % 2)) {?>
		</tr>
		<tr>
	<?php } else { ?>
		<td>&nbsp;</td>
	<?php }?>
	<?php } ?>
	</tr>
</table>


<div id="dialog" title="Confirmation Required">
	<p>Are you sure you want to delete this patient? This cannot be undone.</p>
</div>

<div id="tray-card-dialog" title="Select Date">
	<p>Select the date for which you would like to print the tray cards.</p>
	<input type="text" id="selected-date" class="date-picker">
</div>

<div id="meal-order-dialog" title="Select Date">
	<p>Select the date for which you would like to print the meal order form.</p>
	<input type="text" id="form-date" class="date-picker">
</div>
<?php }} ?>
