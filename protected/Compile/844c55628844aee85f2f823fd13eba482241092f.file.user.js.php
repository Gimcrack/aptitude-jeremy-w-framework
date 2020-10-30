<?php /* Smarty version Smarty-3.1.19, created on 2020-03-25 10:19:37
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/users/user.js" */ ?>
<?php /*%%SmartyHeaderCode:20840268125e7ba0b9cda305-40318472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '844c55628844aee85f2f823fd13eba482241092f' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/users/user.js',
      1 => 1585159842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20840268125e7ba0b9cda305-40318472',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e7ba0b9cdc275_29507519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e7ba0b9cdc275_29507519')) {function content_5e7ba0b9cdc275_29507519($_smarty_tpl) {?><script>
	$(document).ready(function () {
		$("#phone").mask("(999) 999-9999");

		var $clinician = $("#clinician");
		var $clinicianRow = $(".clinician-type-cell");
		var $group = $("#group");		

		if ($clinician.val() == '') {
			$clinicianRow.hide();
		} 

		if ($group.val() == 6) {
			$clinicianRow.show();
		}
		
		$("#user").validate({
			rules: {
				first_name: "required",
				last_name: "required",
				email: {
					required: true,
					email: true
				},
				password: "required",
				verify_password: {
					equalTo: "#password",
					required: true
				},
				group: "required",
				default_location: "required"
			}
		}); 

		$("#group").change(function() {
			//	Get the modules available for the selected group type
			$.post(SITE_URL, { page: "users", action: "fetchModulesByGroup", group: $("option:selected", this).val() }, function (e) {
				var count = Object.keys(e).length;
				if (count > 1) {
					$.each(e, function (i, d) {
						$("#user-module").append("<option value=\"" + d.id + "\">" + d.name + "</option>"); 
					});
					$("#module-row").show();
				}
				
			},
			"json"
			);

			//  If group is Home Health Clinician show the clinician row
			if ($(this).val() == 6) {
				$clinicianRow.show();
			} else {
				$clinicianRow.hide();
			}
		});


		$("#email").blur(function() {
			var email = $(this).val();
			$.post(SITE_URL, { page: "users", action: "verify_user", term: email }, function (e) {
				if (e == true) {
					console.log('hello');
					$("<p class=\"error\">This user already exists</p>").appendTo($("#email").parent().parent());
				}
			},
			"json"
			);
		});

	});
</script><?php }} ?>
