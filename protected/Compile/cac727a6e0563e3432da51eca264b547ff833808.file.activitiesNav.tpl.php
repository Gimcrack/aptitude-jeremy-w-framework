<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 11:48:11
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/elements/activitiesNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9222734985d787b65034dd6-32133719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cac727a6e0563e3432da51eca264b547ff833808' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/activitiesNav.tpl',
      1 => 1588708089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9222734985d787b65034dd6-32133719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d787b6503d2d4_89315362',
  'variables' => 
  array (
    'SITE_URL' => 0,
    'location' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d787b6503d2d4_89315362')) {function content_5d787b6503d2d4_89315362($_smarty_tpl) {?><li class="nav-item">
	<a href="#activitiesSection" class="nav-link dropdown-toggle" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="activitiesSection"><i class="fas fa-hiking"></i> Activities</a>
	<div class="collapse" id="activitiesSection" data-parent="#sidebar-nav">
		<ul>
			<li id="current-activities" class="nav-item">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Activities&amp;page=activities&amp;action=index" class="nav-link">Current Activities</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=public-display&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="nav-link" target="_blank">Preview Public Page</a>
			</li>
		</ul>
	</div>
</li>

<!-- <li class="nav-item">
	<a href="#otherSection" class="nav-link dropdown-toggle" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="otherSection">Other</a>
	<div class="collapse" id="otherSection" data-parent="#sidebar-nav">
		<ul class="nav flex-column ml-4">	
			<li class="nav-item">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Activities&amp;page=info&amp;action=add_new&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="nav-link">Add Page</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
?page=public-display&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="nav-link" target="_blank">Preview Public Page</a>
			</li>
		</ul>
	</div>
</li>-->

<?php }} ?>
