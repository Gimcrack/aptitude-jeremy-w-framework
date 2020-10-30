<?php /* Smarty version Smarty-3.1.19, created on 2019-03-20 23:09:23
         compiled from "/var/www/html/aptitudecare/protected/Views/elements/activitiesNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9860451295c92c82344fba2-02448256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02536d88b0f3fe01b267190d7edb20fa94ae1af4' => 
    array (
      0 => '/var/www/html/aptitudecare/protected/Views/elements/activitiesNav.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9860451295c92c82344fba2-02448256',
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
  'unifunc' => 'content_5c92c823452896_60864938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c92c823452896_60864938')) {function content_5c92c823452896_60864938($_smarty_tpl) {?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
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
