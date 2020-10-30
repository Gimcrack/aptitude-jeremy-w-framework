<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 23:46:00
         compiled from "/var/www/html/synesis_dev/protected/Views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8572796965c4b9db4ad9603-32141375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23e8806a0fbe1c06b6a9d8e98f9cd0aa53ab190c' => 
    array (
      0 => '/var/www/html/synesis_dev/protected/Views/login/index.tpl',
      1 => 1548459955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8572796965c4b9db4ad9603-32141375',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4b9db4adc245_68918691',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4b9db4adc245_68918691')) {function content_5c4b9db4adc245_68918691($_smarty_tpl) {?>
<div class="wrapper">
	 <form method="post" class="form-signin" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/login">
		 <h2 class="form-signin-heading">Login</h2>
			 <input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
			 <input type="hidden" name="submit" value="1" />
			 <input type="text" class="form-control" name="email" placeholder="Email Address" required="true" autofocus="" />
			 <div class="pull-right">@synesisalaska.com</div>
			 <input type="password" class="form-control" name="password" placeholder="Password" required="true"/>
			 <br>
			 <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">
	 </form>
 </div>
<?php }} ?>
