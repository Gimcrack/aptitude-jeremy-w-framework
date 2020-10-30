<?php /* Smarty version Smarty-3.1.19, created on 2019-01-26 00:09:19
         compiled from "/var/www/html/synesis_dev/modules/Dietary/Views/public/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13055905885c4ba52f616003-13338892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64d81a9cba0d4cfa689f064c178b3b92eb03b9f8' => 
    array (
      0 => '/var/www/html/synesis_dev/modules/Dietary/Views/public/index.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13055905885c4ba52f616003-13338892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warning' => 0,
    'IMAGES' => 0,
    'location' => 0,
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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4ba52f6346f5_06499998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ba52f6346f5_06499998')) {function content_5c4ba52f6346f5_06499998($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/synesis_dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><!-- modules/Dietary/Views/public/index.tpl -->

<div id="transitionDiv">
	<?php if ($_smarty_tpl->tpl_vars['warning']->value) {?>
	<div id="warning">
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/warning.png" alt="">
	</div>
	<?php }?>

	<!-- Main menu content page -->
	<div id="panel-0" class="rotatingPage">
		<div id="mainContent">
			<div id="mainLogo">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/facility_logo/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->logo, ENT_QUOTES, 'ISO-8859-1');?>
" alt="">
			</div>
			<div id="menuTitle">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/featured_menu.png" alt="">
			</div>
				<div id="menuContent">
					<div class="menu">
						<h2>Breakfast</h2>
						<p class="text-14 time"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[0]->start,"%l:%M %P"), ENT_QUOTES, 'ISO-8859-1');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[0]->end,"%l:%M %P"), ENT_QUOTES, 'ISO-8859-1');?>
</p>
						<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value[0]->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
						<p><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'ISO-8859-1');?>
</p>
						<?php } ?>
					</div>

					<div class="menu">
						<h2>Lunch</h2>
						<p class="text-14 time"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[1]->start,"%l:%M %P"), ENT_QUOTES, 'ISO-8859-1');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[1]->end,"%l:%M %P"), ENT_QUOTES, 'ISO-8859-1');?>
</p>
						<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value[1]->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
						<p><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'ISO-8859-1');?>
</p>
						<?php } ?>
					</div>

					<div class="menu">
						<h2>Dinner</h2>
						<p class="text-14 time"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[2]->start,"%l:%M %P"), ENT_QUOTES, 'ISO-8859-1');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[2]->end,"%l:%M %P"), ENT_QUOTES, 'ISO-8859-1');?>
</p>
						<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value[2]->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
						<p><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'ISO-8859-1');?>
</p>
						<?php } ?>
					</div>

					<div id="altMenu">
						<h2 style="font-size: 16px;">Alternate Menu Items</h2>			
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alternates']->value->content, ENT_QUOTES, 'ISO-8859-1');?>

					</div>
					<div id="guestWelcome">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['locationDetail']->value->menu_greeting, ENT_QUOTES, 'ISO-8859-1');?>

					</div>
			</div>
			<div id="menuPic">
				<div class="raisingTheStandard">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/raising_the_standard.png" alt="">
				</div>
			</div>
		</div>	


	</div>


	<!-- Activities page -->
	<div id="panel-1" class="rotatingPage" style="display: none;">
		<div class="transitionDiv">
			<div id="activitiesContent">	
				<<?php ?>?php if ($facilityId == 12): ?<?php ?>>
				<div id="grangeville-teton">
				<<?php ?>?php else: ?<?php ?>>
				<div id="teton">
				<<?php ?>?php endif; ?<?php ?>>
					<div id="mainLogo">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/facility_logo/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->logo, ENT_QUOTES, 'ISO-8859-1');?>
" alt="">
						<?php if ($_smarty_tpl->tpl_vars['location']->value->id==12) {?>
							<div class="grangevilleActivitiesStandard">
						<?php } else { ?>
							<div class="activitiesStandard">
						<?php }?>
							<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/raising_the_standard.png" alt="Raising the Standard">
						</div>
					</div>
				</div>
				

				<div id="activitiesTitle">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/weekly_activities.png" alt="Weekly Activities">
				</div>
				<?php  $_smarty_tpl->tpl_vars['activity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activity']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['weekActivities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activity']->key => $_smarty_tpl->tpl_vars['activity']->value) {
$_smarty_tpl->tpl_vars['activity']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['activity']->key;
?>
					<div class="activity">
						<h2><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['k']->value,"%A"), ENT_QUOTES, 'ISO-8859-1');?>
</h2>
						<?php if (is_array($_smarty_tpl->tpl_vars['activity']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
							<p>
 								<strong><?php echo htmlspecialchars((($tmp = @smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value->time_start,"%l:%M %P"))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</strong>
 								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value->description, ENT_QUOTES, 'ISO-8859-1');?>

							</p>
							
						<?php } ?>
						<?php }?>
					</div>
				<?php } ?>

			</div>
		</div>
	</div>
<?php }} ?>
