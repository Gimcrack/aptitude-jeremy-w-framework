<?php /* Smarty version Smarty-3.1.19, created on 2020-04-27 16:11:11
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19229407845d8178daa196f3-87747352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc960dce73f098f4b48c6187bbe8ec92baed5b20' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/edit.tpl',
      1 => 1588032665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19229407845d8178daa196f3-87747352',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d8178daa2b463_93233859',
  'variables' => 
  array (
    'date' => 0,
    'SITE_URL' => 0,
    'current_url' => 0,
    'location' => 0,
    'menuType' => 0,
    'menuItem' => 0,
    'menu' => 0,
    'corporateEdit' => 0,
    'allLocations' => 0,
    'key' => 0,
    'facility' => 0,
    'menuMod' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8178daa2b463_93233859')) {function content_5d8178daa2b463_93233859($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div class="container">
	
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
			<textarea name="menu_content" id="summernote" cols="30" rows="10" class="form-control"><?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItem']->value->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value, ENT_QUOTES, 'UTF-8');?>
<?php } ?></textarea>
		</div>
		
		<?php if ($_smarty_tpl->tpl_vars['corporateEdit']->value) {?>
		<div class="custom-control custom-radio">
			
			<label for="">Make the change to:</label>
			<input type="radio" name="edit_type" value="corp_menu" class="custom-control-inline">Corporate Menu</td>
			<input type="radio" name="edit_type" id="individualLocations" value="select_locations" class="custom-control-inline">Individual Locations <span class="text-10">(recurring only for the selected locations)</span></td>
		</div>
	
		<div class="custom-control custom-checkbox">
			<?php  $_smarty_tpl->tpl_vars['facility'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['facility']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allLocations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['facility']->key => $_smarty_tpl->tpl_vars['facility']->value) {
$_smarty_tpl->tpl_vars['facility']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['facility']->key;
?>
				<input type="checkbox" class="custom-control-input" name="facility<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facility']->value->public_id, ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facility']->value->name, ENT_QUOTES, 'UTF-8');?>

			<?php } ?>
		</div>
		<?php } else { ?>
		<div class="form-group">
			<label for="reason">Reason for menu change:</label>
			<textarea name="reason" id="reason" cols="80" rows="10" class="form-control"><?php if ($_smarty_tpl->tpl_vars['menuType']->value=="MenuMod") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->reason, ENT_QUOTES, 'UTF-8');?>
<?php }?></textarea>
		</div>
		<?php }?>

		<button type="button" class="btn btn-secondary" value="Cancel" onclick="history.go(-1)">Cancel</button>
		<?php if ($_smarty_tpl->tpl_vars['menuMod']->value) {?>
			<button type="submit" class="btn btn-primary" name="reset">Reset to Original</button>
		<?php }?>
		<button type="submit" class="btn btn-primary text-right">Change Menu</button>
	</form>
</div>
<?php }} ?>
