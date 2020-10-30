<?php /* Smarty version Smarty-3.1.19, created on 2019-05-16 20:15:31
         compiled from "/var/www/html/aptitudecare/protected/Views/elements/dataTab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17576109355c92ac534cfe09-21421224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '018338a04a6329557f7f11cc94eaca565a515d11' => 
    array (
      0 => '/var/www/html/aptitudecare/protected/Views/elements/dataTab.tpl',
      1 => 1558026410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17576109355c92ac534cfe09-21421224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c92ac534d67a1_36802725',
  'variables' => 
  array (
    'auth' => 0,
    'this' => 0,
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c92ac534d67a1_36802725')) {function content_5c92ac534d67a1_36802725($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission('edit_data')) {?>
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
