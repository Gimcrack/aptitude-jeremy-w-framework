<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 08:43:46
  from '/var/www/html/aptitudecare/dev/protected/Views/users/manage.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee10dc252b842_39782300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ee8caff233d2a1da940677a24095dc270770d01' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/users/manage.js',
      1 => 1587157776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee10dc252b842_39782300 (Smarty_Internal_Template $_smarty_tpl) {
?>$(".active").removeClass("active");
$(".show").removeClass("show");
$("#dataSection").addClass("show");
$("#users").addClass("active");


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
						page: "users",
						action: 'delete_user',
						id: id,
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

$(".order").click(function(e) {
	e.preventDefault();
	var order = $(this).next("input").val();
	console.log
	window.location = SITE_URL + "/?page=data&action=manage&type=" + $("#page").val() + "&orderBy=" + order;
});


$("#locations").change(function() {
	window.location = SITE_URL + "/?page=users&action=manage&location=" + $("#locations option:selected").val();
});
<?php }
}
