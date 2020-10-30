<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 15:53:09
  from '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/add_contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edecf658ecda9_22931344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '319ac7ed1bfb82f6eead0e2a391a6a353ec03696' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/add_contact.tpl',
      1 => 1591315994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edecf658ecda9_22931344 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal" class="container">
	<div class="row mt-5 mb-3">
		<div class="col-12 text-center">
				<h5>Search Existing Contacts</h5>
		</div>
	</div>

	<input type="hidden" id="prospect" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">

	<div class="row">

		<div class="col-sm-4">
	        <div class="form-group">
	            <label for="contact-type">Contact Type</label>
            	<select name="contact_type" id="contact-type" class="form-control">
                   	<option value=""></option>
                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact_type']->value, 'ct');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ct']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ct']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
		</div>

		<div class="col-sm-6">
			<div class="form-group">
			    <label for="contact-name">Name</label>
			    <input type="text" class="form-control" id="contact-name" name="contact" value="">
			    <input type="hidden" id="contact-id">
			</div>
		</div>

		<div class="col-sm-2">
			<label for="add-button">&nbsp;</label><br>
			<button type="button" id="link-contact" class="btn btn-primary" data-dismiss="modal">Add</button>
		</div>
	</div>


	<div class="row m-3">
		<div class="col-12 text-center">
			<h3>or</h3>
		</div>
	</div>

	<div class="row mb-5">
		<div class="col-12 text-white text-center">
			<button type="button" id="createContact" class="btn btn-primary" data-toggle="modal" data-remote="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?module=Admissions&amp;page=admissions&amp;action=resident_contact&amp;prospect_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" data-target="#createNewContact">Create a New Contact</button>
		</div>
	</div>
</div>



<div class="modal fade" id="createNewContact" tabindex="-1" role="dialog" aria-labelledby="addNewContactLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
            	<h3 class="modal-title">Add Contact</h3>
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
</div>


<?php echo '<script'; ?>
>

	$("#contact-name").autocomplete({
		serviceUrl: SITE_URL + "/?module=Admissions&page=admissions&action=fetchContactNames",
		minChars: 4,
		onSelect: function (suggestion) {
			// set the values in the dom
			$(this).val(suggestion.value);
			$("#contact-id").val(suggestion.data);
		}
	});

	$("#link-contact").click(function() {
		var prospect = $("#prospect").val();
		var contact = $("#contact-id").val();
		var contactType = $("#contact-type").val();

		$.post(SITE_URL, {
			module: 'Admissions',
			page: 'admissions',
			action: 'linkContact',
			prospect: prospect,
			contact: contact,
			contact_type: contactType
			}, function (e) {
				location.reload();
			}
		);
	});

	$('#createContact').on('click', function(e){
		$($(this).data("target") + ' .modal-body').load($(this).data("remote"));
	});



<?php echo '</script'; ?>
><?php }
}
