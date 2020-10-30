<?php /* Smarty version Smarty-3.1.19, created on 2020-04-16 19:01:57
         compiled from "/var/www/html/aptitudecare/dev/modules/Activities/Views/activities/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9408665715d787b650416b6-56855201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fdc9e269aab1112c507249552dd0a2ef4041883' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Activities/Views/activities/index.tpl',
      1 => 1587092515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9408665715d787b650416b6-56855201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d787b65053859_75017694',
  'variables' => 
  array (
    'this' => 0,
    'SITE_URL' => 0,
    'location' => 0,
    'startDate' => 0,
    'previousWeek' => 0,
    'endDate' => 0,
    'nextWeek' => 0,
    'activitiesArray' => 0,
    'date' => 0,
    'activities' => 0,
    'activity' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d787b65053859_75017694')) {function content_5d787b65053859_75017694($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div class="container">

	<!-- Navigation buttons -->
	<div class="row">
		<div class="col-lg-4">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("module"), ENT_QUOTES, 'UTF-8');?>

		</div>
		<div class="col-lg-4 text-center">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("selectLocation"), ENT_QUOTES, 'UTF-8');?>

		</div>
		<div class="col-lg-4">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Activities&amp;page=activities&amp;action=activity&amp;type=new&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary pull-right">New Activity</a>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Activities&amp;page=activities&amp;action=print_activities&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;date=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['startDate']->value, ENT_QUOTES, 'UTF-8');?>
&amp;pdf=true" target="_blank" class="btn btn-primary pull-right">Print activities</a>
		</div>
	</div>

	<h1>Activities</h1>
	<div class="row">
		<div class="col-12 text-center">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Activities&amp;date=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['previousWeek']->value, ENT_QUOTES, 'UTF-8');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
"><i class="fas fa-arrow-alt-circle-left m-2"></i></a>
			<span class="text-14 align-top"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['startDate']->value,"%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['endDate']->value,"%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</span>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Activities&amp;date=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nextWeek']->value, ENT_QUOTES, 'UTF-8');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
"><i class="fas fa-arrow-alt-circle-right m-2"></i></a>
		</div>
	</div>

	<div class="mt-5">
		<table class="table">
			<?php  $_smarty_tpl->tpl_vars["activities"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["activities"]->_loop = false;
 $_smarty_tpl->tpl_vars["date"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['activitiesArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["activities"]->key => $_smarty_tpl->tpl_vars["activities"]->value) {
$_smarty_tpl->tpl_vars["activities"]->_loop = true;
 $_smarty_tpl->tpl_vars["date"]->value = $_smarty_tpl->tpl_vars["activities"]->key;
?>
			<tr>
				<th colspan="3" class="table-dark text-center"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%A, %B %e"), ENT_QUOTES, 'UTF-8');?>
</th>
			</tr>
			<?php if (is_array($_smarty_tpl->tpl_vars['activities']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars["activity"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["activity"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["activity"]->key => $_smarty_tpl->tpl_vars["activity"]->value) {
$_smarty_tpl->tpl_vars["activity"]->_loop = true;
?>
				<tr>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['activity']->value->all_day==1) {?>
							All Day
						<?php } else { ?>
							<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->time_start,"%I:%M %p"), ENT_QUOTES, 'UTF-8');?>

						<?php }?>
					</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->description, ENT_QUOTES, 'UTF-8');?>
</td>
					<td class="text-right">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Activities&amp;page=activities&amp;action=activity&amp;type=edit&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="btn"><i class="far fa-edit"></i></a>
					</td>
				</tr>
				<?php } ?>
			<?php } else { ?>
				<tr>
					<td colspan="3" class="text-center">No Scheduled Activity</td>
				</tr>
			<?php }?>
			<tr>
				<td colspan="3" class="text-right">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Activities&amp;page=activities&amp;action=activity&amp;type=new&amp;date=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date']->value, ENT_QUOTES, 'UTF-8');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="btn"><i class="fas fa-plus"></i></a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
<?php }} ?>
