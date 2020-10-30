<?php /* Smarty version Smarty-3.1.19, created on 2019-05-16 20:25:48
         compiled from "/var/www/html/aptitudecare/modules/Dietary/Views/reports/allergies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5926321565cddc74c4cd5d1-17729605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71e79e0d606142722420f2ba8ec26aa81ec7a0d2' => 
    array (
      0 => '/var/www/html/aptitudecare/modules/Dietary/Views/reports/allergies.tpl',
      1 => 1553125343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5926321565cddc74c4cd5d1-17729605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isPDF' => 0,
    'auth' => 0,
    'SITE_URL' => 0,
    'location' => 0,
    'FRAMEWORK_IMAGES' => 0,
    'patients' => 0,
    'patient' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cddc74c4d8392_56523855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cddc74c4d8392_56523855')) {function content_5cddc74c4d8392_56523855($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div id="page-header">
  <div id="action-left">
    &nbsp;
  </div>
  <div id="center-title">
    <h1>Allergies Report</h1>
    <?php if ($_smarty_tpl->tpl_vars['isPDF']->value) {?>
      <h2><?php echo htmlspecialchars(smarty_modifier_date_format(time()), ENT_QUOTES, 'UTF-8');?>
</h2>
    <?php }?>
  </div>
  <div id="action-right">
  	<?php if ($_smarty_tpl->tpl_vars['auth']->value->isLoggedIn()) {?>
  	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=reports&amp;action=allergies&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;pdf=true" target="_blank">
  		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/print.png" alt="">
  	</a>
  	<?php }?>
  </div>
</div>

<table class="table">
  <tr>
    <th width="75">Room</th>
    <th width="250">Patient</th>
    <th width="500">Allergy</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['patient'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['patient']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['patients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['patient']->key => $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['patient']->_loop = true;
?>
  <tr class="form-row">
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->number, ENT_QUOTES, 'UTF-8');?>
</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->last_name, ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->first_name, ENT_QUOTES, 'UTF-8');?>
</td>
    <td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['patient']->value->allergy_name)===null||$tmp==='' ? "None" : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
  </tr>
  <?php } ?>
</table><?php }} ?>
