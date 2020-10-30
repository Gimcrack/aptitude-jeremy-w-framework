<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 15:56:13
  from '/var/www/html/aptitudecare/dev/protected/Views/login/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb34e9d291f68_84987756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dabf28090644076e20cb9b0f0dfcafdd0a154b8' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/login/index.tpl',
      1 => 1587087894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb34e9d291f68_84987756 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container login mt-5">
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

<?php }
}
