<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 16:32:20
  from '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/profile.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eded8945ac744_89931997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd90c9312440bac6ec63991042b6f2cd19ebd182' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/profile.js',
      1 => 1591662714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eded8945ac744_89931997 (Smarty_Internal_Template $_smarty_tpl) {
?>$("#admissionsSection").addClass("show");


$('.datepicker').pickadate({
	max: new Date('now'),
	selectYears: 100,
	selectMonths: true
});

$(".phone").mask("(999) 999-9999");
$("#zip").mask("99999");



$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$(function () {
  $('[data-toggle="popover"]').popover()
});


// set variables for page
var key = 1;



$("#searchExistingButton").click(function() {
	$("#searchExisting").collapse('show');
	$("#addNew").collapse('hide');	
});

$("#addNewButton").click(function() {
	$("#addNew").collapse('show');
	$("#searchExisting").collapse('hide');
});


// add minus icon for collapse element which is open by default
$(".collapse.show").each(function() {
     $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
});

// toggle plus minus icon on show hide of collapse element
$(".collapse").on('show.bs.collapse', function() {
     $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
}).on('hide.bs.collapse', function() {
     $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
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


// Link an existing contact to the new prospect
$("#link-contact").click(function() {
	var contactId = $("#contact-id").val();
	var contactName = $("#contact-name").val();
	var contactTypeName = $("#addExistingContactType option:selected").text();
	var contactType = $("#addExistingContactType").val();

	if ($("input#poa").is(':checked')) {
		var poa = '<i class="fas fa-balance-scale-left" data-toggle="tooltip" data-placement="top" title="Power of Attorney"><input type="hidden" name="contact[' + key +'][poa]" value="1">';
	} else {
		var poa = "";
	}

	if ($("input#primary-contact").is(':checked')) {
		var pContact = '<i class="fas fa-hospital-user" data-toggle="tooltip" data-placement="top" title="Primary Contact"><input type="hidden" name="contact[' + key + '][primary_contact]" value="1">';
	} else {
		var pContact = "";
	}

	// add html contact info to table row
	$("#contact-table-body").append('<tr><td>' + poa + ' ' + pContact + '</td><td>' + contactName + '<input type="hidden" name="contact[' + key + '][id]" value="' + contactId + '"></td><td>' + contactTypeName + '<input type="hidden" name="contact[' + key + '][contact_type]" value="' + contactType + '"></td></tr>');

	// clear values in the autocomplete boxes
	$("#contact-id").val("");
	$("#contact-name").val("");
	$("#addExistingContactType").val("");
	$("input#primary-contact").prop("checked", false);
	$("input#poa").prop("checked", false);
	key++;
});



// create and add a new contact to the prospect
$("#add-contact").click(function(e) {
	e.preventDefault();
	var firstName = $("#contactFirstName").val();
	var lastName = $("#contactLastName").val();
	var email = $("#contactEmail").val();
	var phone = $("#contactPhone").val();
	var address = $("#contactAddress").val();
	var city = $("#contactCity").val();
	var state = $("#contactState option:selected").val();
	var zip = $("#contactZip").val();

	var contactTypeName = $("#addNewContactType option:selected").text();
	var contactType = $("#addNewContactType").val();

	if ($("input#newPoa").is(':checked')) {
		var poa = '<i class="fas fa-balance-scale-left" data-toggle="tooltip" data-placement="top" title="Power of Attorney"><input type="hidden" name="contact[' + key + '][poa]" value="1">';
	} else {
		var poa = "";
	}

	if ($("input#newPrimaryContact").is(':checked')) {
		var primaryContact = '<i class="fas fa-hospital-user" data-toggle="tooltip" data-placement="top" title="Primary Contact"><input type="hidden" name="contact[' + key + '][primary_contact]" value="1">';
	} else {
		var primaryContact = "";
	}

	$.post(SITE_URL, {
		module: 'Admissions',
		page: 'admissions',
		action: 'addNewContact',
		first_name: firstName,
		last_name: lastName,
		email: email,
		phone: phone,
		address: address,
		city: city,
		state: state,
		zip: zip
		}, function (response) {
			// add html contact info to table row
			$("#contact-table-body").append('<tr><td>' + poa + ' ' + primaryContact + '</td><td>' + response.first_name + ' ' + response.last_name + '<input type="hidden" name="contact[' + key + '][id]" value="' + response.id + '"></td><td>' + contactTypeName + '<input type="hidden" name="contact[' + key + '][contact_type]" value="' + contactType + '"></td></tr>');

			$("#contactFirstName").val("");
			$("#contactLastName").val("");
			$("#contactEmail").val("");
			$("#contactPhone").val("");
			$("#contactAddress").val("");
			$("#contactCity").val("");
			$("#contactState option:selected").val("");
			$("#contactZip").val("");

			$("#addNewContactType option:selected").text("");
			$("#addNewContactType").val("");
			$("input#newPrimaryContact").prop('checked', false);
			$("input#newPoa").prop('checked', false);

			key++;

		}
	);
});



$('#deleteModal').on('shown.bs.modal', function(event) {
	var triggerElement = $(event.relatedTarget);
	var row = $(triggerElement).parent().parent();

	var prospectId = triggerElement.siblings('.prospect-id').val();
	var contactId = triggerElement.siblings('.contact-id').val();
	var contactLink = triggerElement.siblings('.contact-link').val();

	$('#delete').click(function() {
		$.post(SITE_URL, {
			module: 'Admissions',
			page: 'admissions',
			action: 'unlink_contact',
			prospect: prospectId,
			contact: contactId,
			contact_link: contactLink
			}, function (e) {
				console.log(e);
				$("#deleteModal").modal('toggle');
				row.fadeOut('slow');

			}
		);
	});

});


// add a new file
$(document).on('click', '.add-file', function() {
	// use ajax to save the file?

	var $row = $(this).parent().parent();
	// clone the file upload row
	$(".file-select").clone().appendTo("#file-card");
	$(".add-file").addClass("active-button");
	// remove the file-select class so if we add more rows we only add 1 at a time
	$row.removeClass("file-select");
	// remove the add button so it is only on the last row
	$(this).remove();
});


$('.modal-webpage').on('click', function(){
	$($(this).data("target") + ' .modal-body').load($(this).data("remote"));
});

<?php }
}
