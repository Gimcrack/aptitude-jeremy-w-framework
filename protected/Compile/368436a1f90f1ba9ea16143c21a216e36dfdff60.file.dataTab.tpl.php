<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 14:01:32
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/elements/dataTab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15645222925d787ad4681502-47003653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '368436a1f90f1ba9ea16143c21a216e36dfdff60' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/dataTab.tpl',
      1 => 1588716090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15645222925d787ad4681502-47003653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d787ad468aa82_63345667',
  'variables' => 
  array (
    'auth' => 0,
    'this' => 0,
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d787ad468aa82_63345667')) {function content_5d787ad468aa82_63345667($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission('edit_data')) {?>
<li class="nav-item" aria-labelledby="dataDropdown">
	<a href="#dataSection" class="nav-link dropdown-toggle" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="dataSection"><i class="fas fa-database"></i> Data</a>
	<div class="collapse" id="dataSection" data-parent="#sidebar-nav">
		<ul class="nav flex-column ml-4">			
			<?php if ($_smarty_tpl->tpl_vars['this']->value->getModule()=="Admissions"||$_smarty_tpl->tpl_vars['this']->value->getModule()=="HomeHealth") {?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=case_managers&amp;action=manage">Care Coordinators</a>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission("manage_home_health_clinicians")) {?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=HomeHealth&amp;page=clinicians&amp;action=manage">Home Health Clinicians</a>
			</li>
			<?php }?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=healthcare_facilities&amp;action=manage">Healthcare Facilities</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=physicians&amp;action=manage">Physicians</a>
			</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission("manage_users")) {?>
			<li id="users" class="nav-item">
				<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=users&amp;action=manage">Users</a>
			</li>
			<?php }?>
		</ul>
	</div>
</li>
<?php }?>

<?php }} ?>
