<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 12:53:42
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/dataTab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb323d61c1671_51378564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb7a0615d187f8d38462a243b0644cf511c203ad' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/dataTab.tpl',
      1 => 1588716090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb323d61c1671_51378564 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission('edit_data')) {?>
<li class="nav-item" aria-labelledby="dataDropdown">
	<a href="#dataSection" class="nav-link dropdown-toggle" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="dataSection"><i class="fas fa-database"></i> Data</a>
	<div class="collapse" id="dataSection" data-parent="#sidebar-nav">
		<ul class="nav flex-column ml-4">			
			<?php if ($_smarty_tpl->tpl_vars['this']->value->getModule() == "Admissions" || $_smarty_tpl->tpl_vars['this']->value->getModule() == "HomeHealth") {?>
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

<?php }
}
