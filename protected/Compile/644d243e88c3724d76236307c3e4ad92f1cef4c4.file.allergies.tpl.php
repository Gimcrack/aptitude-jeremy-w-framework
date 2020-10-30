<?php /* Smarty version Smarty-3.1.19, created on 2020-03-31 16:35:04
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/allergies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19544246755d98fc1de0c0e3-77483904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '644d243e88c3724d76236307c3e4ad92f1cef4c4' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/allergies.tpl',
      1 => 1585701303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19544246755d98fc1de0c0e3-77483904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d98fc1de1c332_46048282',
  'variables' => 
  array (
    'isPDF' => 0,
    'auth' => 0,
    'SITE_URL' => 0,
    'location' => 0,
    'patients' => 0,
    'patient' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d98fc1de1c332_46048282')) {function content_5d98fc1de1c332_46048282($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><div class="container">   
     <div class="row">
          <div class="col-2"></div>
          <div class="col-8">
             <h1>Allergies Report</h1>
               <?php if ($_smarty_tpl->tpl_vars['isPDF']->value) {?>
               <h2><?php echo htmlspecialchars(smarty_modifier_date_format(time()), ENT_QUOTES, 'UTF-8');?>
</h2>
               <?php }?> 
          </div>
          <div class="col-2 text-right">
               <?php if ($_smarty_tpl->tpl_vars['auth']->value->isLoggedIn()) {?>
               <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=reports&amp;action=allergies&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;pdf=true" target="_blank"><i class="fas fa-print fa-2x"></i></a>
               <?php }?>
          </div>
     </div>
     <div class="table-responsive">
          <table class="table table-striped">
               <thead class="thead-dark">
                    <tr>
                         <th>Room</th>
                         <th>Patient</th>
                         <th>Allergy</th>
                    </tr>
               </thead>
            <?php  $_smarty_tpl->tpl_vars['patient'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['patient']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['patients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['patient']->key => $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['patient']->_loop = true;
?>
            <tr>
              <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->number, ENT_QUOTES, 'UTF-8');?>
</td>
              <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->last_name, ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->first_name, ENT_QUOTES, 'UTF-8');?>
</td>
              <td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['patient']->value->allergy_name)===null||$tmp==='' ? "None" : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
            </tr>
            <?php } ?>
          </table>
     </div>
</div>





<?php }} ?>
