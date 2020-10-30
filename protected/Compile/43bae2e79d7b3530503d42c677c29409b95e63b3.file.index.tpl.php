<?php /* Smarty version Smarty-3.1.19, created on 2019-05-16 20:26:51
         compiled from "/var/www/html/aptitudecare/modules/Activities/Views/activities/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17295718695c92c823456845-25201058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43bae2e79d7b3530503d42c677c29409b95e63b3' => 
    array (
      0 => '/var/www/html/aptitudecare/modules/Activities/Views/activities/index.tpl',
      1 => 1553125343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17295718695c92c823456845-25201058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c92c823466008_47773862',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c92c823466008_47773862')) {function content_5c92c823466008_47773862($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
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
			buttonImage: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
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
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("module"), ENT_QUOTES, 'UTF-8');?>

	</div>
	<div id="center-title">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("selectLocation"), ENT_QUOTES, 'UTF-8');?>

	</div>
	<div id="action-right">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=activities&amp;action=activity&amp;type=new&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="button">New Activity</a>
	</div>
</div>

<h1>Activities</h1>
<div class="date-header">
	<h2><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['startDate']->value,"%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['endDate']->value,"%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
 &nbsp;<input type="hidden" id="datepicker"></h2>
</div>
<div class="text-center"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Activities&amp;date=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['previousWeek']->value, ENT_QUOTES, 'UTF-8');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">&laquo; Previous Week</a> &nbsp;&nbsp; <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Activities&amp;date=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nextWeek']->value, ENT_QUOTES, 'UTF-8');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
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
			<th colspan="3"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%A, %B %e"), ENT_QUOTES, 'UTF-8');?>
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
						<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->time_start,"%I:%M %p"), ENT_QUOTES, 'UTF-8');?>

					<?php }?>
				</td>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->description, ENT_QUOTES, 'UTF-8');?>
</td>
				<td class="text-right"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=activities&amp;action=activity&amp;type=edit&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="button">Edit</a></td>
			</tr>
			<?php } ?>
		<?php } else { ?>
			<tr>
				<td colspan="3" class="text-center">No Scheduled Activity</td>
			</tr>
		<?php }?>
		<tr>
			<td colspan="3" class="text-right background-white"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=activities&amp;action=activity&amp;type=new&amp;date=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date']->value, ENT_QUOTES, 'UTF-8');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="button">Add New Activity</a></td>
		</tr>
		<tr>
			<td colspan="3" style="background-color:#ffffff">&nbsp;</td>
		</tr>
		<?php } ?>
	</table>
</div><?php }} ?>
