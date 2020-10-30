<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 01:15:27
         compiled from "/var/www/html/riverside_dev/modules/Dietary/Views/reports/menu_changes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6208357945c4a632f518e98-72918176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef2b60208af0ed54c3abbd3acd73eb4c72ecaeab' => 
    array (
      0 => '/var/www/html/riverside_dev/modules/Dietary/Views/reports/menu_changes.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6208357945c4a632f518e98-72918176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'numberOfDays' => 0,
    'key' => 0,
    'numDays' => 0,
    'days' => 0,
    'menuChanges' => 0,
    'url' => 0,
    'change' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4a632f522691_59615816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4a632f522691_59615816')) {function content_5c4a632f522691_59615816($_smarty_tpl) {?><script>
	$(document).ready(function() {
		$("#num-days").change(function() {
			window.location.href = SITE_URL + "/?module=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->module, ENT_QUOTES, 'ISO-8859-1');?>
&page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->page, ENT_QUOTES, 'ISO-8859-1');?>
&action=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->action, ENT_QUOTES, 'ISO-8859-1');?>
&days=" + $("option:selected", this).val();
		});
	});
</script>


<div id="page-header">
	<div id="action-left">
		&nbsp;
	</div>
	<div id="center-title">
		<h1>Menu Changes</h1>
	</div>
	<div id="action-right">
		<select name="num_days" id="num-days">
			<?php  $_smarty_tpl->tpl_vars['days'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['days']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['numberOfDays']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['days']->key => $_smarty_tpl->tpl_vars['days']->value) {
$_smarty_tpl->tpl_vars['days']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['days']->key;
?>
				<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['numDays']->value) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['days']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
			<?php } ?>
		</select>	
	</div>
</div>

<div class="clear"></div>

<table class="view" style="width: 35%">
	<tr>
		<th>Location</th>
		<th>Number of Changes</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['change'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['change']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuChanges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['change']->key => $_smarty_tpl->tpl_vars['change']->value) {
$_smarty_tpl->tpl_vars['change']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['change']->key;
?>
	<tr>
		<td class="bold-link"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['change']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['change']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</a></td>
		<td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['change']->value->count, ENT_QUOTES, 'ISO-8859-1');?>
</td>
	</tr>
	<?php } ?>
</table>


<?php }} ?>
