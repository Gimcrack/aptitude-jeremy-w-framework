<?php /* Smarty version Smarty-3.1.19, created on 2020-03-25 11:29:58
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/public_display/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12863696435e7a3a8eb9ba13-23594168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ac9cb824a29fc5add6398a0a32d29fe64397cd8' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/public_display/index.tpl',
      1 => 1585164575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12863696435e7a3a8eb9ba13-23594168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e7a3a8ebb2768_65820680',
  'variables' => 
  array (
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
<?php if ($_valid && !is_callable('content_5e7a3a8ebb2768_65820680')) {function content_5e7a3a8ebb2768_65820680($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><!-- modules/Dietary/Views/public/index.tpl -->

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
			<div class="col mb-4">
				<h2>Lunch</h2>
				<h4><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[1]->start,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[1]->end,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
</h4>
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
			<div class="col mb-4">
				<h2>Dinner</h2>
				<h4><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[2]->start,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['meal']->value[2]->end,"%l:%M %P"), ENT_QUOTES, 'UTF-8');?>
</h4>
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
