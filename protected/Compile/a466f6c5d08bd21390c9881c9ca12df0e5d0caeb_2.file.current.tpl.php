<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-12 10:35:16
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/current.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebaec640baf69_54642147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a466f6c5d08bd21390c9881c9ca12df0e5d0caeb' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/current.tpl',
      1 => 1587064821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebaec640baf69_54642147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="container mt-4">
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
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItems']->value, 'menuItem', false, NULL, 'menuItems', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['total'];
?>
			<td>
				<div>
					<div <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->type == "MenuMod") {?>class="text-primary"<?php } elseif ($_smarty_tpl->tpl_vars['menuItem']->value->type == "MenuChange") {?>class="text-warning"<?php }?>>
						<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItem']->value->content, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
							<li><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
		<?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['iteration'] : null) % 3)) {?>
		<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['count']->value++,0,''), ENT_QUOTES, 'UTF-8');?>

		</tr>

			<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['last'] : null)) {?>
			<tr>
				<th colspan="3" class="text-center"><?php echo htmlspecialchars(smarty_modifier_date_format(((string)$_smarty_tpl->tpl_vars['startDate']->value)." + ".((string)$_smarty_tpl->tpl_vars['count']->value)." day","%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</th>
			</tr>
			<tr>
			<?php } else { ?>
			</tr>
			<?php }?>
		<?php }?>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

<?php }
}
