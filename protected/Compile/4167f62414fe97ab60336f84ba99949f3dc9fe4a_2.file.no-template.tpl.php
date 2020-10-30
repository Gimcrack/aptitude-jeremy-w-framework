<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-08 11:42:45
  from '/var/www/html/aptitudecare/dev/protected/Views/error/no-template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb5b635500b51_40391776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4167f62414fe97ab60336f84ba99949f3dc9fe4a' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/error/no-template.tpl',
      1 => 1583534249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb5b635500b51_40391776 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>We're Sorry!</h1>
<p class="text-center">We cannot find the page you are looking for.</p>

<?php if ($_smarty_tpl->tpl_vars['auth']->value->is_admin()) {?>
	<p class="text-center">The template file is missing</p>
<?php }
}
}
