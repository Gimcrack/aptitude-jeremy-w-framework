<?php /* Smarty version Smarty-3.1.19, created on 2020-03-06 22:37:43
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/error/no-template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2981534855d9b8c67dbde28-75792781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '549114700fef23e6a8c765e9519588aebb810331' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/error/no-template.tpl',
      1 => 1583534249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2981534855d9b8c67dbde28-75792781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d9b8c67e06741_26753879',
  'variables' => 
  array (
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d9b8c67e06741_26753879')) {function content_5d9b8c67e06741_26753879($_smarty_tpl) {?><h1>We're Sorry!</h1>
<p class="text-center">We cannot find the page you are looking for.</p>

<?php if ($_smarty_tpl->tpl_vars['auth']->value->is_admin()) {?>
	<p class="text-center">The template file is missing</p>
<?php }?><?php }} ?>
