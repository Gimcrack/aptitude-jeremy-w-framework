<?php /* Smarty version Smarty-3.1.19, created on 2020-04-15 14:09:36
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/edit_corporate_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14325981735d8178b5c0a162-85872570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33cb13acdabaeaf660f983fdc11603ddf9cdbc91' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/edit_corporate_menu.tpl',
      1 => 1586988575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14325981735d8178b5c0a162-85872570',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d8178b5c339e4_39140302',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'current_url' => 0,
    'menuType' => 0,
    'menuItem' => 0,
    'location' => 0,
    'menu' => 0,
    'page_count' => 0,
    'm' => 0,
    'allLocations' => 0,
    'key' => 0,
    'facility' => 0,
    'menuChange' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8178b5c339e4_39140302')) {function content_5d8178b5c339e4_39140302($_smarty_tpl) {?><div class="container">
	<h1>Edit Menu Item</h1>

	<form name="edit" id="edit" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="page" value="menu" />
		<input type="hidden" name="action" value="edit_corporate_menu" />
		<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
" />	
		<input type="hidden" name="type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuType']->value, ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="id" id="public-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="menu" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="page_count" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_count']->value, ENT_QUOTES, 'UTF-8');?>
" />
		
		
		<div class="form-group">
			<label for="menu"><strong>Menu:</strong></label>
			<textarea id="summernote" name="menu_content" id="menu-content" class="form-control"><?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItem']->value->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value, ENT_QUOTES, 'UTF-8');?>
<?php } ?></textarea>
		</div>

		<div class="form-group">
			<strong>Make the change to:</strong>
			<div class="form-check">
				<input type="radio" id="corp-menu" class="form-check-input" name="edit_type" value="corp_menu" checked>
				<label class="form-check-label" for="corp-menu">Corporate Menu</label>
			</div>
			<div class="form-check">
				<input type="radio" id="ind-location" class="form-check-input" name="edit_type" id="individualLocations" value="select_locations">
				<label class="form-check-label" for="ind-location">Individual Locations </label>
			</div>

			<div class="form-check facilities-list ml-5">
				<?php  $_smarty_tpl->tpl_vars['facility'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['facility']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allLocations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['facility']->key => $_smarty_tpl->tpl_vars['facility']->value) {
$_smarty_tpl->tpl_vars['facility']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['facility']->key;
?>
					<input type="checkbox" class="form-check-input" name="facility<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facility']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value->public_id==$_smarty_tpl->tpl_vars['facility']->value->public_id) {?> checked="checked"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facility']->value->name, ENT_QUOTES, 'UTF-8');?>

				<?php } ?>
			</div>
		</div>

		<div class="row text-right">
			<div class="col-12">
				<button type="button" class="btn btn-secondary" onClick="history.go(-1)">Cancel</button>
				<?php if ($_smarty_tpl->tpl_vars['menuChange']->value) {?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=menu&amp;action=delete_item&amp;type=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuType']->value, ENT_QUOTES, 'UTF-8');?>
&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;menu=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;page_count=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_count']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">Reset to Original Item</a>
				<?php }?>
				<button type="submit" class="btn btn-primary">Change Menu</button>
			</div>
		</div>
	</form>
</div><?php }} ?>
