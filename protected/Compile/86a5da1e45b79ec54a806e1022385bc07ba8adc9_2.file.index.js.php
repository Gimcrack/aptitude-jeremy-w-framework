<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-23 09:48:28
  from '/var/www/html/aptitudecare/dev/modules/Activities/Views/activities/index.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef2406c869b00_73104564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a5da1e45b79ec54a806e1022385bc07ba8adc9' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Activities/Views/activities/index.js',
      1 => 1592934484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef2406c869b00_73104564 (Smarty_Internal_Template $_smarty_tpl) {
?>$(".active").removeClass("active");
$("#current-activities").addClass("active");


// $(function() {
// 	$("#datepicker").datepicker({
// 		showOn: "button",
// 		buttonImage: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/calendar.png",
// 		buttonImageOnly: true
// 	});
// });

$("#datepicker").change(function() {
	window.location = SITE_URL + "/?module=Activities&date=" + $(this).val();
});


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
						module: "Activities",
						page: "activities",
						action: "deleteActivity",
						id: id,
					},
					success: function(e) {
						console.log(e);
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
