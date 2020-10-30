<?php /* Smarty version Smarty-3.1.19, created on 2020-03-24 08:45:16
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/public_display/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2571262625e793379381a85-95571374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efbc5b59bc9961eb144215133251f802dbdc14ab' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/public_display/index.tpl',
      1 => 1585068315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2571262625e793379381a85-95571374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e79337939af53_61078749',
  'variables' => 
  array (
    'warning' => 0,
    'IMAGES' => 0,
    'meal' => 0,
    'menuItems' => 0,
    'menu' => 0,
    'alternates' => 0,
    'locationDetail' => 0,
    'weekActivities' => 0,
    'k' => 0,
    'activity' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e79337939af53_61078749')) {function content_5e79337939af53_61078749($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><!-- modules/Dietary/Views/public/index.tpl -->

<div id="transitionDiv">

<!-- 	<?php if ($_smarty_tpl->tpl_vars['warning']->value) {?>
	<div id="warning">
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/warning.png" alt="">
	</div>
	<?php }?>
 -->
 		
	<!-- logo -->
	<div class="row">		
		<div class="col-12">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/aspencreek-logo-white.png" class="img-fluid"  alt="">
		</div>
	</div>
	<!-- /logo -->


	<!-- Main menu content page -->
	<div id="panel-0" class="rotatingPage">
		
		<!-- featured menu heading -->
		<div class="row rotatingPage">
			<div class="col-12 my-2">
				<h1 class="text-white">Featured Menu</h1>
			</div>
		</div>
		<!-- /featured menu heading -->

		<!-- menu content -->
		<div class="row">
			
			<!-- breakfast -->
			<div class="col-lg-4 col-sm-12 mb-4">
				<h2>Breakfast</h2>
				<p class="text-14 time"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[0]->start,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[0]->end,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
</p>
				<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value[0]->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
				<p><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
</p>
				<?php } ?>
			</div>
			<!-- /breakfast -->

			<!-- lunch -->
			<div class="col-lg-4 col-sm-12 mb-4">
				<h2>Lunch</h2>
				<p class="text-14 time"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[1]->start,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[1]->end,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
</p>
				<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value[1]->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
				<p><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
</p>
				<?php } ?>
			</div>
			<!-- /lunch -->

			<!-- dinner -->
			<div class="col-lg-4 col-sm-12 mb-4">
				<h2>Dinner</h2>
				<p class="text-14 time"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[2]->start,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[2]->end,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
</p>
				<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value[2]->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
				<p><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
</p>
				<?php } ?>
			</div>
			<!-- /dinner -->

		</div>
		<!-- /menu content -->

		<!-- alternate items -->
		<div class="row">
			<div class="col-12">
				<h3>Alternate Menu Items</h3>			
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alternates']->value->content, ENT_QUOTES, 'UTF-8');?>

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

		<!-- weekly activities heading -->
		<div class="row">
			<div class="col-12 mb-4">
				<h1>Weekly Activities</h1>
			</div>
		</div>
		<!-- /weekly activities heading -->

		<!-- activities -->
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['activity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activity']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['weekActivities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activity']->key => $_smarty_tpl->tpl_vars['activity']->value) {
$_smarty_tpl->tpl_vars['activity']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['activity']->key;
?>
			<div class="col">
				<h2><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['k']->value,"%A"), ENT_QUOTES, 'UTF-8');?>
</h2>
				<?php if (is_array($_smarty_tpl->tpl_vars['activity']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
					<p>
						<strong><?php echo htmlspecialchars((($tmp = @smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value->time_start,"%l:%M %P"))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</strong>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value->description, ENT_QUOTES, 'UTF-8');?>

					</p>
					
				<?php } ?>
				<?php }?>
			</div>
			<?php } ?>
		</div>	
		<!-- /activities -->		
	</div>
</div><?php }} ?>
