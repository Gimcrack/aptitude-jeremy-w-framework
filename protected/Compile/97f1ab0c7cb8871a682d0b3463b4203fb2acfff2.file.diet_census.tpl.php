<?php /* Smarty version Smarty-3.1.19, created on 2020-04-07 12:37:05
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/diet_census.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14665540625d98f16572d479-53445890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f1ab0c7cb8871a682d0b3463b4203fb2acfff2' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/diet_census.tpl',
      1 => 1586291825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14665540625d98f16572d479-53445890',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d98f16578d4d9_94661463',
  'variables' => 
  array (
    'auth' => 0,
    'isPDF' => 0,
    'pageUrl' => 0,
    'location' => 0,
    'current_url' => 0,
    'is_pdf' => 0,
    'dietCensus' => 0,
    'diet' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d98f16578d4d9_94661463')) {function content_5d98f16578d4d9_94661463($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div class="container">
	<?php if ($_smarty_tpl->tpl_vars['auth']->value->isLoggedIn()) {?>
	<div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h1>Diet Census</h1>
            <?php if ($_smarty_tpl->tpl_vars['isPDF']->value) {?>
            <h2><?php echo htmlspecialchars(smarty_modifier_date_format(time()), ENT_QUOTES, 'UTF-8');?>
</h2>
            <?php }?> 
          </div>
          <div class="col-2 text-right">
               <?php if ($_smarty_tpl->tpl_vars['auth']->value->isLoggedIn()) {?>
               <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
&amp;pdf=true" target="_blank"><i class="fas fa-print fa-2x"></i></a>
               <?php }?>
          </div>
    </div>
    <?php }?>

	<input type="hidden" id="location" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
	<input type="hidden" id="current-url" name="current_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<div class="table-responsive">
		<table class="table table-striped">
			<?php if (!$_smarty_tpl->tpl_vars['auth']->value->isLoggedIn()) {?>
			<tr>
				<td colspan=6 class="text-center"><h1>Diet Census for <?php echo htmlspecialchars(smarty_modifier_date_format(time()), ENT_QUOTES, 'UTF-8');?>
</h1></td>
			</tr>
			<?php }?>
			<thead <?php if (isset($_smarty_tpl->tpl_vars['is_pdf']->value)) {?>class="thead-dark"<?php }?>>
				<tr>
					<th><a href="" id="room" class="order">Room</a></th>
					<th><a href="" id="patient_name" class="order">Patient Name</a></th>
					<th><a href="" id="diet_order" class="order">Diet Order</a></th>
					<th><a href="" id="allergies" class="order">Allergies</a></th>
					<th><a href="" id="texture" class="order text-left">Texture</a></th>
					<!-- <th><a href="" id="liquid_consistency" class="order">Liquid/Fluid/Orders</a></th> -->
				</tr>
			</thead>
			<?php  $_smarty_tpl->tpl_vars['diet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['diet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dietCensus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['diet']->key => $_smarty_tpl->tpl_vars['diet']->value) {
$_smarty_tpl->tpl_vars['diet']->_loop = true;
?>
			<tr>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diet']->value->room, ENT_QUOTES, 'UTF-8');?>
</td>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diet']->value->patient_name, ENT_QUOTES, 'UTF-8');?>
</td>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diet']->value->diet_order, ENT_QUOTES, 'UTF-8');?>
</td>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diet']->value->allergies, ENT_QUOTES, 'UTF-8');?>
</td>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diet']->value->texture, ENT_QUOTES, 'UTF-8');?>
</td>
				<!-- <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diet']->value->liquid_fluid_order, ENT_QUOTES, 'UTF-8');?>
</td> -->
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
<?php }} ?>
