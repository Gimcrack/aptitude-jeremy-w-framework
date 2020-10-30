<?php /* Smarty version Smarty-3.1.19, created on 2020-03-14 01:33:05
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/meal_tray_card.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16607420495d7bf501534ac3-56316409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31f1ef1363abe4c79d44623b0f51fd755928805c' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/meal_tray_card.tpl',
      1 => 1583534552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16607420495d7bf501534ac3-56316409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d7bf501541ed7_57010940',
  'variables' => 
  array (
    'allTrayCards' => 0,
    'trayCardCols' => 0,
    'traycards' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7bf501541ed7_57010940')) {function content_5d7bf501541ed7_57010940($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['allTrayCards']->value) {?>
  <?php  $_smarty_tpl->tpl_vars['traycards'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['traycards']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trayCardCols']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['traycards']->key => $_smarty_tpl->tpl_vars['traycards']->value) {
$_smarty_tpl->tpl_vars['traycards']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['iteration']++;
?>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['traycards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['iteration']++;
?>
      <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['MODULES_DIR']->value)."/Dietary/Views/patient_info/traycard_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['iteration'] % 3)) {?>
        <div class="page-break"></div>
      <?php }?>
    <?php } ?>
  <?php } ?>
<?php } else { ?>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['trayCardCols']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['iteration']++;
?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['MODULES_DIR']->value)."/Dietary/Views/patient_info/traycard_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php } ?>
<?php }?>
<?php }} ?>
