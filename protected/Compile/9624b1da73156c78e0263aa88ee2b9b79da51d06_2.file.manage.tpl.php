<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-19 11:04:05
  from '/var/www/html/aptitudecare/dev/protected/Views/physicians/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec42da5231b77_81051872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9624b1da73156c78e0263aa88ee2b9b79da51d06' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/physicians/manage.tpl',
      1 => 1583534252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:elements/pagination.tpl' => 1,
  ),
),false)) {
function content_5ec42da5231b77_81051872 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(document).ready(function() {
		$(".delete").click(function(e) {
			e.preventDefault();
			var dataRow = $(this).parent().parent();
			console.log(dataRow);
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
								page: $("#page").val(),
								action: 'deleteId',
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
			window.location = SITE_URL + "/?page=physicians&action=manage&orderBy=" + order;
		});


		$("#locations").change(function() {
			window.location = SITE_URL + "/?page=physicians&action=manage&location=" + $("#locations option:selected").val();
		});

	});
<?php echo '</script'; ?>
>

<div id="page-header">
	<div id="action-left"><a class="button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=physicians&amp;action=physician&amp;type=add&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
">Add New</a></div>
	<div id="center-title">
		<div id="locations">
			<select name="location" id="location">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations']->value, 'location');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
?>
				<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value->public_id == $_smarty_tpl->tpl_vars['location_id']->value) {?> selected<?php }?>><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>
</h1></option>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
	</div>
	<div id="action-right"></div>
</div>

<h2>Manage Physicians</h2>


<table class="view">
	<tr>
		<th>Last Name</th>
		<th>First Name</th>
		<th>City</th>
		<th>State</th>
		<th>Phone</th>
		<th style="width:20px;font-weight:normal"><span class="text-darker-grey">Edit</span></th>
		<th style="width:20px;font-weight:normal"><span class="text-darker-grey">Delete</span></th>
	</tr>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['physicians']->value, 'physician');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['physician']->value) {
?>
	<tr>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['physician']->value->last_name, ENT_QUOTES, 'UTF-8');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['physician']->value->first_name, ENT_QUOTES, 'UTF-8');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['physician']->value->city, ENT_QUOTES, 'UTF-8');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['physician']->value->state, ENT_QUOTES, 'UTF-8');?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['physician']->value->phone, ENT_QUOTES, 'UTF-8');?>
</td>
		<td>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=physicians&amp;action=physician&amp;type=edit&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['physician']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/pencil.png" alt="">
			</a>
		</td>
		<td>
			<a href="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['physician']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" class="delete">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_IMAGES']->value, ENT_QUOTES, 'UTF-8');?>
/delete.png" alt="">
				<input type="hidden" name="public_id" class="public-id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['physician']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" />
			</a>
		</td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('url', ((string)$_smarty_tpl->tpl_vars['SITE_URL']->value)."?page=physicians&action=manage&location=".((string)$_smarty_tpl->tpl_vars['location_id']->value));?>
	<?php $_smarty_tpl->_subTemplateRender("file:elements/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>	
<?php }?>


<div id="dialog" title="Confirmation Required">
	<p>Are you sure you want to delete this item? This cannot be undone.</p>
</div><?php }
}
