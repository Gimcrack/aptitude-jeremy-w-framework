<?php /* Smarty version Smarty-3.1.19, created on 2020-03-17 01:20:30
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/facility_menus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5976779355d8f7f2f1f1f41-89003894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8de2743d044d80a8eb078462fcd725f846205e0' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/facility_menus.tpl',
      1 => 1583534550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5976779355d8f7f2f1f1f41-89003894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d8f7f2f224951_55933093',
  'variables' => 
  array (
    'location' => 0,
    'this' => 0,
    'menuWeek' => 0,
    'menu' => 0,
    'menuItems' => 0,
    'menuItem' => 0,
    'SITE_URL' => 0,
    'currentMenu' => 0,
    'pagination' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8f7f2f224951_55933093')) {function content_5d8f7f2f224951_55933093($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.truncate.php';
?><script>
	$(document).ready(function() {
		$("#location").change(function() {
			var location = $("#location option:selected").val();
			window.location.href = SITE_URL + "/?module=Dietary&page=info&action=facility_menus&location=" + location;
		});
		$("#menus").change(function() {
			var menu = $("#menus option:selected").val();
			window.location.href = SITE_URL + "/?module=Dietary&page=info&action=facility_menus&location=" + <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
 + "menu=" + menu;
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
</div>


<h2>Week <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuWeek']->value, ENT_QUOTES, 'UTF-8');?>
 of the <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'UTF-8');?>
 Menu</h2>
<br>
<table id="menu-table">
	<tr>
	<?php  $_smarty_tpl->tpl_vars["menuItem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menuItem"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["menuItem"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["menuItem"]->iteration=0;
 $_smarty_tpl->tpl_vars["menuItem"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["menuItem"]->key => $_smarty_tpl->tpl_vars["menuItem"]->value) {
$_smarty_tpl->tpl_vars["menuItem"]->_loop = true;
 $_smarty_tpl->tpl_vars["menuItem"]->iteration++;
 $_smarty_tpl->tpl_vars["menuItem"]->index++;
 $_smarty_tpl->tpl_vars["menuItem"]->first = $_smarty_tpl->tpl_vars["menuItem"]->index === 0;
 $_smarty_tpl->tpl_vars["menuItem"]->last = $_smarty_tpl->tpl_vars["menuItem"]->iteration === $_smarty_tpl->tpl_vars["menuItem"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['first'] = $_smarty_tpl->tpl_vars["menuItem"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['last'] = $_smarty_tpl->tpl_vars["menuItem"]->last;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['menuItems']['first']) {?>
		<tr>
			<th colspan="3" class="text-center">Day <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->day, ENT_QUOTES, 'UTF-8');?>
</th>
		</tr>
		<?php }?>
		<td class="menu-content">
			<div class="menu">
				<div class="menu-info <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->type=="MenuMod") {?>background-blue<?php } elseif ($_smarty_tpl->tpl_vars['menuItem']->value->type=="MenuChange") {?> background-grey<?php }?>">
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
				<div class="menu-edit-button">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=menu&amp;action=edit_corporate_menu&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;type=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->type, ENT_QUOTES, 'UTF-8');?>
&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;menu=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentMenu']->value->menu_id, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page, ENT_QUOTES, 'UTF-8');?>
" class="button">Edit</a>
				</div>
			</div>

		</td>
	<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['menuItems']['iteration'] % 3)) {?>
	<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['count']->value++,0,''), ENT_QUOTES, 'UTF-8');?>

	</tr>
	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>

		<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['menuItems']['last']) {?>
		<tr>
			<th colspan="3" class="text-center">Day <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->day+1, ENT_QUOTES, 'UTF-8');?>
</th>
		</tr>
		<tr>
		<?php } else { ?>
		</tr>
		<?php }?>
	<?php }?>

	<?php } ?>
</table>

	<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['SITE_URL']->value)."?module=Dietary&amp;page=info&amp;action=facility_menus&amp;menu=".((string)$_smarty_tpl->tpl_vars['currentMenu']->value->menu_id), null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("elements/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php }} ?>
