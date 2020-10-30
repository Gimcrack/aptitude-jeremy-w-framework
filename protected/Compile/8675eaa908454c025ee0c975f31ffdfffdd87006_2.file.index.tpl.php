<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-23 09:48:28
  from '/var/www/html/aptitudecare/dev/modules/Activities/Views/activities/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef2406c863c14_84590843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8675eaa908454c025ee0c975f31ffdfffdd87006' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Activities/Views/activities/index.tpl',
      1 => 1592934495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef2406c863c14_84590843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="container">

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
" class="btn btn-primary pull-right text-white">New Activity</a>
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
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activitiesArray']->value, 'activities', false, 'date');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value => $_smarty_tpl->tpl_vars['activities']->value) {
?>
			<tr>
				<th colspan="3" class="table-dark text-center"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%A, %B %e"), ENT_QUOTES, 'UTF-8');?>
</th>
			</tr>
			<?php if (is_array($_smarty_tpl->tpl_vars['activities']->value)) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activities']->value, 'activity');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['activity']->value) {
?>
				<tr>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['activity']->value->all_day == 1) {?>
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
						<!-- <a href="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" data-toggle="modal" data-target="#deleteModal" class="delete">
						<i class="fas fa-trash"></i>
						<input type="hidden" name="public_id" class="public-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" /> -->
					</a>

					</td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>

	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("deleteModal"), ENT_QUOTES, 'UTF-8');?>

	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery-ui-1.11.4.custom/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }
}
