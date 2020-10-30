<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-07 05:05:01
  from '/var/www/html/aptitudecare/dev/protected/Views/public/activities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb4077d17bff2_33486233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b799c10503aee2d71283a0b073bc448e4f189e6' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/public/activities.tpl',
      1 => 1587087895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb4077d17bff2_33486233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="container">
	<h1 class="text-center">Current Activities</h1>

	<div class="row activities">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activities']->value, 'activity', false, 'date');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value => $_smarty_tpl->tpl_vars['activity']->value) {
?>
			<div class="col-12 mt-4 mb-2 info-item info-header-text">
				<h6><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</h6>
			</div>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activity']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
			<div class="col-lg-12">
				<?php if (!empty($_smarty_tpl->tpl_vars['a']->value->description)) {?><p
				><?php if (!empty($_smarty_tpl->tpl_vars['a']->value->time_start)) {
echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value->time_start,"%l:%M %p"), ENT_QUOTES, 'UTF-8');
}?>
				&nbsp;&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value->description, ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div><?php }
}
