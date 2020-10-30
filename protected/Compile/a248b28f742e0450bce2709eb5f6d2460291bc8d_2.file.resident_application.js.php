<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 07:35:20
  from '/var/www/html/aptitudecare/dev/protected/Views/public/resident_application.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eecdb38abf556_00610856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a248b28f742e0450bce2709eb5f6d2460291bc8d' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/public/resident_application.js',
      1 => 1592580918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eecdb38abf556_00610856 (Smarty_Internal_Template $_smarty_tpl) {
?>$('.datepicker').pickadate({
	max: new Date('now'),
	selectYears: 100,
	selectMonths: true
});

$("#phone").mask("(999) 999-9999");
$("#contact-phone").mask("(999) 999-9999");
$("#pcp-phone").mask("(999) 999-9999");

$("#care-needs").selectize({
	plugins: ['remove_button'],
	delimiter: ',',
	persist: false
});


// diabetes
$("#diabetes").click(function() {
	console.log($(this).val());

	if ($(this).val() == 1) {
		$("#self-manage").show();
	} else {
		$("#self-manage").hide();
	}
});

$("#diabetes1").click(function() {
	console.log($(this).val());

	if ($(this).val() == 0) {
		$("#self-manage").hide();
	} 
});



// dementia wandering
$("#dementia").change(function() {
	console.log($(this).val());
	if ($(this).val() != null && $(this).val() != 1) {
		$("#wandering").show();
	} else {
		$("#wandering").hide();
	}
});

$("#dementia1").click(function() {
	if ($(this).val() == 0) {
		$("#wandering").hide();
	} 
});



// mental health diagnosis
$("#mh-diagnosis").click(function() {
	if ($(this).val() == 1) {
		$("#mh-diagnosis-row").show();
	} 
});

$("#mh-diagnosis1").click(function() {
	if ($(this).val() == 0) {
		$("#mh-diagnosis-row").hide();
	} 
});


$("#chemical-dependencies").click(function() {
	if ($(this).val() == 1) {
		$("#dependency-explanation-row").show();
	} 
});

$("#chemical-dependencies1").click(function() {
	if ($(this).val() == 0) {
		$("#dependency-explanation-row").hide();
	} 
});

<?php }
}
