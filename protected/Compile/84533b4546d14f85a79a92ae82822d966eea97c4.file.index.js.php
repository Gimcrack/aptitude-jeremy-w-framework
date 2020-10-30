<?php /* Smarty version Smarty-3.1.19, created on 2020-05-05 13:26:50
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/dietary/index.js" */ ?>
<?php /*%%SmartyHeaderCode:11853459795e7bc183610b59-29906503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84533b4546d14f85a79a92ae82822d966eea97c4' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/dietary/index.js',
      1 => 1588714007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11853459795e7bc183610b59-29906503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e7bc1836133a6_13596173',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e7bc1836133a6_13596173')) {function content_5e7bc1836133a6_13596173($_smarty_tpl) {?>$("#location").change(function() {
	var location = $("#location option:selected").val();
	window.location.href = SITE_URL + "/?module=Dietary&location=" + location;
});

$(".show").removeClass("show");
$(".active").removeClass("active");
$("#dietarySection").addClass("show");
$("#current-residents").addClass("active");

$('#deleteModal').on('show.bs.modal', function(e) {

	var button = $(e.relatedTarget);
	var publicId = button.data('publicid');

	$('#delete').click(function() {
		$.ajax({
			type: 'post',
			url: SITE_URL,
			data: {
				page: "Schedules",
				action: 'dischargePatient',
				id: publicId,
			},
			success: function(e) {
				$('#deleteModal').modal('hide');
				window.location.replace(SITE_URL + '/?module=Dietary');
			}
		});
	});
});

$(".add-patient").on("click", function (e) {
	e.preventDefault();
	var roomNumber = $(this).next().val();
	var location = $("#location").val();
	window.location.href = SITE_URL + "/?module=Dietary&page=patient_info&action=add_patient&location=" + location + "&number=" + roomNumber;
});


$("#selectDateModal").on('show.bs.modal', function(e) {
	var button = $(e.relatedTarget);

	var url = $(this).attr("href");
	$("#selectDateModal").dialog({
		buttons: {
			"Submit": function() {
				var selectedDate = $("#selected-date").val();
				window.open(url + "&date=" + selectedDate, '_blank');
				$(this).dialog("close");
			}
		}
	});
});

$("#meal-order-form-select-date").on("click", function(e) {
	e.preventDefault();
	var url = $(this).attr("href");
	$("#meal-order-dialog").dialog({
		buttons: {
			"Submit": function() {
				var selectedDate = $("#form-date").val();
				window.open(url + "&start_date=" + selectedDate, '_blank');
				$(this).dialog("close");
			}
		}
	});
});

<?php }} ?>
