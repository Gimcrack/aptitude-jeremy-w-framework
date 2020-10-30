<?php /* Smarty version Smarty-3.1.19, created on 2020-04-07 09:06:53
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/users/reset_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18058221505d7b21647098b4-92067173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '903e61755bda729f3f25544ca892e7bed168a6c9' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/users/reset_password.tpl',
      1 => 1583534253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18058221505d7b21647098b4-92067173',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d7b2164713767_39709009',
  'variables' => 
  array (
    'user' => 0,
    'SITE_URL' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7b2164713767_39709009')) {function content_5d7b2164713767_39709009($_smarty_tpl) {?><script>
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
</script>


<h1>Reset Password <br><span class="text-16">for</span><br><span class="text-22 font-normal"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->fullName(), ENT_QUOTES, 'UTF-8');?>
</span></h1>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" id="password-change">
	<input type="hidden" name="page" value="users">
	<input type="hidden" name="action" value="reset_password">
	<input type="hidden" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
	<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<?php if ($_smarty_tpl->tpl_vars['user']->value->temp_password) {?>
		<input type="hidden" name="reset" value="true" />
	<?php }?>

	<table class="form">
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" id="password" required /></td>
		</tr>
		<tr>
			<td>Verify Password:</td>
			<td><input type="password" name="password2" id="password2" required /></td>
		</tr>
		<?php if (!$_smarty_tpl->tpl_vars['user']->value->temp_password) {?>
		<tr>
			<td colspan="2" class="text-right"><input type="checkbox" name="temp_password" id="temp-password" value="true" /> Temporary Password</td>
		</tr>
		<?php }?>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" class="text-right"><input type="submit" value="Save"></td>
		</tr>
	
	</table>
	
</form>

<?php }} ?>
