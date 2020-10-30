<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 01:09:08
         compiled from "/var/www/html/riverside_dev/protected/Views/users/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5338367245c4a61b4caa944-22203574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '135d9e47072c8d59db551b20271f60c0384f9485' => 
    array (
      0 => '/var/www/html/riverside_dev/protected/Views/users/user.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5338367245c4a61b4caa944-22203574',
  'function' => 
  array (
  ),
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
    'clinicianTypes' => 0,
    'type' => 0,
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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4a61b4ccfba0_67081770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4a61b4ccfba0_67081770')) {function content_5c4a61b4ccfba0_67081770($_smarty_tpl) {?><script>
	$(document).ready(function () {
		$("#phone").mask("(999) 999-9999");

		var $clinician = $("#clinician");
		var $clinicianRow = $(".clinician-type-cell");
		var $group = $("#group");		

		if ($clinician.val() == '') {
			$clinicianRow.hide();
		} 

		if ($group.val() == 6) {
			$clinicianRow.show();
		}
		
		$("#user").validate({
			rules: {
				first_name: "required",
				last_name: "required",
				email: {
					required: true,
					email: true
				},
				password: "required",
				verify_password: {
					equalTo: "#password",
					required: true
				},
				group: "required",
				default_location: "required"
			}
		}); 

		$("#group").change(function() {
			//	Get the modules available for the selected group type
			$.post(SITE_URL, { page: "users", action: "fetchModulesByGroup", group: $("option:selected", this).val() }, function (e) {
				var count = Object.keys(e).length;
				if (count > 1) {
					$.each(e, function (i, d) {
						$("#user-module").append("<option value=\"" + d.id + "\">" + d.name + "</option>"); 
					});
					$("#module-row").show();
				}
				
			},
			"json"
			);

			//  If group is Home Health Clinician show the clinician row
			if ($(this).val() == 6) {
				$clinicianRow.show();
			} else {
				$clinicianRow.hide();
			}
		});


		$("#email").blur(function() {
			var email = $(this).val();
			$.post(SITE_URL, { page: "users", action: "verify_user", term: email }, function (e) {
				if (e == true) {
					console.log('hello');
					$("<p class=\"error\">This user already exists</p>").appendTo($("#email").parent().parent());
				}
			},
			"json"
			);
		});

	});
</script>


<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_header']->value, ENT_QUOTES, 'ISO-8859-1');?>
</h1>
	
<form name="user" id="edit" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
	<input type="hidden" name="page" value="users" />
	<input type="hidden" name="action" value="save_user" />
	<input type="hidden" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" />
	<input type="hidden" name="location_public_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_location']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
	<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />

	<table class="form">
		<tr>
			<td><strong>First Name:</strong></td>			
			<td colspan="2"><strong>Last Name:</strong></td>			
				
		</tr>
		<tr>
			<td><input type="text" name="first_name" id="first-name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->first_name, ENT_QUOTES, 'ISO-8859-1');?>
" size="20"></td>
			<td colspan="2"><input type="text" name="last_name" id="last-name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->last_name, ENT_QUOTES, 'ISO-8859-1');?>
" size="40"></td>
		</tr>
		<tr>
			<td><strong>Email:</strong></td>
			<td colspan="2"><strong>Phone:</strong></td>	
		</tr>
		<tr>
			<td><input type="text" name="email" id="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'ISO-8859-1');?>
" size="50" /></td>
			<td colspan="2"><input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->phone, ENT_QUOTES, 'ISO-8859-1');?>
