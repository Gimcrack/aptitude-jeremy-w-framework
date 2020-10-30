<?php /* Smarty version Smarty-3.1.19, created on 2019-01-26 00:28:39
         compiled from "/var/www/html/synesis_dev/protected/Views/login/timeout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2289477695c4ba9b7b951b7-68437849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '973e34e05c80528e41685f17be32bdbbddbeb2bd' => 
    array (
      0 => '/var/www/html/synesis_dev/protected/Views/login/timeout.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2289477695c4ba9b7b951b7-68437849',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba9b7b982b3_37937362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba9b7b982b3_37937362')) {function content_5c4ba9b7b982b3_37937362($_smarty_tpl) {?><div id="timeout">
	<h1 class="text-center">Your session has timed out</h1>
	<p>Your session has timed out due to inactivity.  Please click below to login again.</p>
	<div id="login-link">
		<a href="/?page=login" class="button">Login</a>
	</div>
	
</div><?php }} ?>
