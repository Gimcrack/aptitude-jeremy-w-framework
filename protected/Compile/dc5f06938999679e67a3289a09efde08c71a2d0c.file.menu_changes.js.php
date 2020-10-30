<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 13:30:11
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/menu_changes.js" */ ?>
<?php /*%%SmartyHeaderCode:4720895895e991a0f8d2286-83672913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc5f06938999679e67a3289a09efde08c71a2d0c' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/reports/menu_changes.js',
      1 => 1588714205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4720895895e991a0f8d2286-83672913',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e991a0f8d2e43_18186083',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e991a0f8d2e43_18186083')) {function content_5e991a0f8d2e43_18186083($_smarty_tpl) {?>$(".active").removeClass("active");
$(".show").removeClass("show");
$("#dietarySection").addClass("show");
$("#reportsSection").addClass("show");
$("#menu-changes").addClass("active");
<?php }} ?>
