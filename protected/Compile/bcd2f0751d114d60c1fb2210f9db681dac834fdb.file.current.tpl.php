<?php /* Smarty version Smarty-3.1.19, created on 2019-01-31 18:10:27
         compiled from "/var/www/html/aspencreek_dev/modules/Dietary/Views/info/current.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20056296365c533a1330ba46-93678442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcd2f0751d114d60c1fb2210f9db681dac834fdb' => 
    array (
      0 => '/var/www/html/aspencreek_dev/modules/Dietary/Views/info/current.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20056296365c533a1330ba46-93678442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'SITE_URL' => 0,
    'location' => 0,
    'retreatWeekSeed' => 0,
    'FRAMEWORK_IMAGES' => 0,
    'advanceWeekSeed' => 0,
    'startDate' => 0,
    'today' => 0,
    'menuWeek' => 0,
    'menu' => 0,
    'menuItems' => 0,
    'menuItem' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c533a1337c6c4_29470681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c533a1337c6c4_29470681')) {function content_5c533a1337c6c4_29470681($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aspencreek_dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/aspencreek_dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.truncate.php';
?><script>
	$(document).ready(function() {
		$("#location").change(function() {
			var location = $("#location option:selected").val();
			window.location.href = SITE_URL + "/?module=Dietary&page=info&action=current&location=" + location;
		});

		$("#print-menu-select-date").on("click", function(e){
			e.preventDefault();
			var location = $("#location option:selected").val();
			var url = SITE_URL + '?module=Dietary&page=menu&action=print_menu&location=' + location;
			console.log(url);

			$('#menu-date-dialog').dialog({
				buttons: {
					"Submit": function() {
						var selectedDate = $("#selected-date").val();
						window.open(url + '&weekSeed=' + selectedDate + '&pdf=true', '_blank');
						$(this).dialog("close");
					}
				}
			});

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
		<button id="print-menu-select-date" class="btn btn-primary pull-right">Print Menu</button>
	</div>
</div>

<div id="date-header">
	<div class="dietary-date-header-img-left">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Dietary&amp;page=info&amp;action=current&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
&amp;weekSeed=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['retreatWeekSeed']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><img class="left" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/icons/prev-icon.png" alt="previous week" /></a>
	</div>
	<div class="dietary-date-header-img-right">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Dietary&amp;page=info&amp;action=current&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
&amp;weekSeed=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advanceWeekSeed']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><img class="left" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/icons/next-icon.png" alt="next week" /></a>
	</div>
	<div class="dietary-date-header-text">
		<h1 class="text-24">Week Beginning <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['startDate']->value,"%A, %B %e, %G"), ENT_QUOTES, 'ISO-8859-1');?>
</h1>
		<?php if ($_smarty_tpl->tpl_vars['today']->value) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Dietary&amp;page=info&amp;action=current&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
&amp;weekSeed=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['today']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="button">Today</a>
		<?php }?>
	</div>

</div>

<h2><strong>Week <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuWeek']->value, ENT_QUOTES, 'ISO-8859-1');?>
</strong> of the <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</strong> Menu</h2>

<input type="hidden" name="location" id="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">

<table id="menu-table">
	<tr>
		<th colspan="3" class="text-center"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['startDate']->value,"%A, %B %e, %Y"), ENT_QUOTES, 'ISO-8859-1');?>
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
		<td class="menu-content">
			<div class="menu">
				<div class="menu-info <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->type=="MenuMod") {?>background-blue<?php } elseif ($_smarty_tpl->tpl_vars['menuItem']->value->type=="MenuChange") {?> background-grey<?php }?>">
					<ul>
					<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItem']->value->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
						<li><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'ISO-8859-1');?>
</li>
					<?php } ?>
					</ul>
				</div>
				<div class="clear"></div>
				<div class="menu-edit-button">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Dietary&amp;page=menu&amp;action=edit&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
&amp;type=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->type, ENT_QUOTES, 'ISO-8859-1');?>
&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
&amp;date=<?php echo htmlspecialchars(smarty_modifier_date_format(((string)$_smarty_tpl->tpl_vars['startDate']->value)." + ".((string)$_smarty_tpl->tpl_vars['count']->value)." day","%Y-%m-%d"), ENT_QUOTES, 'ISO-8859-1');?>
" class="button">Edit</a>
				</div>
			</div>

		</td>
	<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['menuItems']['iteration'] % 3)) {?>
	<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['count']->value++,0,''), ENT_QUOTES, 'ISO-8859-1');?>

	</tr>
	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>

		<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['menuItems']['last']) {?>
		<tr>
			<th colspan="3" class="text-center"><?php echo htmlspecialchars(smarty_modifier_date_format(((string)$_smarty_tpl->tpl_vars['startDate']->value)." + ".((string)$_smarty_tpl->tpl_vars['count']->value)." day","%A, %B %e, %Y"), ENT_QUOTES, 'ISO-8859-1');?>
</th>
		</tr>
		<tr>
		<?php } else { ?>
		</tr>
		<?php }?>
	<?php }?>

	<?php } ?>
</table>

<div id="legendary">
	<h2>Menu Color Legend</h2>
	<div class="legend-item">
		<div class="legend-box background-grey"></div>
		<div class="legend-desc">Menu Items with this background color have been edited at a corporate level. These changes are <strong>permanent</strong> and will display each time the menu starts over.</div>
	</div>
	<div class="legend-item">
		<div class="legend-box background-blue"></div>
		<div class="legend-desc">Menu Items with this background color have been edited by the facility. These changes are a <strong>one-time</strong> change and will not recur when the menu starts over.</div>
	</div>

</div>
<div class="clear"></div>

<div id="menu-date-dialog" title="Select Date">
	<p>Select the date for which you would like to print the menu.</p>
	<input type="text" id="selected-date" class="date-picker">
</div>
<?php }} ?>
