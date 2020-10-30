<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 12:53:42
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/activitiesNav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb323d61b4694_39530501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5620b3ee0f9640eb75b0cf3ead5463c3c1582b79' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/activitiesNav.tpl',
      1 => 1588708089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb323d61b4694_39530501 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="nav-item">
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

<?php }
}
