<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 12:21:23
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/admissionsNav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edfef43261c01_65573068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ff7011ea3d3740ba9b6b75d71e27fdc395f7775' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/admissionsNav.tpl',
      1 => 1591734081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edfef43261c01_65573068 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="nav-item">
	<a href="#admissionsSection" class="nav-link dropdown-toggle" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="admissionsSection"><i class="fas fa-user-plus"></i> Admissions</a>
	<div class="collapse" id="admissionsSection" data-parent="#sidebar-nav">
		<ul>
			<li id="prospects" class="nav-item">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions" class="nav-link">Prospects</a>
			</li>
			<li id="census" class="nav-item">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=census" class="nav-link">Census</a>
			</li>	
			<li id="community-map" class="nav-item">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=community_maps" class="nav-link">Community Map</a>
			</li>
		</ul>
	</div>
</li><?php }
}
