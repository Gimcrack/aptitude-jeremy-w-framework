<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 23:51:19
         compiled from "/var/www/html/synesis_dev/protected/Views/elements/activitiesNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3535168115c4ba0f7539b71-05010851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97cf3a38eb78fd5d61a420ae348331ce6c3644da' => 
    array (
      0 => '/var/www/html/synesis_dev/protected/Views/elements/activitiesNav.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3535168115c4ba0f7539b71-05010851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'location' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba0f754f5b9_49355756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba0f754f5b9_49355756')) {function content_5c4ba0f754f5b9_49355756($_smarty_tpl) {?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=Activities">Home</a></li>
<li>Other
	<ul>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Activities&amp;page=info&amp;action=add_new&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Add Page</a></li>
		<li><a href="https://dev.aptitudecare.com/?module=Dietary&amp;page=public&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" target="_blank">Preview Public Page</a></li>
	</ul>
</li>

<?php }} ?>
