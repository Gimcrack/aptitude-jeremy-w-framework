<?php /* Smarty version Smarty-3.1.19, created on 2020-05-04 15:24:37
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/users/manage.js" */ ?>
<?php /*%%SmartyHeaderCode:11591096695e7bb474c4db18-33483478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e58939c847a7e4fcc8a2476edb80aff7d65d0bfd' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/users/manage.js',
      1 => 1587157776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11591096695e7bb474c4db18-33483478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e7bb474c4fae9_23058805',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e7bb474c4fae9_23058805')) {function content_5e7bb474c4fae9_23058805($_smarty_tpl) {?>$(".active").removeClass("active");
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
<?php }} ?>
