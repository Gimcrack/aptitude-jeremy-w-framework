<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 13:27:45
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/public_page_items.js" */ ?>
<?php /*%%SmartyHeaderCode:12702038585e9774fa95e6e4-47866783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8666dbb2f74046311944179ee52ae3a5af7b72e0' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/public_page_items.js',
      1 => 1588714063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12702038585e9774fa95e6e4-47866783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e9774fa95f2a4_49771085',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9774fa95f2a4_49771085')) {function content_5e9774fa95f2a4_49771085($_smarty_tpl) {?>$(".active").removeClass("active");
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

<?php }} ?>
