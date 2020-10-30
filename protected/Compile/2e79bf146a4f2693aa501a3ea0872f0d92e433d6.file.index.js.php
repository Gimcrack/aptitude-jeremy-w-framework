<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 13:53:39
         compiled from "/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/index.js" */ ?>
<?php /*%%SmartyHeaderCode:4329709385eb0a2cc461941-12103451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e79bf146a4f2693aa501a3ea0872f0d92e433d6' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Admissions/Views/admissions/index.js',
      1 => 1588715617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4329709385eb0a2cc461941-12103451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5eb0a2cc461bd5_65969368',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb0a2cc461bd5_65969368')) {function content_5eb0a2cc461bd5_65969368($_smarty_tpl) {?>$(".show").removeClass("show");
$(".active").removeClass("active");
$("#admissionsSection").addClass("show");
$("#current-prospects").addClass("active");
<?php }} ?>
