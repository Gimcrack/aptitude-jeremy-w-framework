<?php /* Smarty version Smarty-3.1.19, created on 2020-04-16 21:48:59
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/public/activities.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19659116155e5f040ccce956-99510341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f22607843c4bed162c1683b40085e2c466cb8df' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/public/activities.tpl',
      1 => 1587087895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19659116155e5f040ccce956-99510341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e5f040cccef09_06119509',
  'variables' => 
  array (
    'activities' => 0,
    'date' => 0,
    'activity' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5f040cccef09_06119509')) {function content_5e5f040cccef09_06119509($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div class="container">
	<h1 class="text-center">Current Activities</h1>

	<div class="row activities">
		<?php  $_smarty_tpl->tpl_vars["activity"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["activity"]->_loop = false;
 $_smarty_tpl->tpl_vars["date"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['activities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["activity"]->key => $_smarty_tpl->tpl_vars["activity"]->value) {
$_smarty_tpl->tpl_vars["activity"]->_loop = true;
 $_smarty_tpl->tpl_vars["date"]->value = $_smarty_tpl->tpl_vars["activity"]->key;
?>
			<div class="col-12 mt-4 mb-2 info-item info-header-text">
				<h6><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%A, %B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</h6>
			</div>
			<?php  $_smarty_tpl->tpl_vars["a"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["a"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["a"]->key => $_smarty_tpl->tpl_vars["a"]->value) {
$_smarty_tpl->tpl_vars["a"]->_loop = true;
?>
			<div class="col-lg-12">
				<?php if (!empty($_smarty_tpl->tpl_vars['a']->value->description)) {?><p
				><?php if (!empty($_smarty_tpl->tpl_vars['a']->value->time_start)) {?><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value->time_start,"%l:%M %p"), ENT_QUOTES, 'UTF-8');?>
<?php }?>
				&nbsp;&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value->description, ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
			</div>
			<?php } ?>
		<?php } ?>
	</div>
</div><?php }} ?>
