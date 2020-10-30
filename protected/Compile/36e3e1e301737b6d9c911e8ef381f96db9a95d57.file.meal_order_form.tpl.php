<?php /* Smarty version Smarty-3.1.19, created on 2019-05-16 23:43:32
         compiled from "/var/www/html/aptitudecare/modules/Dietary/Views/menu/meal_order_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17643304195cddf5a417d902-30801784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36e3e1e301737b6d9c911e8ef381f96db9a95d57' => 
    array (
      0 => '/var/www/html/aptitudecare/modules/Dietary/Views/menu/meal_order_form.tpl',
      1 => 1553125343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17643304195cddf5a417d902-30801784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IMAGES' => 0,
    'location' => 0,
    'startDate' => 0,
    'menuItems' => 0,
    'menu' => 0,
    'alternates' => 0,
    'alternate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cddf5a41d8486_98824739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cddf5a41d8486_98824739')) {function content_5cddf5a41d8486_98824739($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><!-- modules/Dietary/Views/menu/meal_order_form.tpl -->

<div class="meal-order-form">
	<div class="row">
		<div class="col-xs-12 text-center">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/logos_black_reduced/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->logo, ENT_QUOTES, 'UTF-8');?>
" alt="">
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<h2>Daily Patient Meal Order</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-5">Room: ____________</div>
		<div class="col-xs-5 text-right">Date: <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['startDate']->value), ENT_QUOTES, 'UTF-8');?>
</div>
	</div>
	<div class="space-row"></div>

	<!-- Breakfast menu section -->
	<div class="row text-center">
		<div class="col-xs-4"><h3>Breakfast</h3></div>
		<div class="col-xs-2">&nbsp;</div>
		<div class="col-xs-4"><h3>Breakfast Alternate</h3></div>
	</div>
	<div class="row">
		<div class="col-xs-4">
			<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value[0]->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
				<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value, ENT_QUOTES, 'UTF-8');?>
</p>
			<?php } ?>
		</div>

		<div class="col-xs-2 text-center menu-middle-col">OR</div>
		<div class="col-xs-4">
			Special Egg: ______________<br>
			Bacon <br>
			Sausage <br>
			Hot Cereal <br>
			Cold Cereal <br>
			Special Toast: ____________
		</div>
	</div>
	<div class="space-row"></div>


	<!-- Lunch menu section -->
	<div class="row text-center">
		<div class="col-xs-4"><h3>Lunch</h3></div>
		<div class="col-xs-2">&nbsp;</div>
		<div class="col-xs-4"><h3>Lunch Alternate (select one)</h3></div>
	</div>
	<div class="row">
		<div class="col-xs-4">
			<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value[1]->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
				<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value, ENT_QUOTES, 'UTF-8');?>
</p>
			<?php } ?>
		</div>
		<div class="col-xs-2 text-center menu-middle-col">OR</div>
		<div class="col-xs-4">
			<?php  $_smarty_tpl->tpl_vars['alternate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alternate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alternates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alternate']->key => $_smarty_tpl->tpl_vars['alternate']->value) {
$_smarty_tpl->tpl_vars['alternate']->_loop = true;
?>
				<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alternate']->value, ENT_QUOTES, 'UTF-8');?>
</p>
			<?php } ?>
		</div>
	</div>
	<div class="space-row"></div>


	<!-- Dinner menu section -->
	<div class="row text-center">
		<div class="col-xs-4"><h3>Dinner</h3></div>
		<div class="col-xs-2">&nbsp;</div>
		<div class="col-xs-4"><h3>Dinner Alternate (select one)</h3></div>
	</div>
	<div class="row">
		<div class="col-xs-4">
			<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value[2]->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
				<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value, ENT_QUOTES, 'UTF-8');?>
</p>
			<?php } ?>
		</div>
		<div class="col-xs-2 text-center menu-middle-col">OR</div>
		<div class="col-xs-4">
			<?php  $_smarty_tpl->tpl_vars['alternate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alternate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alternates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alternate']->key => $_smarty_tpl->tpl_vars['alternate']->value) {
$_smarty_tpl->tpl_vars['alternate']->_loop = true;
?>
				<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alternate']->value, ENT_QUOTES, 'UTF-8');?>
</p>
			<?php } ?>
		</div>
	</div>
	<div class="space-row"></div>
	<div class="space-row"></div>

	<div class="row">
		<div class="col-xs-12 text-center text-strong">Please fill out your choices &amp; your completed form will be collected today.<br />Food choices may be changed to meet dietary restrictions.</div>
	</div>
</div>
<?php }} ?>
