<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 13:30:08
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/diet_census.js" */ ?>
<?php /*%%SmartyHeaderCode:3934134755e83e2c592ae58-98927832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd8ccbc96821eae31f7097ec0153aa40151d4902' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/diet_census.js',
      1 => 1588714198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3934134755e83e2c592ae58-98927832',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e83e2c592b739_75540879',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e83e2c592b739_75540879')) {function content_5e83e2c592b739_75540879($_smarty_tpl) {?>$(".active").removeClass("active");
$(".show").removeClass("show");
$("#dietarySection").addClass("show");
$("#reportsSection").addClass("show");
$("#diet-census").addClass("active");


$(".order").click(function(e) {
	e.preventDefault();
	var id = $(this).attr("id");
	var url = SITE_URL + "/?module=Dietary&page=reports&action=diet_census&location=" + $("#location").val() + "&orderby=" + id;
	window.location = url;
});
<?php }} ?>
