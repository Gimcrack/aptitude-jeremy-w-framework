<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-12 10:35:16
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/current.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebaec640ca3b7_86667932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0a2961dec3fac4120838d2f6f3555c188c92ba3' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/current.js',
      1 => 1588713965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebaec640ca3b7_86667932 (Smarty_Internal_Template $_smarty_tpl) {
?>$("#location").change(function() {
	var location = $("#location option:selected").val();
	window.location.href = SITE_URL + "/?module=Dietary&page=info&action=current&location=" + location;
});

$(".active").removeClass("active");
$(".show").removeClass("show");
$("#dietarySection").addClass("show");
$("#infoSection").addClass("show");
$("#current-menu").addClass("active");

$('.datepicker').pickadate();

$('.print').on('click', function(e) {
	e.preventDefault();
	var selectedDate = $('.datepicker').val();
	var location = $('#location').val();
	
	//var location = $("#location option:selected").val();
	var url = SITE_URL + '?module=Dietary&page=menu&action=print_menu&location=' + location;
	window.open(url + '&weekSeed=' + selectedDate + '&pdf=true', '_blank');
	$(this).dialog("close");
});

$("#print-menu-select-date").on("click", function(e){
	e.preventDefault();
	var location = $("#location option:selected").val();
	var url = SITE_URL + '?module=Dietary&page=menu&action=print_menu&location=' + location;
	console.log(url);

	$('#menu-date-dialog').dialog({
		buttons: {
			"Submit": function() {
				var selectedDate = $("#selected-date").val();
				window.open(url + '&weekSeed=' + selectedDate + '&pdf=true', '_blank');
				$(this).dialog("close");
			}
		}
	});

});



<?php }
}
