<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-02 17:03:41
  from '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/assign_room.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed6f6ed55a1b1_05969616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e48628ba31636bbd40cdfbb8b624e99ec116c708' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/assign_room.tpl',
      1 => 1591146182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed6f6ed55a1b1_05969616 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="assign-room" class="container">
	<h1>Assign a Room <span class="text-16">for</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->first_name, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->last_name, ENT_QUOTES, 'UTF-8');?>
</h1>

	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
		<input type="hidden" name="module" value="Admissions">
		<input type="hidden" name="page" value="admissions">
		<input type="hidden" name="action" value="save_room_assignment">
		<input type="hidden" name="prospect" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">

		<div class="row mt-5">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms']->value, 'room', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['room']->value) {
?>
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 mt-3">
				<div class="form-check">
				    <input type="radio" id="room<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" name="room" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['room']->value->id, ENT_QUOTES, 'UTF-8');?>
" class="form-check-input">
				    <label for="room<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-check-label"><?php if (!isset($_smarty_tpl->tpl_vars['room']->value->first_name)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['room']->value->number, ENT_QUOTES, 'UTF-8');
}?></label>
				</div>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
		</div>
		<div class="col-12 mt-5 text-right">
			<button type="submit" class="btn btn-primary">Assign Room</button>
		</div>
	</form>


</div><?php }
}
