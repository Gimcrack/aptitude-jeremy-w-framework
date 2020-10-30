<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 13:29:19
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/manage.js" */ ?>
<?php /*%%SmartyHeaderCode:1947816455e977bf0a04a08-39668727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ad5b9e9bf43e41c622db6abce5fadd2e298f4bf' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/info/manage.js',
      1 => 1588714156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1947816455e977bf0a04a08-39668727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e977bf0a05cb6_56272925',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e977bf0a05cb6_56272925')) {function content_5e977bf0a05cb6_56272925($_smarty_tpl) {?>$(".active").removeClass("active");
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

<?php }} ?>
