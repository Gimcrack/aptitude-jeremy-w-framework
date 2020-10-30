<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 15:54:36
         compiled from "/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/new_prospect.js" */ ?>
<?php /*%%SmartyHeaderCode:11109248825eb1f874d03978-40318077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e6adeed974bb6ad785ee67183792a07a9af3b86' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/new_prospect.js',
      1 => 1588722872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11109248825eb1f874d03978-40318077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5eb1f874d04523_66580712',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb1f874d04523_66580712')) {function content_5eb1f874d04523_66580712($_smarty_tpl) {?>$(".show").removeClass("show");
$(".active").removeClass("active");
$("#admissionsSection").addClass("show");
$("#new-prospect").addClass("active");

$("#phone").mask("(999) 999-9999");
<?php }} ?>
