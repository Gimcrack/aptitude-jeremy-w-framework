<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-31 15:36:03
  from '/var/www/html/aptitudecare/dev/protected/Views/users/user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4d89635f2e62_99395945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c77b97a6af1b0575195171fa5bbbee345fb4993' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/users/user.tpl',
      1 => 1585165393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4d89635f2e62_99395945 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- page container -->
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_header']->value, ENT_QUOTES, 'UTF-8');?>
</h1>
		</div>
	</div>



	
	<form name="user" id="edit" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="page" value="users" />
		<input type="hidden" name="action" value="save_user" />
		<input type="hidden" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="location_public_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_location']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
" />

		<!-- name -->
		<div class="form-group row">
			<div class="col-md-6 col-sm-12">
				<label for="first-name">First Name:</label>
				<input type="text" class="form-control" name="first_name" id="first-name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->first_name, ENT_QUOTES, 'UTF-8');?>
">
			</div>
			<div class="col-md-6 col-sm-12">
				<label for="last-name">Last Name:</label>
				<input type="text" class="form-control" name="last_name" id="last-name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->last_name, ENT_QUOTES, 'UTF-8');?>
">
			</div>
		</div>
		<!-- /name -->

		<!-- email, phone -->
		<div class="form-group row">
			<div class="col-md-8 col-sm-12">
				<label for="email">Email:</label>
				<input type="text" class="form-control" name="email" id="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8');?>
">
			</div>
			<div class="col-md-4 col-sm-12">
				<label for="phone">Phone:</label>
				<input type="text" class="form-control" name="phone" id="phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->phone, ENT_QUOTES, 'UTF-8');?>
">
			</div>
		</div>
		<!-- /email, phone -->

		<!-- password -->
		<?php if ($_smarty_tpl->tpl_vars['existing']->value) {?>
		<div class="row">	
			<div class="col-sm-12">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=users&amp;action=reset_password&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-secondary">Reset Password</a>
			</div>	
		</div>
		<?php } else { ?>
		<div class="form-group row">
			<div class="col-md-8 col-sm-12">
				<label for="password">Password:</label>
				<input type="password" class="form-control" name="password" id="password">
			</div>
			<div class="col-md-4 col-sm-12">
				<label for="verify-password">Verify Password:</label>
				<input type="password" class="form-control" name="verify_password" id="verify-password">
			</div>	
		</div>
		<div class="form-group row">
			<div class="col-sm-12 text-right">
				<input type="checkbox" class="form-check-input text-right" name="temp_password" id="temp-password" value="true"> 
				<label class="form-check-label" for="temp-password">Temporary Password</label>
			</div>
		</div>
		<?php }?>
		<!-- /password -->


		<!-- default location -->
		<div class="form-group row">
			<div class="col-sm-12">
				<label for="user-location">Default Location:</label>
				<select name="default_location" id="user-location" class="form-control">
					<option value="">Select a location...</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['additional_locations']->value, 'location');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['default_location']->value == $_smarty_tpl->tpl_vars['location']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
		</div>
		<!-- /default location -->

		<!-- additional locations -->
		<?php if (count($_smarty_tpl->tpl_vars['additional_locations']->value) > 1) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['additional_locations']->value, 'loc', false, 'k', 'count', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['loc']->value) {
?>
			<input type="checkbox" name="additional_locations[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" class="form-check-input" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value->id, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assigned_locations']->value, 'location');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
?> <?php if ($_smarty_tpl->tpl_vars['location']->value->id == $_smarty_tpl->tpl_vars['loc']->value->id) {?> checked<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>> 
			<label class="form-check-label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value->name, ENT_QUOTES, 'UTF-8');?>
</label>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		<!-- additional locations -->


		<!-- default group -->
		<div class="form-group row">
			<div class="col-sm-12">
				<label for="group">Default Group:</label>
				<select name="group" class="form-control" id="group">
					<option value="">Select a group role...</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['group_id']->value == $_smarty_tpl->tpl_vars['group']->value->id) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->description, ENT_QUOTES, 'UTF-8');?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>

			</div>
		</div>
		<!-- /default group -->


		<!-- additional groups -->
		<div class="row form-group">
			<div class="col-sm-12">
				Additional Groups:
			</div>
		</div>

		<div class="row form-check mb-5">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group', false, NULL, 'count', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<input 
						type="checkbox" 
						class="form-check-input" 
						name="additional_groups[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" 
						id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8');?>
" 
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_groups']->value, 'ug');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ug']->value) {
?> 
							<?php if ($_smarty_tpl->tpl_vars['group']->value->id == $_smarty_tpl->tpl_vars['ug']->value->group_id) {?> 
								checked
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					> 
					<label class="form-check-label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->description, ENT_QUOTES, 'UTF-8');?>
</label>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<!-- additional groups -->


		<!-- default module -->
		<div class="row form-group">
			<div class="col-sm-12">
				<label for="user-module">Default Module:</label>
				<select name="default_module" class="form-control" id="user-module">
					<option value="">Select a module...</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_modules']->value, 'mod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mod']->value) {
?>
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['default_mod']->value == $_smarty_tpl->tpl_vars['mod']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>

			</div>
		</div>
		<!-- /default module -->


		<!-- additional modules -->
		<div class="row form-check">	
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_modules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
				<div class="col-sm-12 col-lg-6">
					<input type="checkbox" class="form-check-input" name="additional_modules[]" id="module-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->id, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assigned_modules']->value, 'assigned');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['assigned']->value) {
if ($_smarty_tpl->tpl_vars['module']->value->id == $_smarty_tpl->tpl_vars['assigned']->value->module_id) {?> checked<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
					<label class="form-check-label" for="module-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->name, ENT_QUOTES, 'UTF-8');?>
</label>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
		</div>
		<!-- /additional modules -->


		<!-- buttons -->
		<div class="row">
			<div class="col-sm-12 mt-4">
				<button class="btn btn-primary float-right ml-2" type="submit">Save</button>	
				<button type="button" class="btn btn-secondary float-right" onClick="history.go(-1);return true;">Cancel</button>
			</div>
		</div>
		<!-- /buttons -->



</div>
<!-- /page container -->
<?php }
}
