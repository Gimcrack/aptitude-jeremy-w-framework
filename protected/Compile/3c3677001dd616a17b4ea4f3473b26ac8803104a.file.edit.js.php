<?php /* Smarty version Smarty-3.1.19, created on 2020-04-15 13:18:14
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/edit.js" */ ?>
<?php /*%%SmartyHeaderCode:6895572485e977a162d14d9-91064365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c3677001dd616a17b4ea4f3473b26ac8803104a' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/edit.js',
      1 => 1586985481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6895572485e977a162d14d9-91064365',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e977a162d2875_33440752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e977a162d2875_33440752')) {function content_5e977a162d2875_33440752($_smarty_tpl) {?><script>
	$(document).ready(function() {
		$("#reset").submit(function(e) {
			e.preventDefault();
			$.post(SITE_URL, { 
				module: "Dietary",
				page: "MenuMod",
				action: "deleteId",
				id: $("#public-id").val(),
				}, function (response) {
					window.location.href = SITE_URL + "/?module=Dietary&page=dietary&action=current&location=" + $("#location").val();
				}, "json"
			);
		});

		$(".facilities-list").hide();

		$('input:radio[name="edit_type"]').change(function() {
			if ($(this).is(':checked') && $(this).val() == 'select_locations') {
				$(".facilities-list").show();
			} else {
				$(".facilities-list").hide();
			}
		});
	});


	$('#summernote').summernote({
    	height: 350
    });
    
</script><?php }} ?>
