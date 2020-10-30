<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 13:30:55
  from '/var/www/html/aptitudecare/dev/protected/Views/error/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb32c8ff38127_78760627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b91d5d05e47b7ec0fe90df90c2fb70aa9d68a1bd' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/error/index.tpl',
      1 => 1583534249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb32c8ff38127_78760627 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Cannot find the page</h1>
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
	<?php }
}
}
}
