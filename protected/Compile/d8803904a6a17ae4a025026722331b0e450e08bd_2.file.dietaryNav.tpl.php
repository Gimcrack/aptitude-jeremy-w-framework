<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 12:53:42
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/dietaryNav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb323d61a4129_48516572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8803904a6a17ae4a025026722331b0e450e08bd' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/dietaryNav.tpl',
      1 => 1588714111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb323d61a4129_48516572 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="nav-item">
	<a href="#dietarySection" class="nav-link dropdown-toggle" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="dietarySection"><i class="fas fa-utensils"></i> Dietary</a>
	<div class="collapse" id="dietarySection" data-parent="#sidebar-nav">
		<ul class="nav flex-column ml-4">
			<li id="current-residents" class="nav-item">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=Dietary&amp;page=dietary&amp;action=index&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="nav-link">Current Residents</a>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission('manage_menu')) {?>
			<li class="nav-item">
				<a href="#infoSection" class="nav-link dropdown-toggle" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="infoSection"><i class="fab fa-elementor"></i> Menu Info</a>
				<div class="collapse" id="infoSection" data-parent="#dietarySection">
					<ul class="nav flex-column ml-4">
						<li id="current-menu" class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=info&amp;action=current&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">Current Menu</a>
						</li>
						<li id="menu-start-date" class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=info&amp;action=menu_start_date&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">Menu Start Date</a>
						</li>
						<li id="public-page-items" class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=info&amp;action=public_page_items&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">Public Page Items</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=info&amp;action=beverages&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">Beverage List</a>
						</li> -->


						<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission("create_menu")) {?>
						<li id="create-menu" class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=info&amp;action=create">Create Menu</a>
						</li>
						<li id="manage-menus" class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=info&amp;action=manage">Manage Menus</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=info&amp;action=facility_menus">Facility Menus</a>
						</li> -->
						<li id="corporate-menus" class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=info&amp;action=corporate_menus">Corporate Menus</a>
						</li>
						<?php }?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=public-display&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" target="_blank">Preview Public Page</a>
						</li>

					</ul>
				</div>
			</li>
			<?php }?>


			<li class="nav-item">
				<a href="#reportsSection" class="nav-link dropdown-toggle" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="reportsSection"><i class="fas fa-table"></i> Reports</a>
				<div class="collapse" id="reportsSection" data-parent="#DietarySection">
					<ul class="nav flex-column ml-4">
						<!-- <li class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=reports&amp;action=adaptive_equipment&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">Adaptive Equipment</a>
						</li> -->
						<!-- <li class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=reports&amp;action=allergies&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">Allergies</a>
						</li> -->
						<!-- <li class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=reports&amp;action=beverages&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">Beverages</a>
						</li> -->
						<li id="diet-census" class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=reports&amp;action=diet_census&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">Diet Census</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=reports&amp;action=snack_report&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">Snack Report</a>
						</li> -->
						<li id="weekly-menu" class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=menu&amp;action=print_menu&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;pdf=true" target="_blank"><i class="fas fa-file-pdf"></i> Weekly Menu</a>
						</li>
						<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission("create_menu")) {?>
						<li id="menu-changes" class="nav-item">
							<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'UTF-8');?>
&amp;page=reports&amp;action=menu_changes">Menu Changes</a>
						</li>
						<?php }?>
					</ul>
				</div>
			</li>
		</ul>
	</div>
</li>
<?php }
}
