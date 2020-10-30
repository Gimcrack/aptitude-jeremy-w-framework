<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 10:58:36
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/elements/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:632739155d787ad4651c66-08083768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd031216b8621361db547901daf9a384c01adc1fe' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/navigation.tpl',
      1 => 1588705105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '632739155d787ad4651c66-08083768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d787ad465a818_58285877',
  'variables' => 
  array (
    'auth' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d787ad465a818_58285877')) {function content_5d787ad465a818_58285877($_smarty_tpl) {?>
<div class="container" id="sidebar-nav">
	<div class="row">
		<nav class="col-md-2 d-none d-md-block bg-dark sidebar">

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
<?php }} ?>
