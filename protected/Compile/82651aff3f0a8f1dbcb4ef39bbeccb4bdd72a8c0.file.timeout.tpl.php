<?php /* Smarty version Smarty-3.1.19, created on 2019-03-20 06:20:51
         compiled from "/var/www/html/aspencreekalaska-dashboard/protected/Views/login/timeout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8562538145c91dbc3472288-92330160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82651aff3f0a8f1dbcb4ef39bbeccb4bdd72a8c0' => 
    array (
      0 => '/var/www/html/aspencreekalaska-dashboard/protected/Views/login/timeout.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8562538145c91dbc3472288-92330160',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c91dbc3472890_16859100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c91dbc3472890_16859100')) {function content_5c91dbc3472890_16859100($_smarty_tpl) {?><div id="timeout">
	<h1 class="text-center">Your session has timed out</h1>
	<p>Your session has timed out due to inactivity.  Please click below to login again.</p>
	<div id="login-link">
		<a href="/?page=login" class="button">Login</a>
	</div>
	
</div><?php }} ?>
