<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 01:04:32
         compiled from "/var/www/html/riverside_dev/modules/Dietary/Views/reports/diet_census.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9279756175c4a60a027ffa0-25224859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99ada12c7bd56397bf214968af52068b6ff77ae4' => 
    array (
      0 => '/var/www/html/riverside_dev/modules/Dietary/Views/reports/diet_census.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9279756175c4a60a027ffa0-25224859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'pageUrl' => 0,
    'FRAMEWORK_IMAGES' => 0,
    'location' => 0,
    'current_url' => 0,
    'dietCensus' => 0,
    'diet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4a60a02900a4_72756988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4a60a02900a4_72756988')) {function content_5c4a60a02900a4_72756988($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/riverside_dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><script>
	$(document).ready(function() {
		$(".order").click(function(e) {
			e.preventDefault();
			var id = $(this).attr("id");
			var url = SITE_URL + "/?module=Dietary&page=reports&action=diet_census&location=" + $("#location").val() + "&orderby=" + id;
			window.location = url;
		});
	});
</script>

<?php if ($_smarty_tpl->tpl_vars['auth']->value->isLoggedIn()) {?>
<div id="page-header">
	<div id="action-left">&nbsp;</div>
	<div id="center-title">
		<h1>Diet Census</h1>
	</div>
  <div id="action-right">
  	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'ISO-8859-1');?>
&amp;pdf=true" target="_blank">
  		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/print.png" alt="">
  	</a>
  </div>
</div>
<?php }?>


<input type="hidden" id="location" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">
<input type="hidden" id="current-url" name="current_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<table class="table">
	<?php if (!$_smarty_tpl->tpl_vars['auth']->value->isLoggedIn()) {?>
	<tr>
		<td colspan=6 class="text-center"><h1>Diet Census for <?php echo htmlspecialchars(smarty_modifier_date_format(time()), ENT_QUOTES, 'ISO-8859-1');?>
</h1></td>
	</tr>
	<?php }?>
	<tr>
		<th><a href="" id="room" class="order">Room</a></th>
		<th><a href="" id="patient_name" class="order">Patient Name</a></th>
		<th style="width: 150px"><a href="" id="diet_order" class="order">Diet Order</a></th>
		<th style="width: 200px;"><a href="" id="allergies" class="order">Allergies</a></th>
		<th><a href="" id="texture" class="order">Texture</a></th>
		<th><a href="" id="liquid_consistency" class="order">Liquid/Fluid/Orders</a></th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['diet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['diet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dietCensus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['diet']->key => $_smarty_tpl->tpl_vars['diet']->value) {
$_smarty_tpl->tpl_vars['diet']->_loop = true;
?>
	<tr class="form-row">
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diet']->value->room, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diet']->value->patient_name, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diet']->value->diet_order, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diet']->value->allergies, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diet']->value->texture, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diet']->value->liquid_fluid_order, ENT_QUOTES, 'ISO-8859-1');?>
</td>
	</tr>
	<?php } ?>
</table>
<?php }} ?>
