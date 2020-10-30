<?php /* Smarty version Smarty-3.1.19, created on 2020-03-31 10:42:45
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/snack_report.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21059537675e838f2565e634-66089106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a97f6a746ab6346870d79eaf296faddef324419' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/snack_report.tpl',
      1 => 1583534557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21059537675e838f2565e634-66089106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isPDF' => 0,
    'this' => 0,
    'auth' => 0,
    'SITE_URL' => 0,
    'location' => 0,
    'FRAMEWORK_IMAGES' => 0,
    'snacks' => 0,
    'item' => 0,
    'snack' => 0,
    'CSS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e838f25674109_20472312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e838f25674109_20472312')) {function content_5e838f25674109_20472312($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['isPDF']->value) {?>
<style>
  .container{
    width: 75%;
    margin: 20px auto;
    text-align: left;
    font-weight: normal;
    border-collapse: collapse;
  }
</style>

<div id="page-header">
  <div id="action-left">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("module"), ENT_QUOTES, 'UTF-8');?>

  </div>
  <div id="center-title">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['this']->value->loadElement("selectLocation"), ENT_QUOTES, 'UTF-8');?>

  </div>
  <div id="action-right">
    <?php if ($_smarty_tpl->tpl_vars['auth']->value->isLoggedIn()) {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Dietary&amp;page=reports&amp;action=snack_report&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
&amp;pdf=true" target="_blank">
      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/print.png" alt="">
    </a>
    <?php }?>
  </div>
</div>

<h1>Snack Report</h1>
<div class="container">
  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" method="POST">
    <input type="hidden" name="module" value="Dietary">
    <input type="hidden" name="page" value="reports">
    <input type="hidden" name="action" value="snack_report">
    <input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
    <table class="table">
      <tr>
        <th>Room</th>
        <th>Patient Name</th>
        <th>Diet</th>
        <th>Allergies</th>
        <th>Texture</th>
        <th>Snack</th>
        <th>Time</th>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['time'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['snacks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['time']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        <?php  $_smarty_tpl->tpl_vars['snack'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['snack']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['snack']->key => $_smarty_tpl->tpl_vars['snack']->value) {
$_smarty_tpl->tpl_vars['snack']->_loop = true;
?>
        <tr>
          <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->number, ENT_QUOTES, 'UTF-8');?>
</td>
          <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->patient_name, ENT_QUOTES, 'UTF-8');?>
</td>
          <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->diet, ENT_QUOTES, 'UTF-8');?>
</td>
          <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->allergy, ENT_QUOTES, 'UTF-8');?>
</td>
          <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->texture, ENT_QUOTES, 'UTF-8');?>
</td>
          <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->name, ENT_QUOTES, 'UTF-8');?>
</td>
          <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->time, ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>

        <?php } ?>
      <?php } ?>
    </table>
  </form>
</div>
<?php } else { ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CSS']->value, ENT_QUOTES, 'UTF-8');?>
/labels.css">
</head>
<body>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['time'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['snacks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['time']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    <?php  $_smarty_tpl->tpl_vars['snack'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['snack']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['snack']->key => $_smarty_tpl->tpl_vars['snack']->value) {
$_smarty_tpl->tpl_vars['snack']->_loop = true;
?>
      <div class="snack-label">
        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->number, ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->patient_name, ENT_QUOTES, 'UTF-8');?>
</strong><br />
        <strong>Diet: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->diet, ENT_QUOTES, 'UTF-8');?>
</strong><br />
        <strong>Allergies:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->allergy, ENT_QUOTES, 'UTF-8');?>
<br />
        <strong>Snack</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->name, ENT_QUOTES, 'UTF-8');?>
 <strong>Time:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snack']->value->time, ENT_QUOTES, 'UTF-8');?>
<br />
      </div>
    <?php } ?>
  <?php } ?>
</body>
</html>
<?php }?>
<?php }} ?>
