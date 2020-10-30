<?php /* Smarty version Smarty-3.1.19, created on 2020-04-16 11:21:02
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/current.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12922740135d8178cee1de12-72349485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d6edd4db0cf224bd852307c504d60b91739dc2d' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/current.tpl',
      1 => 1587064821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12922740135d8178cee1de12-72349485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d8178cee3dd95_86175491',
  'variables' => 
  array (
    'this' => 0,
    'SITE_URL' => 0,
    'location' => 0,
    'retreatWeekSeed' => 0,
    'menuWeek' => 0,
    'menu' => 0,
    'advanceWeekSeed' => 0,
    'startDate' => 0,
    'menuItems' => 0,
    'menuItem' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8178cee3dd95_86175491')) {function content_5d8178cee3dd95_86175491($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.truncate.php';
?><div class="container mt-4">
	<div class="row">
		<div class="col-lg-4 col-sm-12">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("module"), ENT_QUOTES, 'UTF-8');?>

		</div>
		<div class="col-lg-4 col-sm-12 text-center">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("selectLocation"), ENT_QUOTES, 'UTF-8');?>

		</div>
		<div class="col-lg-4 col-sm-12 text-right">
			<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#printModal">Print Menu</button>
		</div>
	</div>
	
	<div class="row m-3">
		<div class="col-sm-3 text-right">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=info&amp;action=current&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;weekSeed=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['retreatWeekSeed']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="fas fa-arrow-alt-circle-left fa-2x"></i></a>
		</div>
		<div class="col-sm-6">
			<h2 class="text-center"><strong>Week <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuWeek']->value, ENT_QUOTES, 'UTF-8');?>
</strong> of the <br><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'UTF-8');?>
</strong> Menu</h2>
		</div>
		<div class="col-sm-3">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=info&amp;action=current&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;weekSeed=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advanceWeekSeed']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="fas fa-arrow-alt-circle-right fa-2x"></i></a>	
		</div>
	</div>

	<input type="hidden" name="location" id="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">

	<table class="table">
		<tr>
			<th colspan="3" class="text-center"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['startDate']->value,"%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</th>
		</tr>
		<tr>
		<?php  $_smarty_tpl->tpl_vars["menuItem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menuItem"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["menuItem"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["menuItem"]->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["menuItem"]->key => $_smarty_tpl->tpl_vars["menuItem"]->value) {
$_smarty_tpl->tpl_vars["menuItem"]->_loop = true;
 $_smarty_tpl->tpl_vars["menuItem"]->iteration++;
 $_smarty_tpl->tpl_vars["menuItem"]->last = $_smarty_tpl->tpl_vars["menuItem"]->iteration === $_smarty_tpl->tpl_vars["menuItem"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['last'] = $_smarty_tpl->tpl_vars["menuItem"]->last;
?>
			<td>
				<div>
					<div <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->type=="MenuMod") {?>class="text-primary"<?php } elseif ($_smarty_tpl->tpl_vars['menuItem']->value->type=="MenuChange") {?>class="text-warning"<?php }?>>
						<ul>
						<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItem']->value->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
							<li><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
</li>
						<?php } ?>
						</ul>
					</div>
					<div class="align-text-baseline text-right">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=menu&amp;action=edit&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;type=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->type, ENT_QUOTES, 'UTF-8');?>
&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;date=<?php echo htmlspecialchars(smarty_modifier_date_format(((string)$_smarty_tpl->tpl_vars['startDate']->value)." + ".((string)$_smarty_tpl->tpl_vars['count']->value)." day","%Y-%m-%d"), ENT_QUOTES, 'UTF-8');?>
" class="btn-table">Edit</a>
					</div>
				</div>

			</td>
		<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['menuItems']['iteration'] % 3)) {?>
		<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['count']->value++,0,''), ENT_QUOTES, 'UTF-8');?>

		</tr>

			<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['menuItems']['last']) {?>
			<tr>
				<th colspan="3" class="text-center"><?php echo htmlspecialchars(smarty_modifier_date_format(((string)$_smarty_tpl->tpl_vars['startDate']->value)." + ".((string)$_smarty_tpl->tpl_vars['count']->value)." day","%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</th>
			</tr>
			<tr>
			<?php } else { ?>
			</tr>
			<?php }?>
		<?php }?>

		<?php } ?>
	</table>

	<h2 class="text-center mt-5 pb-2">Menu Color Legend</h2>
		<div class="row">
			<div class="col-lg-1 bg-warning"></div>
			<div class="col-lg-11">Menu Items with this font color have been edited at a corporate level for this location. These changes are <strong>permanent</strong> and will display each time the menu starts over.</div>
		</div>
		<div class="row mt-2">
			<div class="col-lg-1 bg-primary"></div>
			<div class="col-lg-11">Menu Items with this font are a <strong>one-time</strong> change and will not recur when the menu starts over.</div>
		</div>

	</div>
</div>


<div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content datepicker-modal">
			<div class="modal-header">
				<h5>Select Date</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Select the date for which you would like the menu to print.</p>
				<input type="text" class="datepicker" name="datetime_start">
				<div class="row text-right align-bottom">
					<div class="col-12">
						<button type="submit" class="print btn btn-primary">Print</button>
					</div>
				</div>
				
			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
</div>

<?php }} ?>
