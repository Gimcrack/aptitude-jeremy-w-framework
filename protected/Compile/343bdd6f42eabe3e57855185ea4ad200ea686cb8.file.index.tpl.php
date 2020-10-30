<?php /* Smarty version Smarty-3.1.19, created on 2020-03-14 00:47:18
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/error/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3155247195dba305b1a07f9-95441854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '343bdd6f42eabe3e57855185ea4ad200ea686cb8' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/error/index.tpl',
      1 => 1583534249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3155247195dba305b1a07f9-95441854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dba305b1a80c9_29490378',
  'variables' => 
  array (
    'auth' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dba305b1a80c9_29490378')) {function content_5dba305b1a80c9_29490378($_smarty_tpl) {?><h1>Cannot find the page</h1>
<br>
<br>
<p class="text-center">We're sorry!  We are unable to find the page you are looking for.</p>

<?php if ($_smarty_tpl->tpl_vars['auth']->value->is_admin()) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
	<br>
	<br>
	<h2>Error Message:</h2>
	<p class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8');?>
</p>
	<?php }?>
<?php }?><?php }} ?>
