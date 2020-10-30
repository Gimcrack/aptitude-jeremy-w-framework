<?php /* Smarty version Smarty-3.1.19, created on 2019-05-16 19:23:44
         compiled from "/var/www/html/aptitudecare/protected/Views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18482201885c92a4032bbcb4-15886640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9632a7b3e56dea1f533ed04fada563507cbdff28' => 
    array (
      0 => '/var/www/html/aptitudecare/protected/Views/login/index.tpl',
      1 => 1558034622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18482201885c92a4032bbcb4-15886640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c92a4032c2d50_97274178',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c92a4032c2d50_97274178')) {function content_5c92a4032c2d50_97274178($_smarty_tpl) {?>
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
