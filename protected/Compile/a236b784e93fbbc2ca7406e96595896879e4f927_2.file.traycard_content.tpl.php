<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-28 11:12:13
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/traycard_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed00d0d7e65c4_25310560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a236b784e93fbbc2ca7406e96595896879e4f927' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/traycard_content.tpl',
      1 => 1586990959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed00d0d7e65c4_25310560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
  <div class="traycard-column">
    <br><br>
    <table class="table traycard <?php if ($_smarty_tpl->tpl_vars['k']->value == 2) {?> last-table<?php }?>">
      <tr>
        <td colspan="2" class="text-center text-20 text-strong"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->number, ENT_QUOTES, 'UTF-8');?>
 &mdash; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->patient_name, ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <tr>
        <td colspan="2" class="text-strong text-18 text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->meal_name, ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <?php if ($_smarty_tpl->tpl_vars['item']->value->birthday) {?>
      <tr>
        <td colspan="2" class="text-green text-center text-18">Happy Birthday!</td>
      </tr>
      <?php }?>
      <tr>
        <td class="text-strong">Diet Order:</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->diet_orders, ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <?php if (($_smarty_tpl->tpl_vars['item']->value->portion_size != "Regular")) {?>
      <tr>
        <td class="text-strong">Portion Size:</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->portion_size, ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <?php }?>
      <tr>
        <td class="text-strong">Texture:</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->textures, ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <tr>
        <td class="text-strong">Adaptive Equipment:</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->adapt_equip, ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <?php if (!empty($_smarty_tpl->tpl_vars['item']->value->special_reqs)) {?>
      <tr>
        <td class="text-strong">Special Requests:</td>
        <td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value->special_reqs)===null||$tmp==='' ? "None" : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <?php }?>
      <tr>
        <td class="text-strong">Other:</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->orders, ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <tr>
        <td class="text-strong">Beverages:</td>
        <td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item']->value->beverages)===null||$tmp==='' ? "None" : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <tr>
        <td class="text-strong">Do Not Serve:</td>
        <td><?php echo htmlspecialchars(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['item']->value->dislikes), ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" class="text-center text-18"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['selectedDate']->value), ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" class="text-center"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/aspencreek-logo.png" alt=""></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="text-red text-italics text-strong">Allergies:</td>
        <td class="text-red text-italics text-strong"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->allergies, ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>

      <tr>
        <td class="text-strong" width="150">Percent Consumed:</td>
        <td class="text-center text-10" style="padding-top:5px;">0-25 &nbsp;&nbsp; 26-50 &nbsp;&nbsp; 51-75 &nbsp;&nbsp; 76-100</td>
      </tr>
      <?php if (($_smarty_tpl->tpl_vars['location']->value->id == 9)) {?>
      <tr>
        <td class="text-strong" width="150">Cc Intake:</td>
        <td class="text-center text-10" style="padding-top:5px">120 cc. &nbsp;&nbsp; 240 cc. &nbsp;&nbsp; 360 cc. &nbsp;&nbsp; 480 cc.</td>
      </tr>
      <?php }?>
      <?php if (($_smarty_tpl->tpl_vars['location']->value->id == 21)) {?>
      <tr>
        <td>&nbsp;</td>
        <td class="text-center text-strong">Table: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->table_number, ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <?php }?>
    </table>
  </div>
<?php }
}
