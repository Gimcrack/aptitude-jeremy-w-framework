<?php /* Smarty version Smarty-3.1.19, created on 2019-03-08 06:38:20
         compiled from "/var/www/html/aspencreekalaska-dashboard/protected/Views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14709895795c820ddccfb966-49177029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47cd8e9deaa9ec595c57b00f6836d5b877e8a07b' => 
    array (
      0 => '/var/www/html/aspencreekalaska-dashboard/protected/Views/login/index.tpl',
      1 => 1548890119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14709895795c820ddccfb966-49177029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c820ddccfea12_64041896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c820ddccfea12_64041896')) {function content_5c820ddccfea12_64041896($_smarty_tpl) {?>
<div class="wrapper">
	 <form method="post" class="form-signin" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/login">
		 <h2 class="form-signin-heading">Login</h2>
			 <input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
			 <input type="hidden" name="submit" value="1" />
			 <input type="text" class="form-control" name="email" placeholder="Email Address" required="true" autofocus="" />
			 <div class="pull-right">@aspencreekalaska.com</div>
			 <input type="password" class="form-control" name="password" placeholder="Password" required="true"/>
			 <br>
			 <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">
	 </form>
 </div>
<?php }} ?>
