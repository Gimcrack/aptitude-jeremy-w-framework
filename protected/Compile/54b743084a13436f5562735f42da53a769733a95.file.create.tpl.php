<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 11:01:32
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11696481995d800ee468a055-98897452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54b743084a13436f5562735f42da53a769733a95' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/create.tpl',
      1 => 1588032844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11696481995d800ee468a055-98897452',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d800ee4690a70_74445817',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d800ee4690a70_74445817')) {function content_5d800ee4690a70_74445817($_smarty_tpl) {?><h1>Create a New Menu</h1>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" class="form">
	<input type="hidden" name="module" value="Dietary">
	<input type="hidden" name="page" value="info">
	<input type="hidden" name="action" value="save_create">
	<input type="hidden" name="current_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">

	
	<div class="form-group">
		<div class="col-12">
			<strong>Menu Name:</strong>
			<input type="text" class="form-control" name="menu_name" size="50">
		</div>
	</div>

	<div class="form-group">
		<div class="col-12">
			<strong>Number of weeks in menu:</strong>
			<select name="num_weeks" id="num-weeks" class="form-control">
				<option value="">Select...</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>
		</div>
	</div>

	<div class="row mt-4 text-right">
		<div class="col-12"><button class="btn btn-primary" type="submit">Create Menu</button></div>
	</div>
</form><?php }} ?>
