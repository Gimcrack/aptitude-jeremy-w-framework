<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-07 04:40:36
  from '/var/www/html/aptitudecare/dev/protected/Views/public/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb401c4b34909_42713364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7300036b6f3b42847a8ee634dc37774d17d77128' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/public/menu.tpl',
      1 => 1585097073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb401c4b34909_42713364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="container-fluid menu-page">
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
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItems']->value, 'menuItem', false, NULL, 'menuItems', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['total'];
?>
			<div class="col-md py-3 info-item">
				<h6 class="text-strong">
					<?php if ($_smarty_tpl->tpl_vars['menuItem']->value->meal_id == 1) {?>Breakfast<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['menuItem']->value->meal_id == 2) {?>Lunch<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['menuItem']->value->meal_id == 3) {?>Dinner<?php }?>
				</h6>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItem']->value->content, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
					<?php if (!empty($_smarty_tpl->tpl_vars['menu']->value)) {?><p><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
			</div>

		<?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['iteration'] : null) % 3)) {?>
		<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['count']->value++,0,''), ENT_QUOTES, 'UTF-8');?>

		</div>
			<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menuItems']->value['last'] : null)) {?>
			<div class="row">
				<div class="col-lg mt-5">
					<h5><?php echo htmlspecialchars(smarty_modifier_date_format(((string)$_smarty_tpl->tpl_vars['startDate']->value)." + ".((string)$_smarty_tpl->tpl_vars['count']->value)." day","%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</h5>	
				</div>
			</div>
			<div class="row">
			<?php }?>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
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
<?php }
}
