<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 11:45:51
  from '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/scheduled_admissions.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed1666f8ba4a2_76215053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aa0d97567471cb853eb30139db974b4341c34f8' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/scheduled_admissions.js',
      1 => 1590781546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed1666f8ba4a2_76215053 (Smarty_Internal_Template $_smarty_tpl) {
?>$(".show").removeClass("show");
$(".active").removeClass("active");
$("#admissionsSection").addClass("show");
$("#scheduled-admissions").addClass("active");
<?php }
}
