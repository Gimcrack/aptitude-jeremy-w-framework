<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-01 16:00:52
  from '/var/www/html/aptitudecare/dev/protected/Views/elements/webpageModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed596b438b135_09698373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '817eaa9d4ea3db949ddecbc16834b1f0e88a6d75' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/elements/webpageModal.tpl',
      1 => 1591056047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed596b438b135_09698373 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="addNewContact" tabindex="-1" role="dialog" aria-labelledby="addNewContactLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
            	<h3 class="modal-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value, ENT_QUOTES, 'UTF-8');?>
</h3>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <img alt="loading" src="resources/img/ajax-loader.gif">
                </p>
            </div>
        </div>
    </div>
</div><?php }
}
