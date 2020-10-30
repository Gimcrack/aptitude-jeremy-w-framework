<?php /* Smarty version Smarty-3.1.19, created on 2019-01-30 23:15:21
         compiled from "/var/www/html/aspencreek_dev/protected/Views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10367342125c522f99229ce5-24103337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61f32a2ac9a5fd745fa5a444315bb41cb14c7560' => 
    array (
      0 => '/var/www/html/aspencreek_dev/protected/Views/login/index.tpl',
      1 => 1548890119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10367342125c522f99229ce5-24103337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c522f9922c932_34576639',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c522f9922c932_34576639')) {function content_5c522f9922c932_34576639($_smarty_tpl) {?>
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
