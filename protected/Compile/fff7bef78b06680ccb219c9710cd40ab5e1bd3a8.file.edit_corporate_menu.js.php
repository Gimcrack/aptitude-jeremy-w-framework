<?php /* Smarty version Smarty-3.1.19, created on 2020-04-15 14:11:03
         compiled from "/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/edit_corporate_menu.js" */ ?>
<?php /*%%SmartyHeaderCode:10867288385e97835fe2ab94-25279463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fff7bef78b06680ccb219c9710cd40ab5e1bd3a8' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/modules/Dietary/Views/menu/edit_corporate_menu.js',
      1 => 1586988661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10867288385e97835fe2ab94-25279463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e97835fe2c909_90162773',
  'variables' => 
  array (
    'location' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e97835fe2c909_90162773')) {function content_5e97835fe2c909_90162773($_smarty_tpl) {?><script>
	$(document).ready(function() {
		$(".facilities-list").hide();

		$("#reset").submit(function(e) {
			e.preventDefault();
			$.post(SITE_URL, { 
				module: "Dietary",
				page: "Menu",
				action: "deleteId",
				type: "MenuMod",
				id: $("#public-id").val(),
				}, function (response) {
					window.location.href = SITE_URL + "/?module=Dietary&page=dietary&action=current&location=" + $("#location").val();
				}, "json"
			);
		});

		<?php if (!$_smarty_tpl->tpl_vars['location']->value) {?>
			$(".facilities-list").hide();
		<?php }?>

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
    
</script>
<?php }} ?>
