<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 15:56:23
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/deleteModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb34ea7da35b7_48173782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60d3b59f558f825b8ddcd3633763f8b5dfc89345' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/deleteModal.tpl',
      1 => 1585685649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb34ea7da35b7_48173782 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="deleteModalLabel">
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
<?php }
}
