<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 15:53:18
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/menu_start_date.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee1726eaede73_77853777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bfdc7364d52972d52751db3763b8964487f09f8' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/menu_start_date.js',
      1 => 1588714031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee1726eaede73_77853777 (Smarty_Internal_Template $_smarty_tpl) {
?>$(".active").removeClass("active");
$(".show").removeClass("show");
$("#dietarySection").addClass("show");
$("#infoSection").addClass("show");
$("#menu-start-date").addClass("active");
<?php }
}
