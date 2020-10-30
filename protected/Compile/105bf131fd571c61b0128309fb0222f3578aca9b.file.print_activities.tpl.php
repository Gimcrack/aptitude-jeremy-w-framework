<?php /* Smarty version Smarty-3.1.19, created on 2020-03-19 21:01:13
         compiled from "/var/www/html/aptitudecare/dev/modules/Activities/Views/activities/print_activities.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7734956075dba30a18117a5-51805686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '105bf131fd571c61b0128309fb0222f3578aca9b' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Activities/Views/activities/print_activities.tpl',
      1 => 1583534541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7734956075dba30a18117a5-51805686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dba30a1811d69_05910578',
  'variables' => 
  array (
    'IMAGES' => 0,
    'activitiesArray' => 0,
    'date' => 0,
    'activities' => 0,
    'activity' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dba30a1811d69_05910578')) {function content_5dba30a1811d69_05910578($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?>
	<div class="container">
		<div class="row">
			<div class="text-center">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/aspencreek-logo-black.png" alt="Logo" class="mx-auto d-block"/>
			</div>
		</div>
		<table class="activities">
			<?php  $_smarty_tpl->tpl_vars["activities"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["activities"]->_loop = false;
 $_smarty_tpl->tpl_vars["date"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['activitiesArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["activities"]->key => $_smarty_tpl->tpl_vars["activities"]->value) {
$_smarty_tpl->tpl_vars["activities"]->_loop = true;
 $_smarty_tpl->tpl_vars["date"]->value = $_smarty_tpl->tpl_vars["activities"]->key;
?>
			<tr>
				<th colspan="4"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%A, %B %e"), ENT_QUOTES, 'UTF-8');?>
</th>
			</tr>	
			<?php if (is_array($_smarty_tpl->tpl_vars['activities']->value)) {?>
			<tr>
				<?php  $_smarty_tpl->tpl_vars["activity"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["activity"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["activity"]->key => $_smarty_tpl->tpl_vars["activity"]->value) {
$_smarty_tpl->tpl_vars["activity"]->_loop = true;
?>
				<td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['activity']->value->time_start,"%I:%M %p"), ENT_QUOTES, 'UTF-8');?>
<br /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity']->value->description, ENT_QUOTES, 'UTF-8');?>
</td>
				<?php } ?>
			</tr>	
				<?php }?>
			<?php } ?>
			
		</table>
	</div><?php }} ?>
