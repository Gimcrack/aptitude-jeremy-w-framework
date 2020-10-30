<?php /* Smarty version Smarty-3.1.19, created on 2020-03-25 11:43:26
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/users/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12483285685d7b17d6c38831-08131996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38801f8f20a59c3f0a859c92016b36f02eeb6dec' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/users/user.tpl',
      1 => 1585165393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12483285685d7b17d6c38831-08131996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d7b17d6c5f738_75562853',
  'variables' => 
  array (
    'page_header' => 0,
    'SITE_URL' => 0,
    'user' => 0,
    'current_location' => 0,
    'current_url' => 0,
    'existing' => 0,
    'additional_locations' => 0,
    'location' => 0,
    'default_location' => 0,
    'k' => 0,
    'loc' => 0,
    'assigned_locations' => 0,
    'groups' => 0,
    'group' => 0,
    'group_id' => 0,
    'user_groups' => 0,
    'ug' => 0,
    'available_modules' => 0,
    'mod' => 0,
    'default_mod' => 0,
    'module' => 0,
    'assigned_modules' => 0,
    'assigned' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7b17d6c5f738_75562853')) {function content_5d7b17d6c5f738_75562853($_smarty_tpl) {?><!-- page container -->
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
					<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['additional_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['default_location']->value==$_smarty_tpl->tpl_vars['location']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
					<?php } ?>
				</select>
			</div>
		</div>
		<!-- /default location -->

		<!-- additional locations -->
		<?php if (count($_smarty_tpl->tpl_vars['additional_locations']->value)>1) {?>
			<?php  $_smarty_tpl->tpl_vars['loc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loc']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['additional_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loc']->key => $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['loc']->key;
?>
			<input type="checkbox" name="additional_locations[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" class="form-check-input" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value->id, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['assigned_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?> <?php if ($_smarty_tpl->tpl_vars['location']->value->id==$_smarty_tpl->tpl_vars['loc']->value->id) {?> checked<?php }?><?php } ?>> 
			<label class="form-check-label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value->name, ENT_QUOTES, 'UTF-8');?>
</label>
			<?php } ?>
		<?php }?>
		<!-- additional locations -->


		<!-- default group -->
		<div class="form-group row">
			<div class="col-sm-12">
				<label for="group">Default Group:</label>
				<select name="group" class="form-control" id="group">
					<option value="">Select a group role...</option>
					<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['group_id']->value==$_smarty_tpl->tpl_vars['group']->value->id) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->description, ENT_QUOTES, 'UTF-8');?>
</option>
					<?php } ?>
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
			<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
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
						<?php  $_smarty_tpl->tpl_vars['ug'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ug']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ug']->key => $_smarty_tpl->tpl_vars['ug']->value) {
$_smarty_tpl->tpl_vars['ug']->_loop = true;
?> 
							<?php if ($_smarty_tpl->tpl_vars['group']->value->id==$_smarty_tpl->tpl_vars['ug']->value->group_id) {?> 
								checked
							<?php }?>
						<?php } ?>
					> 
					<label class="form-check-label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->description, ENT_QUOTES, 'UTF-8');?>
</label>
				</div>
			<?php } ?>
		</div>
		<!-- additional groups -->


		<!-- default module -->
		<div class="row form-group">
			<div class="col-sm-12">
				<label for="user-module">Default Module:</label>
				<select name="default_module" class="form-control" id="user-module">
					<option value="">Select a module...</option>
					<?php  $_smarty_tpl->tpl_vars['mod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mod']->key => $_smarty_tpl->tpl_vars['mod']->value) {
$_smarty_tpl->tpl_vars['mod']->_loop = true;
?>
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['default_mod']->value==$_smarty_tpl->tpl_vars['mod']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
					<?php } ?>
				</select>

			</div>
		</div>
		<!-- /default module -->


		<!-- additional modules -->
		<div class="row form-check">	
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
				<div class="col-sm-12 col-lg-6">
					<input type="checkbox" class="form-check-input" name="additional_modules[]" id="module-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->id, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->id, ENT_QUOTES, 'UTF-8');?>
" <?php  $_smarty_tpl->tpl_vars['assigned'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['assigned']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['assigned_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['assigned']->key => $_smarty_tpl->tpl_vars['assigned']->value) {
$_smarty_tpl->tpl_vars['assigned']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['module']->value->id==$_smarty_tpl->tpl_vars['assigned']->value->module_id) {?> checked<?php }?><?php } ?>>
					<label class="form-check-label" for="module-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->name, ENT_QUOTES, 'UTF-8');?>
</label>
				</div>
				<?php } ?>	
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
<?php }} ?>
