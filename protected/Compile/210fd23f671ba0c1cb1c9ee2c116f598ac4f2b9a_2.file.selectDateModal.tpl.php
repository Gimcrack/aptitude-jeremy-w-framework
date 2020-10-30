<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 15:56:23
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/selectDateModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb34ea7da6aa9_03558755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210fd23f671ba0c1cb1c9ee2c116f598ac4f2b9a' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/selectDateModal.tpl',
      1 => 1586990676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb34ea7da6aa9_03558755 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="selectDateModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">SELECT DATE</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Select the date for which you would like to print the tray cards.</p>
				<input type="text" id="selected-date" class="datepicker">
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" id="deletePost" type="button">Select</button>
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>	
</div>

<?php }
}
