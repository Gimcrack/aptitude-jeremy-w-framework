<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-14 11:56:15
  from '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/current_admissions.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebda25f592337_68572233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78d6d30d353feedeea52509f6f37b4c25bda8159' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/current_admissions.js',
      1 => 1589479560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebda25f592337_68572233 (Smarty_Internal_Template $_smarty_tpl) {
?>$(".show").removeClass("show");
$(".active").removeClass("active");
$("#admissionsSection").addClass("show");
$("#current-admissions").addClass("active");
<?php }
}
