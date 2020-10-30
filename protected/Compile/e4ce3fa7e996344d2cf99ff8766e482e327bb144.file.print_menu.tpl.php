<?php /* Smarty version Smarty-3.1.19, created on 2020-04-15 14:36:07
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/print_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20180511075d817893737136-75346460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4ce3fa7e996344d2cf99ff8766e482e327bb144' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/print_menu.tpl',
      1 => 1586990165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20180511075d817893737136-75346460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d817893790d76_87069015',
  'variables' => 
  array (
    'location' => 0,
    'menuItems' => 0,
    'day' => 0,
    'menu' => 0,
    'content' => 0,
    'item' => 0,
    'alternates' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d817893790d76_87069015')) {function content_5d817893790d76_87069015($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div class="container print-menu">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="print-menu"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>
</h1>
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
				<ul>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<li><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value), ENT_QUOTES, 'UTF-8');?>
</li>
				<?php } ?>
				</ul>
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
</div>
<?php }} ?>
