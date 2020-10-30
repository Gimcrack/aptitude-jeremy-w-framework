<?php /* Smarty version Smarty-3.1.19, created on 2019-01-30 23:23:48
         compiled from "/var/www/html/aspencreek_dev/protected/Views/login/timeout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20820858555c523204ec5493-66876298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8299378c2cdf593bdaa0a24da23655aec004c889' => 
    array (
      0 => '/var/www/html/aspencreek_dev/protected/Views/login/timeout.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20820858555c523204ec5493-66876298',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c523204edece9_99603031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c523204edece9_99603031')) {function content_5c523204edece9_99603031($_smarty_tpl) {?><div id="timeout">
	<h1 class="text-center">Your session has timed out</h1>
	<p>Your session has timed out due to inactivity.  Please click below to login again.</p>
	<div id="login-link">
		<a href="/?page=login" class="button">Login</a>
	</div>
	
</div><?php }} ?>
