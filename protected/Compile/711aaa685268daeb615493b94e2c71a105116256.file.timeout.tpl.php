<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 01:27:44
         compiled from "/var/www/html/riverside_dev/protected/Views/login/timeout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7702405465c4a6610ec0404-51884080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '711aaa685268daeb615493b94e2c71a105116256' => 
    array (
      0 => '/var/www/html/riverside_dev/protected/Views/login/timeout.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7702405465c4a6610ec0404-51884080',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4a6610ec3a06_81010801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4a6610ec3a06_81010801')) {function content_5c4a6610ec3a06_81010801($_smarty_tpl) {?><div id="timeout">
	<h1 class="text-center">Your session has timed out</h1>
	<p>Your session has timed out due to inactivity.  Please click below to login again.</p>
	<div id="login-link">
		<a href="/?page=login" class="button">Login</a>
	</div>
	
</div><?php }} ?>
