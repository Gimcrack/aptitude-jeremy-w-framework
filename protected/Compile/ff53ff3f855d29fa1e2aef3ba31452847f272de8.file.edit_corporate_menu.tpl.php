<?php /* Smarty version Smarty-3.1.19, created on 2019-01-26 00:04:54
         compiled from "/var/www/html/synesis_dev/modules/Dietary/Views/menu/edit_corporate_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20364203835c4ba4263f90a3-77618437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff53ff3f855d29fa1e2aef3ba31452847f272de8' => 
    array (
      0 => '/var/www/html/synesis_dev/modules/Dietary/Views/menu/edit_corporate_menu.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20364203835c4ba4263f90a3-77618437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'location' => 0,
    'SITE_URL' => 0,
    'current_url' => 0,
    'menuType' => 0,
    'menuItem' => 0,
    'menu' => 0,
    'page_count' => 0,
    'm' => 0,
    'allLocations' => 0,
    'key' => 0,
    'facility' => 0,
    'menuChange' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba42640bf77_12486329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba42640bf77_12486329')) {function content_5c4ba42640bf77_12486329($_smarty_tpl) {?>

<script>
	$(document).ready(function() {
		$(".facilities-list").hide();

		$("#reset").submit(function(e) {
			e.preventDefault();
			$.post(SITE_URL, { 
				module: "Dietary",
				page: "Menu",
				action: "deleteId",
				type: "MenuMod",
				id: $("#public-id").val(),
				}, function (response) {
					window.location.href = SITE_URL + "/?module=Dietary&page=dietary&action=current&location=" + $("#location").val();
				}, "json"
			);
		});

		<?php if (!$_smarty_tpl->tpl_vars['location']->value) {?>
			$(".facilities-list").hide();
		<?php }?>

		$('input:radio[name="edit_type"]').change(function() {
			if ($(this).is(':checked') && $(this).val() == 'select_locations') {
				$(".facilities-list").show();
			} else {
				$(".facilities-list").hide();
			}
		});
	});
</script>

<h1>Edit Menu Item</h1>

<form name="edit" id="edit" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
	<input type="hidden" name="page" value="menu" />
	<input type="hidden" name="action" value="edit_corporate_menu" />
	<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />	
	<input type="hidden" name="type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuType']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
	<input type="hidden" name="id" id="public-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" />
	<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">
	<input type="hidden" name="menu" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" />
	<input type="hidden" name="page_count" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_count']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
	
	<table class="form">
		<tr>
			<td colspan="3"><strong>Menu:</strong></td>
		</tr>
		<tr>
			<td colspan="3">
				<textarea name="menu_content" id="menu-content" cols="50" rows="20"><?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItem']->value->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value, ENT_QUOTES, 'ISO-8859-1');?>
<?php } ?></textarea>
			</td>
		</tr>
		<tr>
			<td style="width: 135px">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>

		<tr>
			<td colspan="3"><strong>Make the change to:</strong></td>
		</tr>
		<tr id="change-type">
			<td><input type="radio" name="edit_type" value="corp_menu" checked>Corporate Menu</td>
			<td colspan="2"><input type="radio" name="edit_type" id="individualLocations" value="select_locations">Individual Locations <span class="text-10">(recurring only for the selected locations)</span></td>
		</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr class="facilities-list">
				<td colspan="3">
					<table>
						<tr>
						<?php  $_smarty_tpl->tpl_vars['facility'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['facility']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allLocations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['facilities']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['facility']->key => $_smarty_tpl->tpl_vars['facility']->value) {
$_smarty_tpl->tpl_vars['facility']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['facility']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['facilities']['iteration']++;
?>
							<td><input type="checkbox" name="facility<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facility']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value->public_id==$_smarty_tpl->tpl_vars['facility']->value->public_id) {?> checked="checked"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facility']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</td>
						<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['facilities']['iteration'] % 2)) {?>
						</tr>
						<tr class="facilities-list">
						<?php }?>
						<?php } ?>
						</tr>
					</table>


		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td><input type="button" value="Cancel" onclick="history.go(-1)"> </td>
			<td>&nbsp;</td>
			<td style="text-align: right">
				<?php if ($_smarty_tpl->tpl_vars['menuChange']->value) {?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Dietary&amp;page=menu&amp;action=delete_item&amp;type=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuType']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
&amp;menu=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_count']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="button">Reset to Original Item</a>
				<?php }?>
				<input type="submit" value="Change Menu"></td>
		</tr>


	</table>
</form>
<?php }} ?>
