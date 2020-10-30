<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 13:20:12
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebf078c3b9ba2_68563473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '095965282e5b1510a2dc053776a76bd45274f124' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/edit.tpl',
      1 => 1588032665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebf078c3b9ba2_68563473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="container">
	
	<h1>Edit the Menu for <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</h1>

	<form name="edit" id="edit" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="module" value="Dietary">
		<input type="hidden" name="page" value="menu" />
		<input type="hidden" name="action" value="submit_edit" />
		<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
" />	
		<input type="hidden" name="location" id="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="menu_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuType']->value, ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="date" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date']->value, ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="public_id" id="public-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" />

		
		<div class="form-group">
			<label for="menu-content">Menu</label>
			<textarea name="menu_content" id="summernote" cols="30" rows="10" class="form-control"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItem']->value->content, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value, ENT_QUOTES, 'UTF-8');
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></textarea>
		</div>
		
		<?php if ($_smarty_tpl->tpl_vars['corporateEdit']->value) {?>
		<div class="custom-control custom-radio">
			
			<label for="">Make the change to:</label>
			<input type="radio" name="edit_type" value="corp_menu" class="custom-control-inline">Corporate Menu</td>
			<input type="radio" name="edit_type" id="individualLocations" value="select_locations" class="custom-control-inline">Individual Locations <span class="text-10">(recurring only for the selected locations)</span></td>
		</div>
	
		<div class="custom-control custom-checkbox">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allLocations']->value, 'facility', false, 'key', 'facilities', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['facility']->value) {
?>
				<input type="checkbox" class="custom-control-input" name="facility<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facility']->value->public_id, ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facility']->value->name, ENT_QUOTES, 'UTF-8');?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<?php } else { ?>
		<div class="form-group">
			<label for="reason">Reason for menu change:</label>
			<textarea name="reason" id="reason" cols="80" rows="10" class="form-control"><?php if ($_smarty_tpl->tpl_vars['menuType']->value == "MenuMod") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->reason, ENT_QUOTES, 'UTF-8');
}?></textarea>
		</div>
		<?php }?>

		<button type="button" class="btn btn-secondary" value="Cancel" onclick="history.go(-1)">Cancel</button>
		<?php if ($_smarty_tpl->tpl_vars['menuMod']->value) {?>
			<button type="submit" class="btn btn-primary" name="reset">Reset to Original</button>
		<?php }?>
		<button type="submit" class="btn btn-primary text-right">Change Menu</button>
	</form>
</div>
<?php }
}
