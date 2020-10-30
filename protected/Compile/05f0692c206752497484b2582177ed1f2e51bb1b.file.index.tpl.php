<?php /* Smarty version Smarty-3.1.19, created on 2020-04-17 07:35:20
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3892973575d79177b2ef6d4-72615759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05f0692c206752497484b2582177ed1f2e51bb1b' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/login/index.tpl',
      1 => 1587087894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3892973575d79177b2ef6d4-72615759',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d79177b335644_69999323',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d79177b335644_69999323')) {function content_5d79177b335644_69999323($_smarty_tpl) {?><div class="container login mt-5">
	<h1>Login</h2>
	 <form method="post" class="form-signin" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/login">
		<div class="form-group">
			<input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		 	<input type="hidden" name="submit" value="1">
			<label for="email">Email Address</label>
			<input type="email" class="form-control" name="email" required="true">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" name="password" required="true">
		</div>

		<button type="submit" class="btn btn-primary float-right">Submit</button>
	 </form>

</div>

<?php }} ?>
