<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-06 09:53:04
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/traycard_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f036500b04677_29655105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e3da337768ff6ca7b37af7ecdd657f722ec57c2' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/patient_info/traycard_options.tpl',
      1 => 1583534553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f036500b04677_29655105 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
  .container{
    width: 75%;
    margin: 20px auto;
    text-align: left;
    font-weight: normal;
    border-collapse: collapse;
  }
</style>

<?php echo '<script'; ?>
>
  $(document).ready(function() {
    $("#traycard").submit(function(e) {
      e.preventDefault();
      var date = $("#selectedDate").val();
      window.open(SITE_URL + "/?module=Dietary&page=patient_info&action=meal_tray_card&patient=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patient']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&date=" + date + "&meal_id=" + $("#meal-id option:selected").val() + "&pdf=true", "_blank");
    });
  });
<?php echo '</script'; ?>
>

<div id="page-header">
  <div id="action-left">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("module"), ENT_QUOTES, 'UTF-8');?>

  </div>
  <div id="center-title">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("selectLocation"), ENT_QUOTES, 'UTF-8');?>

  </div>
</div>


<form id="traycard">
  <table class="center">
    <tr>
      <td>Patient:</td>
      <td class="text-right">
        <select name="patient">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currentPatients']->value, 'patients', false, 'k', 'count', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['patients']->value) {
?>
            <?php if (!empty($_smarty_tpl->tpl_vars['patients']->value->last_name)) {?>
              <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patients']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['patients']->value->public_id == $_smarty_tpl->tpl_vars['patient']->value->public_id) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patients']->value->last_name, ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['patients']->value->first_name, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Date:</td>
      <td class="text-right"><input class="datepicker" name="date" id="selectedDate" /></td>
    </tr>
    <tr>
      <td>Meal:</td>
      <td class="text-right">
          <select id="meal-id" name="meal">
            <option selected="selected" value="all">All</option>
            <option value="1">Breakfast</option>
            <option value="2">Lunch</option>
            <option value="3">Dinner</option>
          </select>
      </td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="text-right" colspan="2"><input type="submit" value="Submit" /></td>
    </tr>
  </table>
</form>

<?php }
}
