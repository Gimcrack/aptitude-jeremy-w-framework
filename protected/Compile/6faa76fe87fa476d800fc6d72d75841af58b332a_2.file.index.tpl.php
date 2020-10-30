<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-28 11:08:34
  from '/var/www/html/aptitudecare/dev/protected/Views/public_display/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed00c321f80a4_22593798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6faa76fe87fa476d800fc6d72d75841af58b332a' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/public_display/index.tpl',
      1 => 1585164575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed00c321f80a4_22593798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!-- modules/Dietary/Views/public/index.tpl -->

<div id="transitionDiv">	

	<!-- Main menu content page -->
	<div id="panel-0" class="rotatingPage">

		<div class="row">
			<!-- featured menu heading -->
			<div class="col-12 mt-5">
				<h1 class="text-white">Daily Specials</h1>
			</div>
		</div>
			<!-- /featured menu heading -->

		<!-- menu content -->
		<div class="row mt-5">
			
			<!-- breakfast -->
			<div class="col mb-4">
				<h2>Breakfast</h2>
				<h4><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[0]->start,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[0]->end,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
</h4>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItems']->value[0]->content, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
				<p><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
</p>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<!-- /breakfast -->

			<!-- lunch -->
			<div class="col mb-4">
				<h2>Lunch</h2>
				<h4><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[1]->start,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[1]->end,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
</h4>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItems']->value[1]->content, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
				<p><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
</p>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<!-- /lunch -->

			<!-- dinner -->
			<div class="col mb-4">
				<h2>Dinner</h2>
				<h4><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[2]->start,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[2]->end,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
</h4>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItems']->value[2]->content, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
				<p><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
</p>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<!-- /dinner -->

		</div>
		<!-- /menu content -->

		<!-- alternate items -->
		<div class="row mt-4">
			<div class="col-12">
				<h3>Alternate Menu Items</h3>			
				<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alternates']->value->content, ENT_QUOTES, 'UTF-8');?>
</p>
			</div>
		</div>
		<!-- /alternate items -->

		<!-- welcome message -->
		<div class="row">
			<div class="col-12 mt-4">
				<h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['locationDetail']->value->menu_greeting, ENT_QUOTES, 'UTF-8');?>
</h4>
			</div>
		</div>
		<!-- /welcome message -->
	</div>


	<!-- activities page -->
	<div id="panel-1" class="rotatingPage" style="display: none;">

		<div class="row">
			<!-- weekly activities heading -->
			<div class="col-12 mt-5">
				<h1>Weekly Activities</h1>
			</div>
			<!-- /weekly activities heading -->
		</div>
		


		<!-- activities -->
		<div class="row my-5">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['weekActivities']->value, 'activity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['activity']->value) {
?>
			<div class="col">
				<h2><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['k']->value,"%A"), ENT_QUOTES, 'UTF-8');?>
</h2>
				<?php if (is_array($_smarty_tpl->tpl_vars['activity']->value)) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activity']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
					<p>
						<strong><?php echo htmlspecialchars((($tmp = @smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value->time_start,"%l:%M %P"))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</strong>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value->description, ENT_QUOTES, 'UTF-8');?>

					</p>
					
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>	
		<!-- /activities -->		
	</div>
</div><?php }
}
