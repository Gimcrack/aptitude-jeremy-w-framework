<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-09 12:22:15
  from '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/index.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edfef77645772_49574653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df4eb56c7649989fa921189493eef9d4eca64a83' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/index.js',
      1 => 1591734122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edfef77645772_49574653 (Smarty_Internal_Template $_smarty_tpl) {
?>$(".show").removeClass("show");
$(".active").removeClass("active");
$("#admissionsSection").addClass("show");
$("#prospects").addClass("active");

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$(function () {
  $('[data-toggle="popover"]').popover()
});

$(".timeframe").change(function() {
	var residentID = $(this).siblings().val();
	var timeframe = $(this).val();

	$.post(SITE_URL, {
		module: 'Admissions',
		page: 'admissions',
		action: 'change_timeframe',
		id: residentID,
		timeframe: timeframe
		}, function(e) {
			//console.log(e);
			location.reload();
		});
});




<?php }
}
