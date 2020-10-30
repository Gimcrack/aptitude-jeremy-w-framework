<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 13:27:14
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/menu_start_date.js" */ ?>
<?php /*%%SmartyHeaderCode:13151264845e991808f239f9-43483442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b2804082cddc832581d052507b5e3ebaa765bbd' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/menu_start_date.js',
      1 => 1588714031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13151264845e991808f239f9-43483442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e991808f24529_55246294',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e991808f24529_55246294')) {function content_5e991808f24529_55246294($_smarty_tpl) {?>$(".active").removeClass("active");
$(".show").removeClass("show");
$("#dietarySection").addClass("show");
$("#infoSection").addClass("show");
$("#menu-start-date").addClass("active");
<?php }} ?>
