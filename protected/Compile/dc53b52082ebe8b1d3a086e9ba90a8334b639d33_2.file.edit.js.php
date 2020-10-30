<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 13:20:12
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/edit.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebf078c3c1fa9_49175996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc53b52082ebe8b1d3a086e9ba90a8334b639d33' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/edit.js',
      1 => 1586985481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebf078c3c1fa9_49175996 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
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
    
<?php echo '</script'; ?>
><?php }
}
