<?php /* Smarty version Smarty-3.1.19, created on 2020-03-24 16:44:35
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/public/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7244860305e5ee4a4d06b35-57982303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cc9003eaa3230579674f94190b4b2bf0f86ea54' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/public/menu.tpl',
      1 => 1585097073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7244860305e5ee4a4d06b35-57982303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e5ee4a4d07a60_14568046',
  'variables' => 
  array (
    'IMAGES' => 0,
    'menuItems' => 0,
    'menuItem' => 0,
    'menu' => 0,
    'count' => 0,
    'alternates' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5ee4a4d07a60_14568046')) {function content_5e5ee4a4d07a60_14568046($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.truncate.php';
?><div class="container-fluid menu-page">
	<div class="row text-center">
		<div class="col-md-4 col-sm-12">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/food-entree.jpg" class="img-fluid float-md-right" alt="">
		</div>
		<div class="col-md-4 col-sm-12">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/food-fruit.jpg" class="img-fluid" alt="">
		</div>
		<div class="col-md-4 col-sm-12">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/food-dessert.jpg" class="img-fluid float-md-left" alt="">
		</div>
	</div>
</div>

<div class="container text-center">
	<h1 class="info-title">Current Menu</h1>
	<div class="row">
		<div class="col-lg">
			<h5><?php echo htmlspecialchars(smarty_modifier_date_format(((string)$_smarty_tpl->tpl_vars['startDate']->value),"%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</h5>
		</div>
	</div>
	<div class="row">			
	<?php  $_smarty_tpl->tpl_vars["menuItem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menuItem"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["menuItem"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["menuItem"]->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["menuItem"]->key => $_smarty_tpl->tpl_vars["menuItem"]->value) {
$_smarty_tpl->tpl_vars["menuItem"]->_loop = true;
 $_smarty_tpl->tpl_vars["menuItem"]->iteration++;
 $_smarty_tpl->tpl_vars["menuItem"]->last = $_smarty_tpl->tpl_vars["menuItem"]->iteration === $_smarty_tpl->tpl_vars["menuItem"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["menuItems"]['last'] = $_smarty_tpl->tpl_vars["menuItem"]->last;
?>
			<div class="col-md py-3 info-item">
				<h6 class="text-strong">
					<?php if ($_smarty_tpl->tpl_vars['menuItem']->value->meal_id==1) {?>Breakfast<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['menuItem']->value->meal_id==2) {?>Lunch<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['menuItem']->value->meal_id==3) {?>Dinner<?php }?>
				</h6>
				<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItem']->value->content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
					<?php if (!empty($_smarty_tpl->tpl_vars['menu']->value)) {?><p><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
				<?php } ?>		
			</div>

		<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['menuItems']['iteration'] % 3)) {?>
		<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['count']->value++,0,''), ENT_QUOTES, 'UTF-8');?>

		</div>
			<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['menuItems']['last']) {?>
			<div class="row">
				<div class="col-lg mt-5">
					<h5><?php echo htmlspecialchars(smarty_modifier_date_format(((string)$_smarty_tpl->tpl_vars['startDate']->value)." + ".((string)$_smarty_tpl->tpl_vars['count']->value)." day","%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</h5>	
				</div>
			</div>
			<div class="row">
			<?php }?>
		<?php }?>
	<?php } ?>	
	<div class="row new-section">
		<div class="col-lg mt-5">
			<h2>Always Available Menu</h2>
			<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alternates']->value->content, ENT_QUOTES, 'UTF-8');?>
</p>
		</div>
	</div>
	<div class="row new-section">
		<div class="col-lg">
			<p class="font-weight-bold"></p>
		</div>
	</div>
</div>
<?php }} ?>
