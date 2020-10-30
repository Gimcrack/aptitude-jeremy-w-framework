<?php /* Smarty version Smarty-3.1.19, created on 2019-03-27 05:07:19
         compiled from "/var/www/html/aptitudecare/modules/Dietary/Views/info/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14520763985c9b0507419f10-97637104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ff1283b49a7e069aadd9eeb7abbea051364f5a0' => 
    array (
      0 => '/var/www/html/aptitudecare/modules/Dietary/Views/info/manage.tpl',
      1 => 1548286688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14520763985c9b0507419f10-97637104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menus' => 0,
    'menu' => 0,
    'SITE_URL' => 0,
    'FRAMEWORK_IMAGES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c9b050746bc93_31565160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9b050746bc93_31565160')) {function content_5c9b050746bc93_31565160($_smarty_tpl) {?><script>
	$(document).ready(function() {
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

	});
</script>


<h1>Manage Menus</h1>
<br>
<table class="view">
	<tr>
		<th>Menu Name</th>
		<th style="width:20px;font-weight:normal"><span class="text-darker-grey">Edit</span></th>
		<th style="width:20px;font-weight:normal"><span class="text-darker-grey">Delete</span></th>
	<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
	<tr>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'ISO-8859-1');?>
</td>
		<td>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'ISO-8859-1');?>
/?module=Dietary&amp;page=info&amp;action=edit_menu&amp;menu=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/pencil.png" alt="">
			</a>
		</td>
		<td>
			<a href="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" class="delete">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'ISO-8859-1');?>
/delete.png" alt="">
				<input type="hidden" name="public_id" class="public-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->public_id, ENT_QUOTES, 'ISO-8859-1');?>
" />
			</a>
		</td>
	</tr>
	<?php } ?>
</table>




<div id="dialog" title="Confirmation Required">
	<p>Are you sure you want to delete this item? This cannot be undone.</p>
</div><?php }} ?>
