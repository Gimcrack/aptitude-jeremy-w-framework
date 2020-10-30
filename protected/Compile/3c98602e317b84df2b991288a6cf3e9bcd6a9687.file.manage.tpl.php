<?php /* Smarty version Smarty-3.1.19, created on 2020-05-04 15:24:39
         compiled from "/var/www/html/aptitudecare/dev/protected/Views/physicians/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21410125505eb0a437424926-88095318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c98602e317b84df2b991288a6cf3e9bcd6a9687' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/physicians/manage.tpl',
      1 => 1583534252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21410125505eb0a437424926-88095318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE_URL' => 0,
    'location_id' => 0,
    'locations' => 0,
    'location' => 0,
    'physicians' => 0,
    'physician' => 0,
    'FRAMEWORK_IMAGES' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5eb0a4374386c0_11542545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb0a4374386c0_11542545')) {function content_5eb0a4374386c0_11542545($_smarty_tpl) {?><script>
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
</script>

<div id="page-header">
	<div id="action-left"><a class="button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/?page=physicians&amp;action=physician&amp;type=add&amp;location=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_id']->value, ENT_QUOTES, 'UTF-8');?>
">Add New</a></div>
	<div id="center-title">
		<div id="locations">
			<select name="location" id="location">
			<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
				<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->public_id, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['location']->value->public_id==$_smarty_tpl->tpl_vars['location_id']->value) {?> selected<?php }?>><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value->name, ENT_QUOTES, 'UTF-8');?>
</h1></option>
			<?php } ?>
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

	<?php  $_smarty_tpl->tpl_vars['physician'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['physician']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['physicians']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['physician']->key => $_smarty_tpl->tpl_vars['physician']->value) {
$_smarty_tpl->tpl_vars['physician']->_loop = true;
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
	<?php } ?>
</table>

<?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['SITE_URL']->value)."?page=physicians&action=manage&location=".((string)$_smarty_tpl->tpl_vars['location_id']->value), null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate ("elements/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
<?php }?>


<div id="dialog" title="Confirmation Required">
	<p>Are you sure you want to delete this item? This cannot be undone.</p>
</div><?php }} ?>
