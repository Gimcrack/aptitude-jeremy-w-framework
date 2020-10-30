<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-31 15:36:03
  from '/var/www/html/aptitudecare/dev/protected/Views/users/user.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4d89635fd0e4_74594254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3650a1e4a30335ab409fffeb554e974e18d36527' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/users/user.js',
      1 => 1587087896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4d89635fd0e4_74594254 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
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
<?php echo '</script'; ?>
><?php }
}
