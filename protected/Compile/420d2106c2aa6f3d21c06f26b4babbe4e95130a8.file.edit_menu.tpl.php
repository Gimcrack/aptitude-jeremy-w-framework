<?php /* Smarty version Smarty-3.1.19, created on 2020-04-15 13:36:44
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/edit_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15835125625d800edfecc5a0-80300155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '420d2106c2aa6f3d21c06f26b4babbe4e95130a8' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/edit_menu.tpl',
      1 => 1586986601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15835125625d800edfecc5a0-80300155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d800edfed3c98_24438742',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'menu' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d800edfed3c98_24438742')) {function content_5d800edfed3c98_24438742($_smarty_tpl) {?><div class="container">
	<h1>Edit Menu</h1>

	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
		<input type="hidden" name="page" value="info">
		<input type="hidden" name="action" value="edit_menu">
		<input type="hidden" name="menu" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="current_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">

		<div class="form-group">
			<label for="menu-name">Menu Name:</label>
			<input id="menu-name" class="form-control" type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'UTF-8');?>
">
		</div>
		<div class="row text-right">
			<div class="col-12">
				<button class="btn btn-primary" type="submit">Save</button>
			</div>
		</div>
	</form>
</div><?php }} ?>
