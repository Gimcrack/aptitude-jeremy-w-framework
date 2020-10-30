<?php /* Smarty version Smarty-3.1.19, created on 2020-04-15 14:49:22
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/traycard_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5104327505d7bf5015434e6-89869904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d83d1d55b35d9dca55005e53c583bcd03bcf4cf' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/traycard_content.tpl',
      1 => 1586990959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5104327505d7bf5015434e6-89869904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d7bf501556f68_40465588',
  'variables' => 
  array (
    'k' => 0,
    'item' => 0,
    'selectedDate' => 0,
    'IMAGES' => 0,
    'location' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7bf501556f68_40465588')) {function content_5d7bf501556f68_40465588($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?>  <div class="traycard-column">
    <br><br>
    <table class="table traycard <?php if ($_smarty_tpl->tpl_vars['k']->value==2) {?> last-table<?php }?>">
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
      <?php if (($_smarty_tpl->tpl_vars['item']->value->portion_size!="Regular")) {?>
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
      <?php if (($_smarty_tpl->tpl_vars['location']->value->id==9)) {?>
      <tr>
        <td class="text-strong" width="150">Cc Intake:</td>
        <td class="text-center text-10" style="padding-top:5px">120 cc. &nbsp;&nbsp; 240 cc. &nbsp;&nbsp; 360 cc. &nbsp;&nbsp; 480 cc.</td>
      </tr>
      <?php }?>
      <?php if (($_smarty_tpl->tpl_vars['location']->value->id==21)) {?>
      <tr>
        <td>&nbsp;</td>
        <td class="text-center text-strong">Table: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->table_number, ENT_QUOTES, 'UTF-8');?>
</td>
      </tr>
      <?php }?>
    </table>
  </div>
<?php }} ?>
