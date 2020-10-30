<?php /* Smarty version Smarty-3.1.19, created on 2020-04-16 19:03:29
         compiled from "/var/www/html/aptitudecare/dev/modules/Activities/Views/activities/index.js" */ ?>
<?php /*%%SmartyHeaderCode:8445143655e991c02035df6-82961956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13f2d6ed9a343dc32fc2a1c2b81b96c148c43bfa' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Activities/Views/activities/index.js',
      1 => 1587092607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8445143655e991c02035df6-82961956',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e991c02036ea8_16074390',
  'variables' => 
  array (
    'IMAGES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e991c02036ea8_16074390')) {function content_5e991c02036ea8_16074390($_smarty_tpl) {?>$(".active").removeClass("active");
$("#current-activities").addClass("active");


$(function() {
	$("#datepicker").datepicker({
		showOn: "button",
		buttonImage: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/calendar.png",
		buttonImageOnly: true
	});
});

$("#datepicker").change(function() {
	window.location = SITE_URL + "/?module=Activities&date=" + $(this).val();
});<?php }} ?>
