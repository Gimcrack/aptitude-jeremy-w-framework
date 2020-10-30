<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 15:53:22
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee17272bf2fc6_34801314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7a4f9e4b62128fdea0174ffb5a986146ff2b1f6' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/create.tpl',
      1 => 1588032844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee17272bf2fc6_34801314 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Create a New Menu</h1>

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
</form><?php }
}
