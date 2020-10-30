<?php /* Smarty version Smarty-3.1.19, created on 2019-05-16 20:26:07
         compiled from "/var/www/html/aptitudecare/modules/Dietary/Views/menu/print_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3096288255cddc75f096913-14825632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b986c1095469475ef6f07cc2f73e2c9c7ce670b' => 
    array (
      0 => '/var/www/html/aptitudecare/modules/Dietary/Views/menu/print_menu.tpl',
      1 => 1553125343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3096288255cddc75f096913-14825632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'location' => 0,
    'menuItems' => 0,
    'day' => 0,
    'menu' => 0,
    'content' => 0,
    'item' => 0,
    'alternates' => 0,
    'beverages' => 0,
    'bev' => 0,
    'nsd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cddc75f0a07f9_58154715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cddc75f0a07f9_58154715')) {function content_5cddc75f0a07f9_58154715($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div class="container print-menu">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="print-menu"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>
 Dining Services</h1>
		</div>
	</div>


	<?php  $_smarty_tpl->tpl_vars["menu"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menu"]->_loop = false;
 $_smarty_tpl->tpl_vars["day"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menu"]->key => $_smarty_tpl->tpl_vars["menu"]->value) {
$_smarty_tpl->tpl_vars["menu"]->_loop = true;
 $_smarty_tpl->tpl_vars["day"]->value = $_smarty_tpl->tpl_vars["menu"]->key;
?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 menu-day-title">
			<strong><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['day']->value,"%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</strong>
		</div>
	</div>

		<div class="row">
			<?php  $_smarty_tpl->tpl_vars["content"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["content"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["content"]->key => $_smarty_tpl->tpl_vars["content"]->value) {
$_smarty_tpl->tpl_vars["content"]->_loop = true;
?>
			<div class="menu-content">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
<br>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	<?php } ?>
	<div class="row">
		<hr>
		<div class="col-xs-12 menu-info">
			When a guest will be joining you for a meal, please provide the kitchen with a 2 hour notice. Thank You!
			If the daily special doesn't appeal to you today, please choose from the following alternate selections
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<h2>Alternate Menu</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alternates']->value->content, ENT_QUOTES, 'UTF-8');?>
</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2>Beverage Options</h2>
		</div>
	</div>
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['bev'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bev']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['beverages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bev']->key => $_smarty_tpl->tpl_vars['bev']->value) {
$_smarty_tpl->tpl_vars['bev']->_loop = true;
?>
		<div class="menu-beverages">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bev']->value->name, ENT_QUOTES, 'UTF-8');?>

		</div>
		<?php } ?>
	</div>
	<div class="row">
		<div class="col-xs-12 menu-info">
			<p>Please contact the Nutrition Services Director, <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nsd']->value->name, ENT_QUOTES, 'UTF-8');?>
</strong> for any questions or comments.</p>
		</div>
	</div>
</div>
<?php }} ?>
