<?php /* Smarty version Smarty-3.1.19, created on 2020-03-19 20:41:43
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/beverages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9992650245e73d907098143-82873591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '545b2c6a7d40a0473c9c59478f6e1542c375ff23' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/beverages.tpl',
      1 => 1583534556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9992650245e73d907098143-82873591',
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
    'beverages' => 0,
    'meal' => 0,
    'this' => 0,
    'beverage' => 0,
    'bev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e73d9070b2050_48051758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e73d9070b2050_48051758')) {function content_5e73d9070b2050_48051758($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div id="page-header">
  <div id="action-left">
    &nbsp;
  </div>
  <div id="center-title">
    <h1>Beverage Report</h1>
    <?php if ($_smarty_tpl->tpl_vars['isPDF']->value) {?>
      <h2><?php echo htmlspecialchars(smarty_modifier_date_format(time()), ENT_QUOTES, 'UTF-8');?>
</h2>
    <?php }?>
  </div>
  <div id="action-right">
    <?php if ($_smarty_tpl->tpl_vars['auth']->value->isLoggedIn()) {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=reports&amp;action=beverages&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;pdf=true" target="_blank">
      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/print.png" alt="">
    </a>
    <?php }?>
  </div>
</div>



  <?php  $_smarty_tpl->tpl_vars['beverage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['beverage']->_loop = false;
 $_smarty_tpl->tpl_vars['meal'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['beverages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['beverage']->key => $_smarty_tpl->tpl_vars['beverage']->value) {
$_smarty_tpl->tpl_vars['beverage']->_loop = true;
 $_smarty_tpl->tpl_vars['meal']->value = $_smarty_tpl->tpl_vars['beverage']->key;
?>
    <table class="form bev-table">
      <tr>
        <th colspan="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->mealName($_smarty_tpl->tpl_vars['meal']->value), ENT_QUOTES, 'UTF-8');?>
</th>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['bev'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bev']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['beverage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bev']->key => $_smarty_tpl->tpl_vars['bev']->value) {
$_smarty_tpl->tpl_vars['bev']->_loop = true;
?>
      <tr class="form-row">
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bev']->value["name"], ENT_QUOTES, 'UTF-8');?>
</td>
        <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bev']->value["num"], ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <?php } ?>
    </table>
    <div class="page-break"></div>
    <div class="page-header"></div>
  <?php } ?>
<?php }} ?>
