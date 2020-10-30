<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 00:45:47
         compiled from "/var/www/html/riverside_dev/protected/Views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10442676245c4a5a2b697c47-08019470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '842936faf716359ffc47e27904c162cbcf7d0e62' => 
    array (
      0 => '/var/www/html/riverside_dev/protected/Views/login/index.tpl',
      1 => 1548377145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10442676245c4a5a2b697c47-08019470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4a5a2b69aee1_91956978',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4a5a2b69aee1_91956978')) {function content_5c4a5a2b69aee1_91956978($_smarty_tpl) {?>
<div class="wrapper">
	 <form method="post" class="form-signin" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/login">
		 <h2 class="form-signin-heading">Login</h2>
			 <input type="hidden" name="path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
			 <input type="hidden" name="submit" value="1" />
			 <input type="text" class="form-control" name="email" placeholder="Email Address" required="true" autofocus="" />
			 <div class="pull-right">@riversidealaska.com</div>
			 <input type="password" class="form-control" name="password" placeholder="Password" required="true"/>
			 <br>
			 <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login">
	 </form>
 </div>
<?php }} ?>
