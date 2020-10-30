<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 15:53:24
  from '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/manage.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee172740ffe10_87686633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ace6c325578cd3ff4233c1e866687377987375c' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/manage.js',
      1 => 1588714156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee172740ffe10_87686633 (Smarty_Internal_Template $_smarty_tpl) {
?>$(".active").removeClass("active");
$(".show").removeClass("show");
$("#dietarySection").addClass("show");
$("#infoSection").addClass("show");
$("#manage-menus").addClass("active");


$(".delete").click(function(e) {
	e.preventDefault();
	var dataRow = $(this).parent().parent();
	var item = $(this);
	$("#dialog").dialog({
		buttons: {
			"Confirm": function() {
				var row = item.children().next($(".public-id"));
				var id = row.val();
					
				$.ajax({
					type: 'post',
					url: SITE_URL,
					data: {
						page: "info",
						action: 'delete_menu',
						menu: id,
					},
					success: function() {
						dataRow.fadeOut("slow");
					}
				});
				$(this).dialog("close");

			},
			"Cancel": function() {
				$(this).dialog("close");
			}
		}
	});
});

<?php }
}
