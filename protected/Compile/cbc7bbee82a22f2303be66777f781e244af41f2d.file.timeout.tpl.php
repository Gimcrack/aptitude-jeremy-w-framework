<?php /* Smarty version Smarty-3.1.19, created on 2019-03-20 21:16:45
         compiled from "/var/www/html/aptitudecare/protected/Views/login/timeout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9055075695c92adbd111844-95909735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbc7bbee82a22f2303be66777f781e244af41f2d' => 
    array (
      0 => '/var/www/html/aptitudecare/protected/Views/login/timeout.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9055075695c92adbd111844-95909735',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c92adbd113033_22625558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c92adbd113033_22625558')) {function content_5c92adbd113033_22625558($_smarty_tpl) {?><div id="timeout">
	<h1 class="text-center">Your session has timed out</h1>
	<p>Your session has timed out due to inactivity.  Please click below to login again.</p>
	<div id="login-link">
		<a href="/?page=login" class="button">Login</a>
	</div>
	
</div><?php }} ?>
