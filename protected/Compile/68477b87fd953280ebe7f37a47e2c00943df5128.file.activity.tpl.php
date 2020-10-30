<?php /* Smarty version Smarty-3.1.19, created on 2019-07-11 21:11:02
         compiled from "/var/www/html/aptitudecare/modules/Activities/Views/activities/activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12683882865c943bdf67ee03-27339343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68477b87fd953280ebe7f37a47e2c00943df5128' => 
    array (
      0 => '/var/www/html/aptitudecare/modules/Activities/Views/activities/activity.tpl',
      1 => 1553125343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12683882865c943bdf67ee03-27339343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c943bdf694a99_94343468',
  'variables' => 
  array (
    'headerTitle' => 0,
    'SITE_URL' => 0,
    'location' => 0,
    'activity' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c943bdf694a99_94343468')) {function content_5c943bdf694a99_94343468($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><script>
	$(document).ready(function() {
		// set max length
		var max_length = 25;
		$message = $("#activity-description").val();
		var messageLength = max_length - $message.length;

		// load in current characters when page loads
		$("#counter").html(messageLength);

		// run listen when key press
		whenkeydown(max_length);
		
		if ($("input.all-day-box").is(":checked")) {
			$("#time").hide();
		} else {
			$("#time").show();
		}
		
		$("#all-day").change(function() {
			if ($('input.all-day-box').is(':checked')) {
				$("#time").hide()	
			} else {
				$("#time").show();
			}
		});	



		$("#delete").click(function(e) {
			e.preventDefault();
			var activityId = $("#activity-id").val();

			$("#dialog").dialog({
				buttons: {
					"Confirm": function() {
						$.ajax({
							type: 'post',
							url: SITE_URL,
							data: {
								page: "activities",
								action: 'deleteId',
								id: activityId,
							},
							success: function() {
								window.location = SITE_URL + "/?module=Activities&page=activities";
							}
						});
						
					},
					"Cancel": function() {
						$(this).dialog("close");
					}
				}
			});
		});

	});

	$(function() {
		$(document).tooltip();
	});


	whenkeydown = function(max_length) {
		$("#activity-description").unbind().keypress(function() {

			// check if appropriate text area is being used
			if (document.activeElement.id == "activity-description") {

				// get the data in the field
				var text = $(this).val();

				//set number of characters
				var numOfChars = text.length;

				// set the chars left
				var charsLeft = max_length - numOfChars;

				// check if we are still within our max
				if (numOfChars <= max_length) {
					// set the length of text into the counter
					$("#counter").html(charsLeft);
				} else {
					// trim the string to the max chars
					$(this).val(text.substring(0, max_length));
				}
			}
		});
	}


</script>
<style type="text/css">
	.ml-10{
		margin-left: 10px;
	}
</style>

<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headerTitle']->value, ENT_QUOTES, 'UTF-8');?>
</h1>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
	<input type="hidden" name="page" value="activities">
	<input type="hidden" name="action" value="save_activity">
	<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
	<input type="hidden" name="activity_id" id="activity-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
	<input type="hidden" name="current_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<table class="center">

		<?php if ($_smarty_tpl->tpl_vars['activity']->value->repeat_week!='') {?>
		<tr>
			<td class="text-center text-strong" colspan="4">This activity is scheduled to recur on week <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->repeat_week, ENT_QUOTES, 'UTF-8');?>
 of each month.</td>
		</tr>
		<?php } elseif ($_smarty_tpl->tpl_vars['activity']->value->repeat_weekday!='') {?>
		<tr>
			<td colspan="4" class="text-center text-strong">This activity is scheduled to recur every <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->date_start,"%A"), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['activity']->value->time_start!='') {?> at <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->time_start,"%l:%M %p"), ENT_QUOTES, 'UTF-8');?>
<?php }?></td>
		</tr>
		<?php } elseif ($_smarty_tpl->tpl_vars['activity']->value->daily) {?>
		<tr>
			<td>This is a daily recurring activity<?php if ($_smarty_tpl->tpl_vars['activity']->value->time_start!='') {?> at <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->time_start,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
<?php }?></td>
		</tr>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['activity']->value->repeat_week!=''||$_smarty_tpl->tpl_vars['activity']->value->repeat_weekday!=''||$_smarty_tpl->tpl_vars['activity']->value->daily) {?>
			<tr>
				<td>&nbsp;</td>
				<td><input type="checkbox" name="change_all" value="1" id="change-all" checked> Change all future occurances of this activity</td>
			</tr>
		<?php }?>

		<tr>
			<td class="text-strong">Date:<input type="text" class="datepicker" name="date_start" value="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->date_start,'%D'), ENT_QUOTES, 'UTF-8');?>
" size="10"></td>
			<td class="text-strong" id="all-day">All day?
				<?php if ($_smarty_tpl->tpl_vars['activity']->value->all_day==1) {?>
					<input type="checkbox" name="all_day" value="true" checked class="all-day-box"/>
				<?php } else { ?>
					<input type="checkbox" name="all_day" value="false" class="all-day-box"/>
				<?php }?>
			</td>
			<td class="text-strong text-right" id="time">Time:<input type="text" class="timepicker" name="time_start" value="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->time_start,'%H:%M'), ENT_QUOTES, 'UTF-8');?>
" size="6"></td>
		</tr>
		<tr>
			<td class="text-strong">Activity:</td>
			<td colspan="2"><input type="text"  name="description" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->description, ENT_QUOTES, 'UTF-8');?>
" id="activity-description" size="40"></td>
		</tr>
		<tr>
			<td class="text-right text-grey" colspan="3">You have <span id="counter"></span> characters left.</td>
		</tr>
		<tr>
			<td class="text-strong">Repeat</td>
			<td>
				<select name="repeat_type" id="">
					<option value="">None</option>
					<option value="daily" <?php if ($_smarty_tpl->tpl_vars['activity']->value->daily) {?> selected<?php }?>>Daily</option>
					<option value="weekly" <?php if ($_smarty_tpl->tpl_vars['activity']->value->repeat_weekday!='') {?> selected<?php }?>>Weekly</option>
					
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>
				<input type="button" value="Cancel" onclick="history.go(-1)">
				<input type="button" id="delete" class="delete" value="Delete">
			</td>
			<td colspan="2" class="text-right"><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>



<div id="dialog" title="Confirmation Required">
	<p>Are you sure you want to delete this item? This cannot be undone.</p>
</div>

<?php }} ?>
