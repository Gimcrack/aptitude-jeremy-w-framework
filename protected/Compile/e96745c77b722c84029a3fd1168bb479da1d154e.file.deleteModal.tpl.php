<?php /* Smarty version Smarty-3.1.19, created on 2020-03-31 12:19:22
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/elements/deleteModal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16316827595e7aadd41fe813-40895567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e96745c77b722c84029a3fd1168bb479da1d154e' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/deleteModal.tpl',
      1 => 1585685649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16316827595e7aadd41fe813-40895567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e7aadd41ff563_49910556',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e7aadd41ff563_49910556')) {function content_5e7aadd41ff563_49910556($_smarty_tpl) {?><div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="deleteModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deleteModalLabel">DELETE</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Are you sure you want to do this? Deleting this item cannot be undone. Please confirm that you want to delete this item.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" id="delete" type="button">Yes, Delete</button>
				<button class="btn btn-secondary" type="button" data-dismiss="modal">No, Do not Delete</button>
			</div>
		</div>
	</div>	
</div>
<?php }} ?>
