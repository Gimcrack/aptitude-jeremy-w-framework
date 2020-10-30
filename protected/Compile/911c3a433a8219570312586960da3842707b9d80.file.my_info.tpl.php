<?php /* Smarty version Smarty-3.1.19, created on 2020-03-06 03:16:29
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/users/my_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17210655015e61c08deb29f4-69883657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911c3a433a8219570312586960da3842707b9d80' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/users/my_info.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17210655015e61c08deb29f4-69883657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'current_url' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e61c08deb90e7_92807778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e61c08deb90e7_92807778')) {function content_5e61c08deb90e7_92807778($_smarty_tpl) {?><h1>Edit My Account</h1>
<script>
	$(document).ready(function() {
		$("#password-change").validate({
			rules: {
				password: "required",
				password2: {
					equalTo: "#password",
					required: true
				}
			}
		});
	});

	});
</script>


<form name="user" id="edit" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
">
	<input type="hidden" name="page" value="users" />
	<input type="hidden" name="action" value="save_my_info" />
	<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
" />

	<table class="form">
		<tr>
			<td><strong>First Name:</strong></td>			
			<td colspan="2"><strong>Last Name:</strong></td>			
				
		</tr>
		<tr>
			<td><input type="text" name="first_name" id="first-name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->first_name, ENT_QUOTES, 'UTF-8');?>
" size="20"></td>
			<td colspan="2"><input type="text" name="last_name" id="last-name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->last_name, ENT_QUOTES, 'UTF-8');?>
" size="40"></td>
		</tr>
		<tr>
			<td colspan="2"><strong>Email:</strong></td>
			<td><strong>Phone:</strong></td>	
		</tr>
		<tr>
			<td colspan="2"><input type="text" name="email" id="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8');?>
" size="50" /></td>
			<td><input type="text" name="phone" id="phone" value=""></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=users&amp;action=reset_password&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;existing=true" class="button">Reset Password</a></td>

		</tr>

		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td><input type="button" value="Cancel" onClick="history.go(-1);return true;"></td>
			<td colspan="5"><input class="right" type="submit" value="Save" /></td>
		</tr>

	</table>
</form>
<?php }} ?>