"></td>
		</tr>
		<tr>
		<?php if ($_smarty_tpl->tpl_vars['existing']->value) {?>
			<td>&nbsp;</td>
			<td><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?page=users&amp;action=reset_password&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" class="button">Reset Password</a></td>
		<?php } else { ?>
			<td><strong>Password:</strong></td>
			<td colspan="2"><strong>Verify Password:</strong></td>
		</tr>
		<tr>
			<td><input type="password" name="password" id="password"></td>
			<td><input type="password" name="verify_password" id="verify-password"></td>
			<td colspan="2" class="text-right"><input type="checkbox" name="temp_password" value="true"> Temporary Password</td>
		</tr>

		<?php }?>
		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>	
			<td><strong>Default Location:</strong></td>
			<td colspan="3">
				<select name="default_location" id="user-location">
					<option value="">Select a location...</option>
					<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['additional_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['default_location']->value==$_smarty_tpl->tpl_vars['location']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</option>
					<?php } ?>
				</select>
			</td>
		</tr>
	</table>
	<table class="form">
		<tr id="additional-locations">
			<td colspan="4" style="vertical-align:top"><strong>Additional Locations:</strong></td>
		</tr>
		<tr>
			<td style="vertical-align: top">
			<?php  $_smarty_tpl->tpl_vars['loc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loc']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['additional_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['loc']->key => $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['loc']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['iteration']++;
?>
				
				<input type="checkbox" name="additional_locations[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
" <?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['assigned_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?> <?php if ($_smarty_tpl->tpl_vars['location']->value->id==$_smarty_tpl->tpl_vars['loc']->value->id) {?> checked<?php }?><?php } ?> /> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
<br>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['iteration']%10==0) {?>
					</td>
					<td colspan="3" style="vertical-align:top">
				<?php }?>
			<?php } ?>
			</td>
		</tr>

		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>
	</table>
	<table class="form">
		<tr>
			<td><strong>Default Group:</strong></td>
			<td>
				<select name="group" id="group">
					<option value="">Select a group role...</option>
					<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['group_id']->value==$_smarty_tpl->tpl_vars['group']->value->id) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->description, ENT_QUOTES, 'ISO-8859-1');?>
</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="clinician-type-cell"><strong>Clinician Type:</strong></td>
			<td class="clinician-type-cell">
				<select name="clinician" id="clinician">
					<option value="">Select the clinician type...</option>
					<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clinicianTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value->description, ENT_QUOTES, 'ISO-8859-1');?>
</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="3"><strong>Additional Groups:</strong></td>
		</tr>
		<tr>
			<td>
				<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['iteration']++;
?>

					<input type="checkbox" name="additional_groups[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
" <?php  $_smarty_tpl->tpl_vars['ug'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ug']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ug']->key => $_smarty_tpl->tpl_vars['ug']->value) {
$_smarty_tpl->tpl_vars['ug']->_loop = true;
?> <?php if ($_smarty_tpl->tpl_vars['group']->value->id==$_smarty_tpl->tpl_vars['ug']->value->group_id) {?> checked<?php }?><?php } ?> /> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->description, ENT_QUOTES, 'ISO-8859-1');?>
<br>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['iteration']%4==0) {?>
						</td>
						<td style="vertical-align:top">
					<?php }?>
				<?php } ?>
			</td>
		</tr>

		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>	
	</table>
	<table class="form">	
		<tr id="module-row">
			<td><strong>Default Module:</strong></td>
			<td>
				<select name="default_module" id="user-module">
					<option value="">Select a module...</option>

					<?php  $_smarty_tpl->tpl_vars['mod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mod']->key => $_smarty_tpl->tpl_vars['mod']->value) {
$_smarty_tpl->tpl_vars['mod']->_loop = true;
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['default_mod']->value==$_smarty_tpl->tpl_vars['mod']->value->id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="3"><strong>Additional Modules:</strong></td>
		</tr>
		<tr>
			<td>
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
					<input type="checkbox" name="additional_modules[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->id, ENT_QUOTES, 'ISO-8859-1');?>
" <?php  $_smarty_tpl->tpl_vars['assigned'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['assigned']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['assigned_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['assigned']->key => $_smarty_tpl->tpl_vars['assigned']->value) {
$_smarty_tpl->tpl_vars['assigned']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['module']->value->id==$_smarty_tpl->tpl_vars['assigned']->value->module_id) {?> checked<?php }?><?php } ?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
<br>
				<?php } ?>
			</td>
		</tr>

		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td><input type="button" value="Cancel" onClick="history.go(-1);return true;"></td>
			<td><input class="right" type="submit" value="Save" /></td>
		</tr>
	</table>
</form>`<?php }} ?>
