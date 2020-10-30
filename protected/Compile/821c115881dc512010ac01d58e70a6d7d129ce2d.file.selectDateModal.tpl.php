<?php /* Smarty version Smarty-3.1.19, created on 2020-04-15 14:50:17
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/elements/selectDateModal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7271939635e8392800e2001-94401697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '821c115881dc512010ac01d58e70a6d7d129ce2d' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/selectDateModal.tpl',
      1 => 1586990676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7271939635e8392800e2001-94401697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e8392800e2720_32920844',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e8392800e2720_32920844')) {function content_5e8392800e2720_32920844($_smarty_tpl) {?><div class="modal fade" id="selectDateModal" tabindex="-1" role="dialog" aria-hidden="true">
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

<?php }} ?>
