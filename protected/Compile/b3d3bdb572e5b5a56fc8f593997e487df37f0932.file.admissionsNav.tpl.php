<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 13:52:34
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/elements/admissionsNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14123063775eb1b7dbc5ced0-10510674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3d3bdb572e5b5a56fc8f593997e487df37f0932' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/admissionsNav.tpl',
      1 => 1588715549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14123063775eb1b7dbc5ced0-10510674',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5eb1b7dbc63717_47812019',
  'variables' => 
  array (
    'SITE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb1b7dbc63717_47812019')) {function content_5eb1b7dbc63717_47812019($_smarty_tpl) {?><li class="nav-item">
	<a href="#admissionsSection" class="nav-link dropdown-toggle" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="admissionsSection"><i class="fas fa-user-plus"></i> Admissions</a>
	<div class="collapse" id="admissionsSection" data-parent="#sidebar-nav">
		<ul>
			<li id="current-prospects" class="nav-item">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions" class="nav-link">Current Prospects</a>
			</li>
		</ul>
	</div>
</li><?php }} ?>
