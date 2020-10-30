<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 01:03:17
         compiled from "/var/www/html/riverside_dev/protected/Views/elements/dataTab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5540471115c4a6055308158-31725012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bda0fa2ec414ab4301c79deb58a3987b80ebbf0' => 
    array (
      0 => '/var/www/html/riverside_dev/protected/Views/elements/dataTab.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5540471115c4a6055308158-31725012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'this' => 0,
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4a605530faf0_05384783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4a605530faf0_05384783')) {function content_5c4a605530faf0_05384783($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission('edit_data')) {?>
<li><a href="" onClick="return true">Data</a>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['this']->value->getModule()=="Admissions"||$_smarty_tpl->tpl_vars['this']->value->getModule()=="HomeHealth") {?>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?page=case_managers&amp;action=manage">Case Managers</a>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission("manage_home_health_clinicians")) {?>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=HomeHealth&amp;page=clinicians&amp;action=manage">Home Health Clinicians</a></li>
			<?php }?>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?page=healthcare_facilities&amp;action=manage">Healthcare Facilities</a></li>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?page=physicians&amp;action=manage">Physicians</a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission("manage_users")) {?>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?page=users&amp;action=manage">Users</a></li>
		<?php }?>
	</ul>
</li>
<?php }?>
<?php }} ?>
