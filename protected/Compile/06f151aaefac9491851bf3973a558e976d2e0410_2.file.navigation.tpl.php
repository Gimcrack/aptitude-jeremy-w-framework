<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-20 14:41:13
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec5b209edd3c6_66841491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06f151aaefac9491851bf3973a558e976d2e0410' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/navigation.tpl',
      1 => 1590014463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec5b209edd3c6_66841491 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container" id="sidebar-nav">
	<div class="row">
		<nav class="col-md-2 d-none d-md-block sidebar">

			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasModuleAccess('HomeHealth')) {?>
						<!-- Home health nav links -->
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('homeHealthNav'), ENT_QUOTES, 'UTF-8');?>

						<!-- /home health nav links -->
					<?php } elseif ($_smarty_tpl->tpl_vars['auth']->value->hasModuleAccess('Admissions')) {?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('admissionsNav'), ENT_QUOTES, 'UTF-8');?>

					<?php }?>

					<!-- dietary nav section -->
					<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasModuleAccess('Dietary')) {?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('dietaryNav'), ENT_QUOTES, 'UTF-8');?>

					<?php }?>
					<!-- /dietary nav section -->

					<!-- activities nav section -->
					<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasModuleAccess('Activities')) {?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('activitiesNav'), ENT_QUOTES, 'UTF-8');?>

					<?php }?>
					<!-- activities nav section -->

					<!-- blog nav section -->
					<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasModuleAccess('Blog')) {?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('blogNav'), ENT_QUOTES, 'UTF-8');?>

					<?php }?>
					<!-- /blog nav section -->


					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement('dataTab'), ENT_QUOTES, 'UTF-8');?>

				</ul>
			</div>
		</nav>
	</div>
</div>
<?php }
}
