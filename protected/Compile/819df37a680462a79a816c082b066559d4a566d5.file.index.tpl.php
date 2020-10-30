<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 23:51:19
         compiled from "/var/www/html/synesis_dev/modules/Activities/Views/activities/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10548854245c4ba0f7553836-21947502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '819df37a680462a79a816c082b066559d4a566d5' => 
    array (
      0 => '/var/www/html/synesis_dev/modules/Activities/Views/activities/index.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10548854245c4ba0f7553836-21947502',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IMAGES' => 0,
    'this' => 0,
    'SITE_URL' => 0,
    'location' => 0,
    'startDate' => 0,
    'endDate' => 0,
    'previousWeek' => 0,
    'nextWeek' => 0,
    'activitiesArray' => 0,
    'date' => 0,
    'activities' => 0,
    'activity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba0f7569f19_90893263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba0f7569f19_90893263')) {function content_5c4ba0f7569f19_90893263($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/synesis_dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><style>
	h2, input {
		display: inline;
	}
	.cal-icon {
		margin-top: 10px;
		position: absolute;
	}
	div.date-header {
		text-align: center;
		margin: auto;
	}
</style>
<script>
	$(function() {
		$("#datepicker").datepicker({
			showOn: "button",
			buttonImage: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/calendar.png",
			buttonImageOnly: true
		});
	});
	
	$(document).ready(function() {
		$("#datepicker").change(function() {
			window.location = SITE_URL + "/?module=Activities&date=" + $(this).val();
		});
	});
</script>

<div id="page-header">
	<div id="action-left">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("module"), ENT_QUOTES, 'ISO-8859-1');?>

	</div>
	<div id="center-title">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("selectLocation"), ENT_QUOTES, 'ISO-8859-1');?>

	</div>
	<div id="action-right">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?page=activities&amp;action=activity&amp;type=new&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" class="button">New Activity</a>
	</div>
</div>

<h1>Activities</h1>
<div class="date-header">
	<h2><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['startDate']->value,"%A, %B %e, %Y"), ENT_QUOTES, 'ISO-8859-1');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['endDate']->value,"%A, %B %e, %Y"), ENT_QUOTES, 'ISO-8859-1');?>
 &nbsp;<input type="hidden" id="datepicker"></h2>
</div>
<div class="text-center"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Activities&amp;date=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['previousWeek']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">&laquo; Previous Week</a> &nbsp;&nbsp; <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Activities&amp;date=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nextWeek']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Next Week &raquo;</a></div>

<div id="activities">
	<table class="activities">
		<?php  $_smarty_tpl->tpl_vars["activities"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["activities"]->_loop = false;
 $_smarty_tpl->tpl_vars["date"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['activitiesArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["activities"]->key => $_smarty_tpl->tpl_vars["activities"]->value) {
$_smarty_tpl->tpl_vars["activities"]->_loop = true;
 $_smarty_tpl->tpl_vars["date"]->value = $_smarty_tpl->tpl_vars["activities"]->key;
?>
		<tr>
			<th colspan="3"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%A, %B %e"), ENT_QUOTES, 'ISO-8859-1');?>
</th>
		</tr>
		<?php if (is_array($_smarty_tpl->tpl_vars['activities']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars["activity"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["activity"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["activity"]->key => $_smarty_tpl->tpl_vars["activity"]->value) {
$_smarty_tpl->tpl_vars["activity"]->_loop = true;
?>
			<tr>
				<td style="width: 125px">
					<?php if ($_smarty_tpl->tpl_vars['activity']->value->all_day==1) {?>
						All Day
					<?php } else { ?>
						<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->time_start,"%I:%M %p"), ENT_QUOTES, 'ISO-8859-1');?>

					<?php }?>
				</td>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->description, ENT_QUOTES, 'ISO-8859-1');?>
</td>
				<td class="text-right"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?page=activities&amp;action=activity&amp;type=edit&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" class="button">Edit</a></td>
			</tr>
			<?php } ?>
		<?php } else { ?>
			<tr>
				<td colspan="3" class="text-center">No Scheduled Activity</td>
			</tr>
		<?php }?>
		<tr>
			<td colspan="3" class="text-right background-white"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?page=activities&amp;action=activity&amp;type=new&amp;date=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" class="button">Add New Activity</a></td>
		</tr>
		<tr>
			<td colspan="3" style="background-color:#ffffff">&nbsp;</td>
		</tr>
		<?php } ?>
	</table>
</div><?php }} ?>
