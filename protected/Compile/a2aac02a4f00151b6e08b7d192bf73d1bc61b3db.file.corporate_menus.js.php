<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 13:29:30
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/corporate_menus.js" */ ?>
<?php /*%%SmartyHeaderCode:3438096705e977f4ff30a98-18270334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2aac02a4f00151b6e08b7d192bf73d1bc61b3db' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/corporate_menus.js',
      1 => 1588714167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3438096705e977f4ff30a98-18270334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e977f4ff31a82_37667140',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e977f4ff31a82_37667140')) {function content_5e977f4ff31a82_37667140($_smarty_tpl) {?>$(".active").removeClass("active");
$(".show").removeClass("show");
$("#dietarySection").addClass("show");
$("#infoSection").addClass("show");
$("#corporate-menus").addClass("active");


$("#menu").change(function() {
	window.location.href = SITE_URL + "/?module=Dietary&page=info&action=corporate_menus&menu=" + $("option:selected", this).val();
});
<?php }} ?>
