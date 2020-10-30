<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-23 09:45:51
  from '/var/www/html/aptitudecare/dev/modules/Activities/Views/activities/activity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef23fcfb1a812_90428534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2c9420bc1e58b4bc777de22f1a9b8e154d4c30d' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Activities/Views/activities/activity.tpl',
      1 => 1592934348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef23fcfb1a812_90428534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="container">
	<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headerTitle']->value, ENT_QUOTES, 'UTF-8');?>
</h1>

	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
		<input type="hidden" name="module" value="Activities">
		<input type="hidden" name="page" value="activities">
		<input type="hidden" name="action" value="save_activity">
		<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="activity_id" id="activity-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="current_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">

		<!-- Display message for monthly recurring activities -->
		<?php if ($_smarty_tpl->tpl_vars['activity']->value->repeat_week != '') {?>
		<div class="row text-center my-4">
			<div class="col-sm text-center py-2 mx-2 bg-warning">
				This activity is scheduled to recur on week <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->repeat_week, ENT_QUOTES, 'UTF-8');?>
 of each month.
			</div>
		</div>	
		<!-- /Display message for monthly recurring activities -->

		<!-- Display message for daily recurring activities -->
		<?php } elseif ($_smarty_tpl->tpl_vars['activity']->value->daily != 0 && $_smarty_tpl->tpl_vars['activity']->value->daily != '') {?>
		<div class="row text-center my-4">
			<div class="col-sm text-center py-2 mx-2 bg-warning">
				This is a daily recurring activity<?php if ($_smarty_tpl->tpl_vars['activity']->value->time_start != '') {?> at <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->time_start,"%l:%M %P"), ENT_QUOTES, 'UTF-8');
}?>
			</div>
		</div>
		<!-- /Display message for daily recurring activities -->

		<!-- Display message for weekly recurring activities -->
		<?php } elseif ($_smarty_tpl->tpl_vars['activity']->value->repeat_weekday !== '') {?>
		<div class="row text-center my-4">
			<div class="col-sm text-center py-2 mx-2 bg-warning">
				This activity is scheduled to recur every <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->date_start,"%A"), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['activity']->value->time_start != '') {?> at <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->time_start,"%l:%M %p"), ENT_QUOTES, 'UTF-8');
}?>
			</div>
		</div>
		<?php }?>
		<!-- /Display message for weekly recurring activities -->


		<!-- Change all future occurances of an activity -->
		<?php if ($_smarty_tpl->tpl_vars['activity']->value->repeat_week != '' || $_smarty_tpl->tpl_vars['activity']->value->repeat_weekday != '' || $_smarty_tpl->tpl_vars['activity']->value->daily) {?>
		<div class="row">
			<div class="col-12 mb-3 form-check">
				<input type="checkbox" name="change_all" value="1" id="change-all" checked> Change all future occurances of this activity</td>
			</div>	
		</div>
		<?php }?>
		<!-- /Change all future occuances of an activity -->

		<!-- Select start date -->
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label for="activity-start">Start Date:</label>
					<div class="input-group date">
						<input type="text" id="activity-start" class="form-control datepicker" name="date_start" value="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->date_start,'%d %B, %Y'), ENT_QUOTES, 'UTF-8');?>
">
					</div>
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label for="activity-time">Start Time:</label>
					<div class="input-group time">
						<input type="text" id="activity-time" class="form-control timepicker" name="time_start" value="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->time_start,'%l:%M %p'), ENT_QUOTES, 'UTF-8');?>
">
					</div>
				</div>
			</div>
			<!-- repeat select box -->
			<div class="col-4">
				<label for="repeat-type">Repeat:</label>
				<select name="repeat_type" class="custom-select" id="repeat-type">
					<option value="">None</option>
					<option value="daily" <?php if ($_smarty_tpl->tpl_vars['activity']->value->daily != '') {?> selected<?php }?>>Daily</option>
					<option value="weekly" <?php if ($_smarty_tpl->tpl_vars['activity']->value->repeat_weekday != '') {?> selected<?php }?>>Weekly</option>
					<option value="monthly" <?php if ($_smarty_tpl->tpl_vars['activity']->value->repeat_week != '') {?> selected<?php }?>>Monthly</option>
				</select>
			</div>
			<!-- /repeat select box -->
		</div>
		<!-- /Select start date -->

		<div class="row">
			<div class="col-12">
				<!-- all day -->
				<div class="col-3 form-check">				
					<input class="form-check-input" type="checkbox" value="1" id="all-day" name="all_day" <?php if ($_smarty_tpl->tpl_vars['activity']->value->all_day) {?>checked<?php }?>>
					<label for="all-day" class="form-check-label">All day</label>
				</div>
				<!-- /all day -->
			</div>
		</div>


		
		<div class="row mt-4 input-group">
			<!-- activity name -->
			<div class="col-12">
				<label for="activity-description">Activity:</label>
				<input type="text" class="form-control"  name="description" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->description, ENT_QUOTES, 'UTF-8');?>
" id="activity-description" size="40">
			</div>
			<!-- activity name -->

		</div>


		<div class="row mt-5">
			<div class="col-4">
				<button type="button" id="delete" class="btn btn-danger delete" data-target="#deleteModal" data-toggle="modal">Delete</button>
			</div>
			<div class="col-8 text-right">
				<input type="button" class="btn btn-secondary" value="Cancel" onclick="history.go(-1)">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</div>


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">DELETE ACTIVITY</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Are you sure you want to do this? Deleting the activity cannot be undone. Please confirm that you want to delete this activity.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" id="deleteActivity" type="button">Yes, Delete</button>
				<button class="btn btn-secondary" type="button" data-dismiss="modal">No, Do not Delete</button>
			</div>
		</div>
	</div>	
</div>

<?php echo '<script'; ?>
 type="text/javascript">	
	$('#deleteActivity').click(function(e) {
		var id = $('#activity-id').val();
		$.ajax({
			type: 'post',
			url: SITE_URL,
			data: {
				module: 'Activities',
				page: 'activities',
				action: 'deleteActivity',
				id: id
			}, success: function(response) {
				window.location.href = SITE_URL + '/?module=Activities&page=activities';
			}
		});
	});

	$('.datepicker').pickadate();
	$('.timepicker').pickatime();

<?php echo '</script'; ?>
>

<?php }
}
