<?php /* Smarty version Smarty-3.1.19, created on 2019-01-26 00:10:07
         compiled from "/var/www/html/synesis_dev/modules/Dietary/Views/info/facility_menus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3083929545c4ba55f380198-56447375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec77b9dd27c7f7ae0b61768db863608892f8222d' => 
    array (
      0 => '/var/www/html/synesis_dev/modules/Dietary/Views/info/facility_menus.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3083929545c4ba55f380198-56447375',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba55f395383_23130539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba55f395383_23130539')) {function content_5c4ba55f395383_23130539($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/synesis_dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.truncate.php';
?><script>
	$(document).ready(function() {
		$("#location").change(function() {
			var location = $("#location option:selected").val();
			window.location.href = SITE_URL + "/?module=Dietary&page=info&action=facility_menus&location=" + location;
		});
		$("#menus").change(function() {
			var menu = $("#menus option:selected").val();
			window.location.href = SITE_URL + "/?module=Dietary&page=info&action=facility_menus&location=" + <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
 + "menu=" + menu;
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
</div>


<h2>Week <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuWeek']->value, ENT_QUOTES, 'ISO-8859-1');?>
 of the <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
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
			<th colspan="3" class="text-center">Day <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->day, ENT_QUOTES, 'ISO-8859-1');?>
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
						<li><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'ISO-8859-1');?>
</li>
					<?php } ?>
					</ul>
				</div>
				<div class="menu-edit-button">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Dietary&amp;page=menu&amp;action=edit_corporate_menu&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
&amp;type=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->type, ENT_QUOTES, 'ISO-8859-1');?>
&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
&amp;menu=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentMenu']->value->menu_id, ENT_QUOTES, 'ISO-8859-1');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value->current_page, ENT_QUOTES, 'ISO-8859-1');?>
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
			<th colspan="3" class="text-center">Day <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->day+1, ENT_QUOTES, 'ISO-8859-1');?>
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
