<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-04 14:41:14
  from '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/new_lead.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed9788adccde8_74361255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffb590ce7591624c0956f529dbef0e1e237a46d7' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/new_lead.js',
      1 => 1591310462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed9788adccde8_74361255 (Smarty_Internal_Template $_smarty_tpl) {
?>$(".show").removeClass("show");
$(".active").removeClass("active");
$("#admissionsSection").addClass("show");
$("#new-prospect").addClass("active");

$(".phone").mask("(999) 999-9999");

$("#searchExistingButton").click(function() {
	$("#searchExisting").collapse('show');
	$("#addNew").collapse('hide');	
});

$("#addNewButton").click(function() {
	$("#addNew").collapse('show');
	$("#searchExisting").collapse('hide');
});



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
	console.log('hello');
	var prospect = $("#prospect").val();
	var contact = $("#contact-id").val();
	var contactType = $("#contact-type").val();
	var pipeline = $("#pipeline").val();

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



<?php }
}
