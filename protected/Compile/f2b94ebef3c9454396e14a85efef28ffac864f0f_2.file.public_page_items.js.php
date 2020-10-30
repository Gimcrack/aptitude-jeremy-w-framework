<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-12 15:17:22
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/public_page_items.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebb2e828dde06_80790003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2b94ebef3c9454396e14a85efef28ffac864f0f' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/public_page_items.js',
      1 => 1588714063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebb2e828dde06_80790003 (Smarty_Internal_Template $_smarty_tpl) {
?>$(".active").removeClass("active");
$(".show").removeClass("show");
$("#dietarySection").addClass("show");
$("#infoSection").addClass("show");
$("#public-page-items").addClass("active");


function limitText(limitField, limitCount, limitNum) {
	console.log(limitField);
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}

$('#summernote').summernote({
	height: 200
});

<?php }
}
