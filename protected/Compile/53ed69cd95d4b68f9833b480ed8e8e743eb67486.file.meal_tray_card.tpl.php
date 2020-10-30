<?php /* Smarty version Smarty-3.1.19, created on 2019-05-16 20:33:29
         compiled from "/var/www/html/aptitudecare/modules/Dietary/Views/patient_info/meal_tray_card.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9080010765cddc919c792e4-95140931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53ed69cd95d4b68f9833b480ed8e8e743eb67486' => 
    array (
      0 => '/var/www/html/aptitudecare/modules/Dietary/Views/patient_info/meal_tray_card.tpl',
      1 => 1553125343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9080010765cddc919c792e4-95140931',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allTrayCards' => 0,
    'trayCardCols' => 0,
    'traycards' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cddc919c83037_74477019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cddc919c83037_74477019')) {function content_5cddc919c83037_74477019($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['allTrayCards']->value) {?>
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
