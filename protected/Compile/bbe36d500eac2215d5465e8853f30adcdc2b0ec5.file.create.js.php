<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 13:29:00
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/create.js" */ ?>
<?php /*%%SmartyHeaderCode:5120927295e9918b383ad21-82077972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe36d500eac2215d5465e8853f30adcdc2b0ec5' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/create.js',
      1 => 1588714138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5120927295e9918b383ad21-82077972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e9918b383b297_61945960',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e9918b383b297_61945960')) {function content_5e9918b383b297_61945960($_smarty_tpl) {?>$(".active").removeClass("active");
$(".show").removeClass("show");
$("#dietarySection").addClass("show");
$("#infoSection").addClass("show");
$("#create-menu").addClass("active");
<?php }} ?>
