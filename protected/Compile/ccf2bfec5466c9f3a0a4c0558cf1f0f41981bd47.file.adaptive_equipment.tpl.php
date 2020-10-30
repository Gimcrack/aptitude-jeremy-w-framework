<?php /* Smarty version Smarty-3.1.19, created on 2020-04-15 14:54:13
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/adaptive_equipment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10645942445e613b93d25dd6-76128969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccf2bfec5466c9f3a0a4c0558cf1f0f41981bd47' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/adaptive_equipment.tpl',
      1 => 1586991249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10645942445e613b93d25dd6-76128969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e613b93d8af01_34154388',
  'variables' => 
  array (
    'auth' => 0,
    'isPDF' => 0,
    'SITE_URL' => 0,
    'location' => 0,
    'patients' => 0,
    'patient' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e613b93d8af01_34154388')) {function content_5e613b93d8af01_34154388($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div class="container">
  <?php if ($_smarty_tpl->tpl_vars['auth']->value->isLoggedIn()) {?>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <h1>Adaptive Equipment Report</h1>
      <?php if ($_smarty_tpl->tpl_vars['isPDF']->value) {?>
      <h2><?php echo htmlspecialchars(smarty_modifier_date_format(time()), ENT_QUOTES, 'UTF-8');?>
</h2>
      <?php }?>
    </div>
    <div class="col-md-2 text-right">     
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=reports&amp;action=adaptive_equipment&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;pdf=true" target="_blank">
        <i class="fas fa-print fa-2x"></i>
      </a>
    </div>
  </div>
  <?php }?>


  <table class="table">
  	<thead class="table-dark">
      <?php if (!$_smarty_tpl->tpl_vars['auth']->value->isLoggedIn()) {?>
      <tr>
        <th colspan="3"><h2 class="text-center">Adaptive Equipment Report</h2></th>
      </tr>
      <?php }?>
      <tr>
    		<th>Room</th>	
    		<th>Patient</th>
    		<th>Adaptive Equipment</th>
    	</tr>
    </thead>
    <tbody>
    	<?php  $_smarty_tpl->tpl_vars['patient'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['patient']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['patients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['patient']->key => $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['patient']->_loop = true;
?>
    	<tr>
    		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->number, ENT_QUOTES, 'UTF-8');?>
</td>
    		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->fullName(), ENT_QUOTES, 'UTF-8');?>
</td>
    		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->ae_name, ENT_QUOTES, 'UTF-8');?>
</td>
    	</tr>
    	<?php } ?>
    </tbody>
  </table>
</div><?php }} ?>
