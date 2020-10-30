<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 13:26:07
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/current.js" */ ?>
<?php /*%%SmartyHeaderCode:5645694725e9771cbe249b5-39665222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '143094e0850483db2d34c5f5664c7ca3c520524b' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/current.js',
      1 => 1588713965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5645694725e9771cbe249b5-39665222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e9771cbe256f1_79730987',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9771cbe256f1_79730987')) {function content_5e9771cbe256f1_79730987($_smarty_tpl) {?>$("#location").change(function() {
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



<?php }} ?>
