<?php /* Smarty version Smarty-3.1.19, created on 2019-01-30 23:17:47
         compiled from "/var/www/html/aspencreek_dev/protected/Views/elements/dietaryNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3360144505c52309b6b6f27-75406298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '007e738310f700ceb315a89f3e0f821cd24a9503' => 
    array (
      0 => '/var/www/html/aspencreek_dev/protected/Views/elements/dietaryNav.tpl',
      1 => 1548286689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3360144505c52309b6b6f27-75406298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'location' => 0,
    'auth' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c52309b6d13d5_04846119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c52309b6d13d5_04846119')) {function content_5c52309b6d13d5_04846119($_smarty_tpl) {?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=Dietary&amp;page=dietary&amp;action=index&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Home</a></li>
<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission('manage_menu')) {?>
<li>Info
	<ul>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=info&amp;action=current&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Current Menu</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=info&amp;action=menu_start_date&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Menu Start Date</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=info&amp;action=public_page_items&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Public Page Items</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=info&amp;action=beverages&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Beverage List</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=public&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" target="_blank">Preview Public Page</a></li>
		<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission("create_menu")) {?>
			<li class="permission-access"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=info&amp;action=create">Create Menu</a></li>
			<li class="permission-access"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=info&amp;action=manage">Manage Menus</a></li>
			<li class="permission-access"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=info&amp;action=facility_menus">Facility Menus</a></li>
			<li class="permission-access"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=info&amp;action=corporate_menus">Corporate Menus</a></li>
		<?php }?>

	</ul>
</li>
<?php }?>
<li>Reports
	<ul>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=reports&amp;action=adaptive_equipment&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Adaptive Equipment</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=reports&amp;action=allergies&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Allergies</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=reports&amp;action=beverages&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Beverages</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=reports&amp;action=diet_census&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Diet Census</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=reports&amp;action=snack_report&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Snack Report</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=menu&amp;action=print_menu&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
&amp;pdf=true" target="_blank">Weekly Menu</a></li>
		<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission("create_menu")) {?>
			<li class="permission-access"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=reports&amp;action=menu_changes">Menu Changes</a></li>
		<?php }?>

	</ul>
</li>
<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission('view_photos')) {?>
<li>Photos
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['auth']->value->hasPermission('manage_dietary_photos')) {?>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=photos&amp;action=upload_photos&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">Upload</a></li>
		<?php }?>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->getModule(), ENT_QUOTES, 'ISO-8859-1');?>
&amp;page=photos&amp;action=photos">View Photos</a></li>
	</ul>
</li>
<?php }?>
<?php }} ?>
