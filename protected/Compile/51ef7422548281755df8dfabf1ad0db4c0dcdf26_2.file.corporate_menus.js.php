<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 15:53:25
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/corporate_menus.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee1727559f673_30762083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51ef7422548281755df8dfabf1ad0db4c0dcdf26' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/corporate_menus.js',
      1 => 1588714167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee1727559f673_30762083 (Smarty_Internal_Template $_smarty_tpl) {
?>$(".active").removeClass("active");
$(".show").removeClass("show");
$("#dietarySection").addClass("show");
$("#infoSection").addClass("show");
$("#corporate-menus").addClass("active");


$("#menu").change(function() {
	window.location.href = SITE_URL + "/?module=Dietary&page=info&action=corporate_menus&menu=" + $("option:selected", this).val();
});
<?php }
}
